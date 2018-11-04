<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 02.11.2018
 * Time: 9:34
 */

class Auth
{
    private $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function isAuthorized($username, $password) {
        $users = $this->userRepository->findAll();
        foreach($users as $user) {
            if($user->getPassword() == $password && $user->getUsername() == $username) {

                return true;
            }
        }
        return false;
    }
}