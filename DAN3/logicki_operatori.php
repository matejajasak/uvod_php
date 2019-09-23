<?php

$a = 15;
$b = 10;
$c = 5;

//Logičko i (and) --> &&
if ($b < $a && $c < $a && 8 < 3) {
    echo 'Uvjet je zadovoljen';
} else {
    echo 'Uvjet NIJE zadovoljen'.'<br>';
}

//Logičko ili (or) --> ||
if ($b < $a && $c < $a || 8 < 3) {
    echo 'Uvjet je zadovoljen';
} else {
    echo 'Uvjet NIJE zadovoljen';
}

echo '<br>';
if (($b > $a && $b < $c) || ($b < $a && $b > $c)) {
    echo 'Vrijednost varijable B nalazi se između $a i $c';
}
echo '<br>';

//Logička negacija !vrijednost
if (!$a) {
    echo 'varijabla $a postoji';
}else {
    echo 'Varijabla $a NE postoji';
}
