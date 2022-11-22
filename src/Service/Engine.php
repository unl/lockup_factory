<?php

namespace App\Service;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Lockups;


//DB query and caching layer
class Engine
{
    private $doctrine;
    private $cachedQuery = [];

    public function __construct(ManagerRegistry $doctrine, Auth $auth)
    {
        $this->doctrine = $doctrine;
    }

    private function checkQuery(string $queryName) {
        if (array_key_exists($queryName, $this->cachedQuery)) {
            if ($this->cachedQuery[$queryName] != null && (count($this->cachedQuery[$queryName]) != 0)) {
                return true;
            }
        }
        return false;
    }

    private function setQuery($query, string $queryName) {
        $this->cachedQuery[$queryName] = $query;
    }

    private function getQuery(string $queryName) {
        if (array_key_exists($queryName, $this->cachedQuery)) {
            return $this->cachedQuery[$queryName];
        } else {
            return null;
        }
    }

    public function getAllLockups($refresh = false) {
        $queryName = "allLockups";
        
        if ($refresh == true || $this->checkQuery($queryName)) {
            $tempQuery = $this->doctrine->getRepository(Lockups::class)->findAll();
            $this->setQuery($tempQuery, $queryName);
        }
        return $this->getQuery($queryName);
    }
}