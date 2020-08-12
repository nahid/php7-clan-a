<?php

$a = 5;
$b = $a;

function change(&$a, $b) {
    $a += 7;
}

change($b);

echo $b;