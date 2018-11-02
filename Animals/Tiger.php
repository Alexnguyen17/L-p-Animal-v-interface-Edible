<?php

include_once(dirname(__FILE__).'/../AbstractClass/Animal.php');

class Tiger extends Animal
{
    public function makeSound()
    {
        return"Tiger:roarrrrrrr!";
    }
}
/**
 * Created by PhpStorm.
 * User: alexnguyen
 * Date: 02/11/2018
 * Time: 14:46
 */