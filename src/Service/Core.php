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
        if ($lockups->getCreativeStatus() && $lockups->getCommunicatorStatus) {
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
}
