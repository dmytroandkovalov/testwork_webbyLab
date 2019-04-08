<?php

declare(strict_types=1);

class Animal
{
    private $name;

    /**
     * Animal constructor.
     * @param String $name
     */
    public function __construct(String $name = '')
    {
        if ( boolval($name) && is_string($name) ) {
            $this->name = $name;

        } else {
            $this->name = 'Some animal';

        }
    }


    /**
     * method getName
     * @return String
     */
    public function getName(): String
    {
        return $this->name;
    }




}