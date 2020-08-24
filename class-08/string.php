<?php

class Str
{

    public function __toString()
    {
        return "Object can not be call as string";
    }

}

$str = new Str();

echo $str;