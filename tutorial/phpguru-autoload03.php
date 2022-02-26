<?php
require __DIR__ . '/vendor/autoload.php';
use PHPGuru\Headfirst\UserController;

$userController = new UserController();

$userController->index();
