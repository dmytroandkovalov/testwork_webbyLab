<?php

declare(strict_types=1);

class Cat extends Animal
{
    /**
     * Cat constructor.
     * @param String $name
     */
    public function __construct(String $name = '')
    {
        parent::__construct($name);
    }


    /**
     * method meow
     * @return String
     */
    public function meow() : String
    {
        $cat_name =  parent::getName();

        return "Cat $cat_name is saying meow";
    }


}