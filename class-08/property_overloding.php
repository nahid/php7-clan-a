<?php

class PropertyOverloading
{
    protected $data = [
        'name' => 'Nahid'
    ];

    public function __get($key)
    {
        return $this->data[$key] ?? null;
    }

    public function __set($key, $value)
    {
        $this->data[$key] = trim($value, ' ');
    }

}

$po = new PropertyOverloading();

echo $po->name;
$po->fullname = " Nahid Bin Azhar";
echo $po->fullname;