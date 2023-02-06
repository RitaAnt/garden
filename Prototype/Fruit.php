<?php
abstract class Fruit{

protected $nameFruit;
protected $weight;
protected $min;
protected $max;

public function __clone(){
    $this->setWeight();
}
public function __construct(){
    $this->setWeight();
}
protected function setWeight(){
    $this->weight = rand($this->min, $this->max);
}
public function getWeight(){
    return $this->weight;
}
}

class Apple extends Fruit
{
protected $min = 150;
protected $max = 180;
}
class Pear extends Fruit
{
protected $min = 130;
protected $max = 170;
}