<?php

namespace App\Service;

use App\Entity\Lockups;
use App\Entity\Users;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\LockupsRepository;
use App\Repository\LockupsFieldsRepository;
use App\Service\Auth;


class Core
{
    private $doctrine;
    private $lockupsFieldsRepository;
    private $auth;
    private $lockupsRepository;

    public function __construct(ManagerRegistry $doctrine, LockupsRepository $lr, LockupsFieldsRepository $lfr, Auth $auth)
    {
        $this->doctrine = $doctrine;
        $this->lockupsRepository = $lr;
        $this->lockupsFieldsRepository = $lfr;
        $this->auth = $auth;
    }

    private function removeDuplicateLockupsfromArray($array)
    {
        $indexArray = array();
        $newArray = array();
        foreach ($array as $eachLockups) {
            if (!array_key_exists($eachLockups->getId(), $indexArray)) {
                $newArray[$eachLockups->getId()] = $eachLockups;
            }
        }
        return $newArray;
    }

    public function search(string $search, bool $private = false, int $id = null)
    {
        $searchLockupResult = [];
        $searchArr = [];
        $newSearchArr = array();

        // if ($private == true) {
        //     $id = $this->auth->getUser()->getId();
        // }

        $searchField = ($id != null ) ? $this->lockupsFieldsRepository->searchField(value: $search, id: $id) : $this->lockupsFieldsRepository->searchField(value: $search);
        foreach ($searchField as $searchItem) {
            array_push($searchArr, $searchItem->getLockup());
        }


        $searchName = $this->lockupsRepository->searchNames($search);
        foreach ($searchName as $searchItem) {
            array_push($searchArr, $searchItem);
        }


        $newSearchArr = $this->removeDuplicateLockupsfromArray($searchArr);

        foreach ($newSearchArr as $arrItem) {
            if ($private) {
                if ($arrItem->getUser()->getId() == $this->auth->getUser()->getId()) {
                    array_push($searchLockupResult, $arrItem);
                }
            } else {
                // for lockupsLibrary
                if ($this->auth->isAdmin() == true) {
                    array_push($searchLockupResult, $arrItem);
                } else {
                    if ($arrItem->getPublic() == 1 && $this->lockupsApproved($arrItem->getId())) {
                        array_push($searchLockupResult, $arrItem);
                    }
                }
            }
        }
        return $searchLockupResult;
    }

