<?php declare(strict_types = 1);

function sum(int $a, int $b) : int
{
    return $a + $b;
}


// optional parameter function
function get($key = null) {
    $arr = ['a' => 'A', 'b' => 'B'];

    if (is_null($key)) return $arr;

    return $arr[$key] ?? null;
}

// countless arguments function

function add(...$args) {
//    $args = func_get_args();

    return array_sum($args);
}

$vals = [3, 5];

echo sum(...$vals);


//echo add(3, 4, 5, 6, 9);
//var_dump(get('b'));

//echo sum(3, 4);


