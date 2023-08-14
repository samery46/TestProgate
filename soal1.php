<?php

$input = 5;
for ($a = $input; $a > 0; $a--) {
    for ($i = 1; $i <= $a; $i++) {
        echo " &nbsp";
    }
    for ($a1 = $input + 1; $a1 >= $a; $a1--) {
        echo $a1;
    }
    echo "<br>";
}
