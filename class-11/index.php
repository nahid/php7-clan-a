<?php

require './../vendor/autoload.php';

class Settings implements ArrayAccess, Iterator, Countable
{
    private array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function offsetExists($offset)
    {
        return isset($this->config[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->config[$offset];
    }

    public function offsetSet($offset, $value)
    {
       $this->config[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->config[$offset]);
    }

    public function current()
    {
        return current($this->config);
    }

    public function next()
    {
        return next($this->config);
    }

    public function key()
    {
        return key($this->config);
    }

    public function valid()
    {
        return key($this->config) !== null;
    }

    public function rewind()
    {
        return reset($this->config);
    }

    public function count()
    {
        return count($this->config);
    }
}

$settings = new Settings([
    'default' => 'mysql',
    'connections' => [
        'mysql' => [
            "driver" => 'mysql',
            'user' => 'root',
            'password' => '123456'
        ]
    ]
]);

dump($settings);



