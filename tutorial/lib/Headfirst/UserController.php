<?php
namespace PHPGuru\Headfirst;

class UserController
{
    public function __construct()
    {
    }

    public function index(){
        $users = UserModel::findUsers();
        foreach ($users as $user){
            $this->_displayUser($user);
        }
    }

    private function _displayUser(User $user)
    {
        printf("User ID = %s - User Name = %s", $user->getId(), $user->getName());
    }
}