<?php

namespace App\Service;

use App\Entity\Lockups;
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

    public function search(string $search, bool $private = false, int $id = null)
    {
        $searchLockupResult = [];
        $searchArr = [];

        foreach ($this->lockupsFieldsRepository->searchField($search) as $searchItem) {
            array_push($searchArr, $searchItem->getLockup()->getId());
        }

        foreach ($this->lockupsRepository->searchNames($search) as $searchItem) {
            array_push($searchArr, $searchItem->getId());
        }

        $searchArr = array_unique($searchArr);

        foreach ($searchArr as $arrItem) {
            $temp = $this->doctrine->getRepository(Lockups::class)->find($arrItem);
            if ($private) {
                if ($temp->getUser()->getId() == $this->auth->getUser()->getId()) {
                    array_push($searchLockupResult, $temp);
                }
            } else {
                // for lockupsLibrary
                if ($this->auth->isAdmin() == true) {
                    array_push($searchLockupResult, $temp);
                } else {
                    if ($temp->getPublic() == 1) {
                    array_push($searchLockupResult, $temp);
                    }
                }
            }
        }
        return $searchLockupResult;
    }

    public function lockupsApproved(int $id) : bool {
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

    public function ownsLockup (int $id) : bool {
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

    public function getLockupFileName(Lockups $lockups) : string {
        $lockups_name = $lockups->getDepartment();
        $lockups_name = str_replace(" ", "_", $lockups_name);
        $lockups_name = $lockups_name . "__";
        $this->lockups = $lockups;
        return $lockups_name;
    }

    public function hasApproverFeedback($id) : bool {
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

    public function hasCreativeFeedback($id) : bool {
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

    public function getPendingApproverLockups(int $id = 0) {
        return $this->lockupsRepository->pendingApprover($id);
    }

    public function getPendingCreativeLockups() {
        return $this->lockupsRepository->pendingCreative();
    }
}
