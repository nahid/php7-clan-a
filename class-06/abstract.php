<?php

abstract class MyClass
{
    abstract public function sub($a, $b);

    public function sum($a, $b)
    {
        return $a + $b;
    }
}

class MyNewClass extends MyClass
{
    public function sub($a, $b)
    {
        return $a - $b;
    }
}

$cal = new MyNewClass();

echo $cal->sub(4, 3);