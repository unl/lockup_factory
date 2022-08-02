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
                    array_push($searchLockupResult, $this->doctrine->getRepository(Lockups::class)->find($arrItem));
                }
            } else {
                array_push($searchLockupResult, $this->doctrine->getRepository(Lockups::class)->find($arrItem));
            }
        }
        return $searchLockupResult;
    }
}
