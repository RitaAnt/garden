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
        return $this->id;
    }
    function getAmount(){
        return $this->amount;
    }
    function setAmount(){
        $this->amount = rand($min, $max);
    }
}
class AppleTree extends Tree
{
    function harvest(){
        $apple1 = new Apple();
        $fruits[] = $apple1;
        for($i = 0; $i <= $amount; $i++){
            $apple2 = clone $apple1;
            $fruits[] = $apple2;
        }
        return $fruits;
    }
}
class PearTree extends Tree
{
    function harvest(){
        if($amount>0){
            $pear1 = new Pear();
            $fruits[] = $pear1;
            for($i = 0; $i <= $amount; $i++){
                $pear2 = clone $pear2;
                $fruits[] = $pear2;
            }
            return $fruits;
        }
        else return 0;

    }
}



abstract class Fruit{

    protected $nameFruit;
    protected $weight;
    protected $min;
    protected $max;

    function __clone(){
        setWeight();
    }
    function __construct(){
        setWeight();
    }
    function setWeight(){
        $this->weight = rand($min, $max);
    }
}

class Apple extends Fruit
{
    
}
class Pear extends Fruit
{

}

$AppleTree1 = new AppleTree();
echo 'Apple tree 1 id: '.$AppleTree1->getId();


?>