<?php

class MethodOverloading
{

    protected $methods = [
        'name' => 'Rafsan Hashemi',
        'company' => 'Portonics Limited',
    ];

    public function __call($method, $args)
    {
        $method = strtolower(str_replace('get', '', $method));
        if (isset($this->methods[$method])) {
            echo $this->methods[$method];
        }

        return null;

    }

}

$mo = new MethodOverloading();

$mo->getRole();