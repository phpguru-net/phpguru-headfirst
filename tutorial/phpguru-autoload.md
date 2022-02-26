# PHPGURU Autoload in PHP

- Tham khảo : https://code.tutsplus.com/tutorials/how-to-autoload-classes-with-composer-in-php--cms-35649

Trong bài học hôm nay, chúng ta sẽ đi qua lần lượt các chủ đề sau:

1. Cách sử dụng autoload trong PHP

```php
function custom_autoloader($class) {
  include 'lib/' . $class . '.php';
}
spl_autoload_register('custom_autoloader');

$objFooBar = new FooBar("apple");
echo $objFooBar->get_name();
```
 
In the above example, we’ve registered the custom_autoloader() function as our custom autoloader by using the spl_autoload_register() function. Next, when you try to instantiate the FooBar class and it’s not yet available, PHP will execute all the registered autoloader functions sequentially. And thus the custom_autoloader function is called—it includes the necessary class file, and finally the object is instantiated. For this example, we're assuming the FooBar class is defined in the lib/FooBar.php file.


2. Cách sử dụng composer để thực hiện autoload

- File autoloading
- Class autoloading
- PSR-0 autoloading
- PSR-4 autoloading

```bash
composer init
composer dump-autoload
```


## Bài viết liên quan

- Required & Included trong PHP
- Class trong PHP
- PSR là gì
- Composer là gì

```json
{
  "autoload": {
    "files": [
      "lib/helpers.php"
    ],
    "classmap": [
      "lib"
    ],
    "psr-4": {
      "PHPGuru\\Tutorial\\": "lib/"
    }
  }
}
```


```
composer dump-autoload
```