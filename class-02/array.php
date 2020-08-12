<?php
// Array

//$arr = array();
$students = [];

// Array 1
$students[] = "Rafsan";
$students[] = "Shaon";
$students[] = "Emam";
$students[] = "Mehedi";
$students[] = "Nahid";

// Array 2

$students = ["Rafsan", "Shaon", "Emam"];

// Map 1
$student['name'] = 'Rafsan';
$student['type'] = 'Fazil';
$student['designation'] = 'Software Engineer';


// Map 2

$student = ['name' => 'Rafsan', 'type' => 'Fazil'];

$Rafsan = 'Bangladesh';

$name = $student['name'];

// Multi Dimensional Array
$student = [
    'name' => 'Rafsan',
    'academic_info' => [
        "university" => 'N/A',
        'courses' => [
            'a',
            'b'
        ]
    ]
];


// Collection

$students = [
    ["name" => "Habibur", "email" => "habibur@gmail.com"],
    ["name" => "Sohel", "email" => "sohel@gmail.com"],
];

$data = '[{"name":"Habibur","email":"habibur@gmail.com"},{"name":"Sohel","email":"sohel@gmail.com"}]';
$arrayData = json_decode($data, true);

var_dump($arrayData);

//echo $student['academic_info']['courses'][0];


// All types of data
// object
// array

// Keys

// string
// int
// float
// bool - true/false

$arr = [
    true => 'Yes',
    1.2 => 'Float',
    '1' => 'String'
];

//print_r($arr);