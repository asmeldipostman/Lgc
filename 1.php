<?php
// $int = 4;
$int = 8;

for ($i = $int - 1; $i >= 1; $i--) {
    $int *= $i;
}

echo $int;
