<?php

include_once(dirname(__FILE__) . '/../AbstractClass/Fruit.php');
class Orange extends Fruit
{
    public function howToEat()
    {
        return "Orange could be juiced";
    }
}
/**
 * Created by PhpStorm.
 * User: alexnguyen
 * Date: 02/11/2018
 * Time: 15:54
 */