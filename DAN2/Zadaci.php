<?php

//Zadatak iz skript, str 27

//1.
$godine = '27';
$visina = '160';
$težina = '50';

echo $godine.'<br>'.$visina.'<br>'.$težina.'<br>';


//2. 

$a = 3;
$b = 5;

$a = &$a;
$b = &$b; 

echo 'a='.$b;
echo '<br>';
echo 'b='.$a;

//ili

$a = 3;
$b = 5;

$POM = $a;
$a = $b;
$b = $POM;



//3.

