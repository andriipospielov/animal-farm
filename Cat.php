<?php
require_once('Animal.php');

class Cat extends Animal
{
    public function meow()
    {
        return 'Cat ' . $this->getName() . ' is saying meow.';
    }
}

$cat = new Cat('Garfield');
echo $cat->meow();