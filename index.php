<?php

declare(strict_types=1);

require_once 'classes/Animal.php';
require_once 'classes/Cat.php';

try {

    $cat = new Cat('garfield');

    $check_cat_getter = $cat->getName() === 'garfield';
    $check_cat_meow   = $cat->meow() === 'Cat garfield is saying meow';

    var_dump($check_cat_getter);
    echo '<br>';
    var_dump($check_cat_meow);

} catch (TypeError $e) {

    echo 'Incorrect data type of Cat name. Reload page and try again';
}

