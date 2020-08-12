<?php

class Calc
{
    public function sum($a, $b)
    {
        echo $a + $b;
    }
}

class Calculator extends Calc
{
    public function sum($a, $b)
    {
        return $a + $b;
    }
}


$calc = new Calculator();

echo $calc->sum(4, 6);
echo $calc->sub(4, 6);