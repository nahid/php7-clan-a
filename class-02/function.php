<?php

function sum($val1, $val2 = null)
{
    if (is_null($val2)) {
        return $val1;
    }

    return $val1 + $val2;
}

$result = 3 * sum(4, 5);

function maxVal($a, $b , $c)
{
    if ($a>$b) {
        if ($a>$c) {
            return $a;
        } else {
            return $c;
        }
    } else {
        if ($b> $c) {
            return $b;
        } else {
            return $c;
        }
    }
}

function arrayMax($seriesData)
{
    $max = 0;

    foreach ($seriesData as $data) {
        if ($data > $max) {
            $max = $data;
        }
    }

    return $max;
}

function arrayMMax($seriesData)
{
    $max = 0;

    foreach ($seriesData as $data) {
        if (is_array($data)) {
            $data = arrayMMax($data);
        }

        if ($data > $max) {
            $max = $data;
        }
    }

    return $max;
}

echo sum(3);
//echo arrayMMax([arrayMax([3, 5]), 7]);

// sum(int $val1[, int $val2 = null])