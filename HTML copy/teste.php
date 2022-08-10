<?php

class A
{
    protected $prop;

     public function __construct()
     {
           $this->prop = "B";
     }

     public function getProp()
     {
           return $this->prop;
      }
}

class B extends  A
{
     public function __construct()
     {
          $this->prop = "A";
     }
}

$a = new A();
$b = new B();

echo $b->getProp() . "-" . $a->getProp();
