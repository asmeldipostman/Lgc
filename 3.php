<?php
echo printDigitValue('9.86-A5.321');
function printDigitValue($value)
{
    $n = strlen($value);
    $result = "";

    for ($i = 0; $i <= $n; $i++) {
        if (!is_numeric($value[$i])) {
            continue;
        }
        $result .= $value[$i];
    }

    echo $result . "<br/>";

    $n = strlen($result);

    for ($i = 0; $i <= $n; $i++) {
        echo str_pad($result[$i], $n - $i, '0', STR_PAD_RIGHT) . "<br/>";
    }
}
