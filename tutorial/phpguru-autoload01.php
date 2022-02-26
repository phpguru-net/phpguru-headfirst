<?php

// https://code.tutsplus.com/tutorials/how-to-autoload-classes-with-composer-in-php--cms-35649

// 1. file autoloading
// 2. class autoloading
// 3. PSR-0 autoloading
// 4. PSR-4 autoloading

// autoload in PHP without composer

function custom_autoloader($class) {
  include 'lib/' . $class . '.php';
}
spl_autoload_register('custom_autoloader');

$objFooBar = new FooBar("apple");
echo $objFooBar->get_name();

// autoload in PHP with composer: file autoloading

