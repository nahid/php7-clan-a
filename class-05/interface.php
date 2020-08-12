<?php

interface CalculatorInterface
{
    public function sum(float $a, float $b) : float;
    public function sub(float $a, float $b) : float;
}

class XCalculator implements CalculatorInterface
{
    public function sum(float $a, float $b) : float
    {
        return $a + $b;
    }
    public function sub(float $a, float $b) : float
    {
        return $a - $b;
    }
}

class YCalculator implements CalculatorInterface
{
    public function sum(float $a, float $b) : float
    {
        $result = $a + $b;
        return $result;
    }
    public function sub(float $a, float $b) : float
    {
        $result = $a + $b;
        return $result;
    }
}

$cal = new XCalculator();

echo $cal->sum(3, 4);