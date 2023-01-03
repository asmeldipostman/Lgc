<?php
$array = [1, 4, 7, 9, 12];
$low = 2;
$high = 15;

$result = [];

foreach ($array as $key => $value) {
    if ($value >= $low && $value <= $high) {
        $result[] = $value;
    }
}

echo count($result);
