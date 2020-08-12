<?php
// public
// protected
// private

class Grandpa
{
    public $playground = 20;
    protected $forChild = 50;
    private $onlyForMe = 30;

    public function getTotalLand() : int
    {
        return $this->playground + $this->forChild + $this->onlyForMe;
    }
}

class Child extends Grandpa
{
    public function myLand()
    {
        return $this->forChild;
    }
}

$grandpa = new Grandpa();

echo $grandpa->playground;

$child = new Child;

echo $child-> myLand();