<?php

class Animal
{
    private $name;

    function getName()
    {
        return $this->name;
    }

    function __construct($n)
    {
        $this->name = $n;
    }
}

