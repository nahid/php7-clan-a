<?php

// String

$str = "I love my country";

//echo strtoupper($str);
//echo strtolower($str);
//echo ucwords($str);
//echo ucfirst("mehedi hasan nahid");
//echo substr($str, -7, 3);
//echo strpos($str, 'love');

$email = "hello@nahid.im";
//echo substr($email, strpos($email, '@') + 1);

//echo strrev($str);

//echo str_replace("my", "our", $str);

//print_r(explode(" ", $str));

//echo str_shuffle($str);

//print_r(str_split($str, 3));

//echo str_word_count($str);

//echo str_repeat("love ", 3);



// Array

$arr = [
    "name"=>"Nahid", "email"=>"nahid.dns@gmail.com", "location"=>"barisal"
];

$collection = [
    [
        "id" => 1, "name" => "Nahid", "location" => "Barisal",
    ],
    [
        "id" => 2, "name" => "Habib", "location" => "Rajshahi",
    ],
    [
        "id" => 3, "name" => "Kamrul", "location" => "Dhaka",
    ],
];



$array = [
    "Nahid",
    "Mehedi",
    "Kamrul",
    "Habib"
];

//var_dump(is_array($arr));
//var_dump(in_array("Mehedi", $arr));
//var_dump(array_key_exists("web", $arr));
/*var_dump($arr["web"]);

6
5
4
3
2
1

if($arr['email']) {
    echo "Exists";
} else {
    echo "Not found!";
}*/

//$popValue = array_pop($array);
//var_dump($popValue, $array);

//$pushValue = array_push($array, "Munira");
//var_dump($pushValue, $array);
/*$push = array_push($collection,
    [
        "id" => 3, "name" => "Kamrul", "location" => "Dhaka",
    ]);
var_dump($collection);*/

//var_dump(array_column($collection, 'name', 'id'));

/*
var_dump(array_filter($collection, function($value) {
    return $value['location'] == 'Barisal';
}));*/

$mapValue = array_map(function ($value) {
    $newArray['name'] = $value['name'];
    $newArray['id'] = $value['id'];
    $newArray['location'] = $value['location'];

    return $newArray;

}, $collection);

echo "<pre>";
print_r($mapValue);

if (is_array($array) || $array instanceof Countable) {

}

$collection[2]['web'] = 'nahid.im';

echo '<pre>';
print_r($collection);

//echo (sizeof($array));

//$x = false;
//var_dump(empty($x));

//var_dump(isset($x));