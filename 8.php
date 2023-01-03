<?php
$int = 15;

for ($i = 1; $i <= $int; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo  "EduWork" . "<br/>";
    } else if ($i % 3 == 0) {
        echo "Edu" . "<br/>";
    } else if ($i % 5 == 0) {
        echo "Work" . "<br/>";
    } else {
        echo $i . "<br/>";
    }
}
