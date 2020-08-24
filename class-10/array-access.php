<?php

class Arr implements ArrayAccess, Iterator, Countable
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    function get(?string $node = '.', $default = null)
    {
        $data = $this->data;

        if (empty($node) || $node == '.' || is_null($node)) {
            return $data;
        }

        if (!$node) return $default;

        $terminate = false;
        $path = explode('.', $node);

        foreach ($path as $val) {
            if (!array_key_exists($val, $data)) {
                $terminate = true;
                break;
            }

            $data = &$data[$val];
        }

        if ($terminate) {
            return $default;
        }

        return $data;
    }

    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->data[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->data[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }

    public function current()
    {
        return current($this->data);
    }

    public function next()
    {
        return next($this->data);
    }

    public function key()
    {
        return key($this->data);
    }

    public function valid()
    {
        return key($this->data) !== null;
    }

    public function rewind()
    {
        return reset($this->data);
    }

    public function count()
    {
        return count($this->data);
    }
}

$data = [
    'name' => 'Nahid Bin Azhar',
    'email' => 'nahid.dns@gmail.com',
    'profile' => [
        'mobile' => 'u949058',
        'gender' => 'male',
        'settings' => [
            'verified' => true,
            'send_notification' => true,
            'license' => "MIT",
        ]
    ]
];

require 'vendor/autoload.php';
$arr = new Arr($data);

//echo $data['profile']['config']['license'];
//echo $arr->get('profile.settings.license');

//echo $arr['profile']['settings']['license'];

/*foreach ($arr as  $value) {
    var_dump($value);
}*/

dd($arr['name']);