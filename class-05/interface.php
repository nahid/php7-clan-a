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

class Calk
{
    private CalculatorInterface $calculator;

    public function __construct(CalculatorInterface $calculator)
    {
        $this->calculator = $calculator;
    }

    public function sum($a, $b)
    {
        return $this->calculator->sum($a, $b);
    }

    public function sub($a, $b)
    {
        return $this->calculator->sub($a, $b);
    }
}

$ycal = new YCalculator();

$calculator = new Calk($ycal);

echo $calculator->sum(3, 4);