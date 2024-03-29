<?php

namespace App\Service;

use App\Entity\Users;
use App\Service\Engine;
use Doctrine\Persistence\ManagerRegistry;
use phpCAS;


class Auth
{
    private $doctrine;
    private $directory_url = 'https://directory.unl.edu/';
    private $entityManager;
    private $root_url;
    private $engine;


    public function __construct(ManagerRegistry $doctrine, string $appUrl, Engine $engine)
    {
        $this->doctrine = $doctrine;
        $this->entityManager = $doctrine->getManager();
        $this->root_url = $appUrl;
        $this->engine = $engine;
        

        // $this->engine = $engine;

        if (!phpCAS::isInitialized()) {
            phpCAS::client(CAS_VERSION_2_0, 'shib.unl.edu', 443, 'idp/profile/cas');
            //phpCAS::setCasServerCACert(self::$cas_cert_path);
            phpCAS::setNoCasServerValidation();
            phpCAS::setVerbose(true);
        }
    }

    public function requireAuth(): bool
    {
        $check_auth = phpCAS::checkAuthentication();
        if (!$check_auth) {
            phpCAS::forceAuthentication();
        }
        $this->setUser();
        return true;
    }

    public function logout(): bool
    {
        if (phpCAS::checkAuthentication()) {
            phpCAS::logoutWithRedirectService($this->root_url);
        }
        return true;
    }

    public function getUsername(): string
    {
        return phpCAS::getUser();
    }

    public function getUser(): ?Users
    {
        // return $this->doctrine->getRepository(Users::class)->findOneBy(['username' => $this->getUsername()]);
        return $this->engine->getUser(userName: $this->getUsername());

    }

    private function setUser(): int
    {
        $username = $this->getUsername();

        if (empty($username)) {
            return 0;
        }

        # get the user from the DB and do something or something else
        $users = $this->engine->getUser(userName: $username);
        if ($users) {
            # they exist, no worries
            # if they don't have an email, they were created before we had emails in teh system
            // if (empty($users->getEmail)) {
            //     $info = $this->getUserInfo($username);
            //     $users->setEmail = array_key_exists('email', $info) ? $info['email'] : NULL;
            //     $this->entityManager->persist($users);
            // }
        } else {
            $info = $this->getUserInfo($username);
            # Create a new user
            $user = new Users;
            $user->setUsername($username);
            $user->setEmail(array_key_exists('email', $info) ? $info['email'] : NULL);
            $user->setDateCreated(new \DateTime());
            $user->setName($info['first_name'] . " " . $info['last_name']);
            $this->entityManager->persist($user);
            $this->entityManager->flush();
        }


        return 0;
    }

    private function getUserInfo($uid): array
    {
        $info = array();

        if (!$json = @file_get_contents($this->directory_url . '?uid=' . $uid . '&format=json')) {
            return $info;
        }

        if (!$json = json_decode($json, true)) {
            return $info;
        }

        $map = array(
            'givenName' => 'first_name',
            'sn' => 'last_name',
            'mail' => 'email'
        );

        foreach ($map as $from => $to) {
            if (isset($json[$from][0])) {
                $info[$to] = $json[$from][0];
            }
        }

        return $info;
    }

    public function isApprover(): bool
    {
        $user = $this->getUser();
        if ($user->getRole() == "approver") {
            return true;
        } else {
            return false;
        }
    }

    public function isCreative(): bool
    {
        $user = $this->getUser();
        if ($user->getRole() == "creative") {
            return true;
        } else {
            return false;
        }
    }

    public function isAdmin(): bool
    {
        $user = $this->getUser();
        if ($user->getRole() == "admin") {
            return true;
        } else {
            return false;
        }
    }

    public function isSpecial(): bool
    {
        return ($this->isApprover() or $this->isCreative() or $this->isAdmin());
    }
}
