<?php

$a = 1;
$b = 1;

while ($a <= 10) {
    echo 'a='.$a.'<br>';
    $a++;
    while ($b <= 10) {
        echo 'b='.$b.'<br>';
        $b++;
    }
    echo '<br>';
    $b = 1;
}

