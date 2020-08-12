<?php

class Parents
{
    public function canPlayFootball()
    {
        return "I can play football";
    }
}

class Parents1 extends Parents
{
    public function canSwim()
    {
        return "I can swim";
    }
}

final class Son extends Parents1
{
    public function canDrive()
    {
        return "I can drive";
    }
}

class GrandSon extends Son
{

}

$parents = new Parents;
$son = new GrandSon();

echo $son->canDrive();