<?php
$array = [4, 2, 6, 88, 3, 11];
$low = $array[0];
$high = $array[0];
$n = count($array);

for ($i = 0; $i < $n; $i++) {
    if ($low > $array[$i]) {
        $low = $array[$i];
    }

    if ($high < $array[$i]) {
        $high = $array[$i];
    }
}

echo "low : $low, high : $high";
