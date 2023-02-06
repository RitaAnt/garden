<?php
abstract class Tree
{
    protected static $numberTrees = 0;
    protected $id = 0;
    protected $nameFruit;
    protected $amount;
    protected $min;
    protected $max;

    public function __construct(){
        $this->id = ++self::$numberTrees;
        $this->setAmount();
    }
    public function getId(){
        return $this->id;
    }
    public function getAmount(){
        return $this->amount;
    }
    protected function setAmount(){
        $this->amount = rand($this->min, $this->max);
    }
    public function __clone(){
        $this->id = ++self::$numberTrees;
        $this->setAmount();
    }
}
class AppleTree extends Tree
{
    protected $min = 40;
    protected $max = 50;

    public function harvest(){
        $apple1 = new Apple();
        $fruits[] = $apple1;
        for($i = 0; $i <= $this->amount; $i++){
            $apple2 = clone $apple1;
            $fruits[] = $apple2;
        }
        return $fruits;
    }
}
class PearTree extends Tree
{
    protected $min = 0;
    protected $max = 20;

    public function harvest(){
        if($this->amount>0){
            $pear1 = new Pear();
            $fruits[] = $pear1;
            for($i = 0; $i <= $this->amount; $i++){
                $pear2 = clone $pear1;
                $fruits[] = $pear2;
            }
            return $fruits;
        }
        else return array();

    }
}


