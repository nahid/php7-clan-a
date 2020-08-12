<?php

// Anonymous Function
$sum = function($a, $b) {
  return $a+$b;
};

$add = $sum;

//echo $add(3, 4);

function sum($a, $fn) {
    return $a + $fn($fn($a));
}

echo sum(7, function () {
    return $query->where('date', '=', today())->sum('taka');
});