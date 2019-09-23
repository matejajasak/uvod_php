<?php

function ispis(){
    $c = 3+10;
    echo $c;
}

ispis();

echo '<br>';


function vrati(){
    $c=5+9;
    return $c; 
}

$d = vrati()+5;
echo $d;
// echo vrati();


echo '<br>';

function zbroji($a, $b){
    echo $a + $b;
}

zbroji(10, 20);


echo '<br>';

function oduzmi($a, $b){
    return $a - $b;
}

echo oduzmi(10, 30);


echo '<br>';

