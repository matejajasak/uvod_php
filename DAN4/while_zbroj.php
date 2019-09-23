<?php

$i = 1;
$result = 0;

// zbraja sve brojeve od 1 do 10
while ($i <= 10) {

    echo $result .' + ' . $i . ' = ';
    $result += $i;
    echo $result.'<br>';
    $i++;
}

echo $result;