<?php

use Models\User;

class Auth
{
    /**
     * @var array
     */
    public static $directory_url = 'http://directory.unl.edu/';
    public static $cas_cert_path = '/etc/pki/tls/cert.pem';
    public static $current_user = NULL;
    
    /**
     * Authenticate the user
     */
    public static function authenticate()
    {
        \phpCAS::forceAuthentication();
        
        if (!\phpCAS::getUser()) {
            throw new RuntimeException('Unable to authenticate', 403);
        }
        
        self::setUser();
    }

    public static function setUser() {
        if (self::isLoggedIn()) {
            $user = self::getUser(\phpCAS::getUser());
            self::$current_user = $user;
        }
    }

    public static function isLoggedIn()
    {
        if (\phpCAS::isAuthenticated()) {
            return true;
        }
        return false;
    }

    public static function autoLogin()
    {
        if (!array_key_exists('unl_sso', $_COOKIE)) {
            //No unl_sso cookie was found, no need to auto-login.
            return;
        }
        if (self::$current_user != NULL) {
            //We are already logged in, no need to auto-login
            return;
        }
        
        //Everything looks good.  Log in!
        $result = \phpCAS::checkAuthentication();
    }

    public static function singleLogOut()
    {
        \phpCAS::handleLogoutRequests(false);
    }

    public static function logout()
    {
        \phpCAS::logoutWithRedirectService(\Core::$absolute_base_url);
    }

    /**
     * Get the current user (will create a user if none exist)
     *
     * @param $uid string the UID of the user
     * @return bool|User
     */
    private static function getUser($username)
    {
        $username = trim(strtolower($username));
        
        if (empty($username)) {
            return NULL;
        }

        # get the user from the DB and do something or something else
        $user = User::find(array('username' => $username));
        if ($user) {
            # they exist, no worries
            # if they don't have an email, they were created before we had emails in teh system
            if (empty($user->email)) {
                $info = self::getUserInfo($username);
                $user->email = $info['email'];
                $user->save();
            }
        } else {
            $info = self::getUserInfo($username);
            # Create a new user
            $user = User::create(array(
                'username' => $username,
                'date_created' => date('Y-m-d H:i:s'),
                'email' => $info['email']
            ));
        }

        return $user;
    }

    /**
     * Get a user's information from directory.unl.edu
     * 
     * @param string $uid
     * @return array
     */
    public static function getUserInfo($uid) {
        $info = array();
        
        if (!$json = @file_get_contents(self::$directory_url . '?uid=' . $uid . '&format=json')) {
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
    
    /**
     * Set up the SimpleCAS client
     */
    public static function setUpClient()
    {
        if (!\phpCAS::isInitialized()) {
            \phpCAS::client(CAS_VERSION_2_0, 'login.unl.edu', 443, 'cas');
            \phpCAS::setCasServerCACert(self::$cas_cert_path);
        }
    }
}