    public function lockupsApproved(int $id): bool
    {
        $lockups = $this->doctrine->getRepository(Lockups::class)->find($id);
        if ($lockups == null) {
            return false;
        }
        if ($lockups->getCreativeStatus() == 1 && $lockups->getCommunicatorStatus() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function ownsLockup(int $id): bool
    {
        $lockups = $this->doctrine->getRepository(Lockups::class)->find($id);
        if ($lockups == null) {
            return false;
        }
        if ($this->auth->getUser() == $lockups->getUser()) {
            return true;
        } else {
            return false;
        }
    }

    public function getLockupFileName(Lockups $lockups): string
    {
        $lockups_name = $lockups->getName();
        $department_name = strtoupper($lockups->getInstitution());
        $lockups_name = str_replace(" ", "_", $lockups_name);
        $department_name = str_replace(" ", "_", $department_name);
        if (!empty($department_name)) {
            $lockups_name = $department_name . "_" . $lockups_name;
        }
        $this->lockups = $lockups;
        return $lockups_name;
    }

    public function hasApproverFeedback($id): bool
    {
        $lockups = $this->doctrine->getRepository(Lockups::class)->find($id);
        $feedbacks = $lockups->getFeedbacks();
        if ($feedbacks == null) {
            return false;
        }
        foreach ($feedbacks as $item) {
            if ($item->getType() == "approver") {
                return true;
            }
        }
        return false;
    }

    public function hasCreativeFeedback($id): bool
    {
        $lockups = $this->doctrine->getRepository(Lockups::class)->find($id);
        $feedbacks = $lockups->getFeedbacks();
        if ($feedbacks == null) {
            return false;
        }
        foreach ($feedbacks as $item) {
            if ($item->getType() == "creative") {
                return true;
            }
        }
        return false;
    }

    public function getPendingApproverLockups(int $id = 0)
    {
        return $this->lockupsRepository->pendingApprover($id);
    }

    public function getPendingCreativeLockups()
    {
        return $this->lockupsRepository->pendingCreative();
    }

    public function searchWrapper(array $lockups, string $searchTerm): array
    { // takes an array of lockups and search term and searches from the array
        $searchedLockupsArray = [];
        foreach ($lockups as $lockup) {
            $pushed = false;
            // find in lockups name
            if (str_contains(strtolower($lockup->getName()), strtolower($searchTerm))) {
                $pushed = true;
            }
            // find in lockups institution
            if (str_contains(strtolower($lockup->getInstitution()), strtolower($searchTerm))) {
                $pushed = true;
            }
            // find in fields
            $lockup_fields = $lockup->getLockupsFields();
            foreach ($lockup_fields as $field) {
                if (str_contains(strtolower($field->getValue()), strtolower($searchTerm))) {
                    $pushed = true;
                }
            }
            if ($pushed == true) {
                array_push($searchedLockupsArray, $lockup);
            }
        }
        return $searchedLockupsArray;
    }

    public function getLockupsLibraryLockups(): array
    {
        if ($this->auth->isAdmin() == true) {
            $publicLockups = $this->doctrine->getRepository(Lockups::class)->findBy([], ['approver' => 'ASC']);
        } else {
            $publicLockups = $this->doctrine->getRepository(Lockups::class)->findBy(['public' => 1, 'CommunicatorStatus' => 1, 'CreativeStatus' => 1], ['approver' => 'ASC']);
        }
        return $this->sortByOrganization($publicLockups);
    }

    public function sortByOrganization($lockups): array
    {
        usort($lockups, function ($a, $b) {
            if ($a->getApprover() == null) {
                $firstValue = "Unknown";
            } else if ($a->getApprover()->getOrganization() == null) {
                $firstValue = "Unknown";
            } else {
                $firstValue = $a->getApprover()->getOrganization();
            }

            if ($b->getApprover() == null) {
                $secondValue = "Unknown";
            } else if ($b->getApprover()->getOrganization() == null) {
                $secondValue = "Unknown";
            } else {
                $secondValue = $b->getApprover()->getOrganization();
            }
            return strcmp($firstValue, $secondValue);
        });

        return $lockups;
    }

    public function maxSearchResultWrapper(array $lockups, int $page, int $maxResults): array
    {
        $lockups = array_slice($lockups, ($page - 1) * $maxResults, $maxResults);
        return $lockups;
    }

    public function lockupsLibraryWrapper(array $lockups): array
    { // wrapper to format lockups array to lockups library specification
        $sortedLockups = [];
        $tempOrg = "";
        $tempArr = [];
        foreach ($lockups as $lockup) {
            if ($lockup->getApprover() == null) {
                $approverDepartment = "Unknown";
            } elseif ($lockup->getApprover()->getOrganization() == null) {
                $approverDepartment = "Unknown";
            } else {
                $approverDepartment = $lockup->getApprover()->getOrganization();
            }

            if ($tempOrg == "") {
                $tempOrg = $approverDepartment;
                array_push($tempArr, $lockup);
            } else if ($tempOrg == $approverDepartment) {
                array_push($tempArr, $lockup);
            } else {
                // array_push($sortedLockups, $tempArr);
                $sortedLockups[$tempOrg] = $tempArr;
                $tempOrg = $approverDepartment;
                $tempArr = [];
                array_push($tempArr, $lockup);
            }
        }
        $sortedLockups[$tempOrg] = $tempArr;
        // foreach($sortedLockups as $item) {
        //     print(var_dump($item[0]->getId()));

        // }
        return $sortedLockups;
    }

    public function filterOrganization(array $sortedLockups, string $approver = null): array
    { // for search by organization
        $sortedArray = [];
        if ($approver != null) {
            foreach ($sortedLockups as $key => $value) {
                if ($key == $approver) {
                    $sortedArray[$key] = $value;
                    return $sortedArray;
                }
            }
        } else {
            return $sortedLockups;
        }
    }

    public function lockupsLibraryManager(array $lockups, int $page, int $maxResults): array
    {
        $tempArray = $this->maxSearchResultWrapper($lockups, $page, $maxResults);
        $tempArray = $this->lockupsLibraryWrapper($tempArray);
        return $tempArray;
    }

    public function searchhByUsername(string $userID)
    {
        $filteredLockups = [];
        $findUser = $this->doctrine->getRepository(Users::class)->findOneBy(['username' => $userID]);
        $allLockups = $this->doctrine->getRepository(Lockups::class)->findBy(['user' => $findUser], ['approver' => 'ASC']);
        $allLockups = $this->sortByOrganization($allLockups);
        foreach ($allLockups as $lockup) {
            if ($this->auth->isAdmin()) {
                return $this->lockupsLibraryManager($allLockups, 1, 999999);
            } else if ($this->auth->isCreative() || $this->auth->isApprover()) {
                if ($lockup->getPublic() == 1) {
                    array_push($filteredLockups, $lockup);
                }
            }
        }
        return $this->lockupsLibraryManager($filteredLockups, 1, 999999);
    }

    public function previouslyApproved()
    {
        $user = $this->auth->getUser();
        $previouslyApprovedLockups = $this->doctrine->getRepository(Lockups::class)->findBy(['approver' => $user->getId()], ['DateCreated' => 'DESC']);
        return $previouslyApprovedLockups;
    }


    public function getPendingUserLockups(int $userID) {
        return $this->lockupsRepository->pendingUserLockups($userID);
    }

    public function getDeniedUserLockups(int $userID) {
        return $this->lockupsRepository->deniedUserLockups($userID);
    }
}
