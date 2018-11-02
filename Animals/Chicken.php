<?php

include_once(diriname(__FILE__) . '/../AbstractClass/Animal.php');
include_once(diriname(__FILE__) . '/../InterfaceClass/Edible.php');

class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
    }

    Public function howToEat()
    {
        return "could be fried";
    }
}
/**
 * Created by PhpStorm.
 * User: alexnguyen
 * Date: 02/11/2018
 * Time: 14:40
 */