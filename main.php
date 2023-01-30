<?php

abstract class Tree
{
    protected static $id = 0;
    protected $nameFruit;
    protected $amount;
    protected $min;
    protected $max;

    abstract protected function setAmount();

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
        $amount = rand($min, $max)
    }
}
abstract class Fruit{

    protected $nameFruit;
    protected $weight;
    protected $min;
    protected $max;

    function setWeight(){
        $weight = rand($min, $max)
    }
}
class AppleTree extends Tree
{
    $min = 40;
    $max = 50;
    
}
class PearTree extends Tree
{
    $min = 0;
    $max = 20;
}

$AppleTree1 = new AppleTree();
echo 'Apple tree 1 id: '.$AppleTree1->getId();


?>