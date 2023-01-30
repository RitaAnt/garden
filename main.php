<?php

abstract class Tree
{
    protected static $id = 0;
    protected $nameFruit;
    protected $amount;
    protected $min;
    protected $max;

    function __construct(){
        $this->id = ++self::$id;
    }
    function getId(){
        return $id;
    }
    function getAmount(){
        return $amount;
    }
    function setAmount(){
        $amount = rand($min, $max);
    }
}
abstract class Fruit{

    protected $nameFruit;
    protected $weight;
    protected $min;
    protected $max;

    function setWeight(){
        $weight = rand($min, $max);
    }
}
class AppleTree extends Tree
{
    
}
class PearTree extends Tree
{

}

$AppleTree1 = new AppleTree();
echo 'Apple tree 1 id: '.$AppleTree1->getId();


?>