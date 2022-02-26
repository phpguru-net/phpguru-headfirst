<?php
require __DIR__ . '/vendor/autoload.php';

echo hello_helper() . "\n";

$objFoo = new Foo("orange");
echo $objFoo->getName()  . "\n";

$objFooBar = new FooBar("mango");
echo $objFooBar->get_name()  . "\n";