<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 02.11.2018
 * Time: 11:20
 */

class UserRepository
{
    private $users;

    public function __construct()
    {
        $this->users[] = new User('admin', 'admin');
        $this->users[] = new User('user', 'user');

    }

    public function findAll()
    {
        return $this->users;
    }
}