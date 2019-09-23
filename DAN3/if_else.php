<?php

$a = 5;
$b = 10;

if ($a == $b){
    echo 'Jednake su';
}else{
    echo 'Nisu jednake';
}

echo '<br>';


if ($a < $b) {
    echo 'a je manje od b';
} else {
    echo 'a je veće od b';
}

echo '<br>';

if ($a > $b) {
    echo 'a je manje od b';
} else {
    echo 'a je veće od b';
}

echo '<br>';

//manje ili jedanko
if ($a <= $b) {
    echo 'a je manje ili jednako b';
} else {
    echo 'a je veće od b';
}

echo '<br>';

//veće ili jednako
if ($a >= $b) {
    echo 'a je veće ili jednako b';
} else {
    echo 'a je manje od b';
}