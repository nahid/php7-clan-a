<?php

class SomeClass
{
    public function __construct()
    {
        // connection open
        echo "Class Initialize";
    }

    public function __destruct()
    {
        echo "Class Destroy";
    }

    public function doSomething()
    {
        // connection close
        echo "\n I do something \n";
    }
}


$a = new SomeClass();

$a->doSomething();