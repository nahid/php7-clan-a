<?php

class Cal
{
    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function sub()
    {

    }

    public function div()
    {

    }

    public function mul()
    {

    }
}

class ModernCal extends Cal
{
    use Scintificable;

    public function sqrt($val)
    {
        return sqrt($val);
    }
}

trait Scintificable
{

    public function pow($base, $pawer)
    {
        return pow($base, $pawer);
    }
}


$modernCal = new ModernCal();

echo $modernCal->pow(4, 2);


