<?php

class Tree
{
    public function __clone()
    {

    }
}
class AppleTree
{
     public function getClone(Tree $tree)
    {
         return clone $tree;
    }
}
class PearTree
{
    public function getClone(Tree $tree)
    {

    }
}


?>