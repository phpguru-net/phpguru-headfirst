<?php
require __DIR__ . '/vendor/autoload.php';
use PHPGuru\PreIntermediate\Controllers\UserController;

$userController = new UserController();

$userController->index();
