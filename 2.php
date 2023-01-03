<?php
$input = "abcde";

$n = strlen($input);

for ($i = 1; $i <= $n; $i++) {
    $val = $input[-$i];
    echo $val;
}
