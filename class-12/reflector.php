<?php

require './../vendor/autoload.php';

class ReflectorExample
{
    public $name = "Nahid";
    protected $country = "Bangladesh";

    public function getName()
    {
        return $this->name;
    }

    public function setName($name, $default= null)
    {
        $this->name = $name;
    }
}

$ref = new ReflectionClass(ReflectorExample::class);

//dd($ref->getProperties());
//dd($ref->getMethods());
dd($ref->getMethod('setName'));


