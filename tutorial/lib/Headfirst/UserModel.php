<?php


namespace PHPGuru\Headfirst;


class UserModel
{
    public function __construct()
    {
    }

    public static function findUsers() : array{
        $users = array();
        for($i = 1 ; $i<= 10; $i++) {
            array_push($users, new User($i, "User $i"));
        }
        return $users;
    }
}