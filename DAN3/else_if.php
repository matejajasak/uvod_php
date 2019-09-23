<?php

$naziv = 'Algebra';

$duljina = strlen('Mateja');
//ili
$duljina = strlen($naziv);

echo $duljina;
echo '<br>';

// strlen ( string $string ) : int --> string je kao neko ime, $string je varijabla..int vraća koliko slova ima

if ($duljina > 10) {
    echo 'Naziv ima više od 10 znakova';
}elseif($duljina >= 5 && $duljina <= 10){
    echo 'Naziv je u zadanom nizu između 5 i 10 znakova';
}else {
    echo 'Naziv je prekratak';
}
echo '<br>';

if ($duljina > 10) {
    echo 'Naziv ima više od 10 znakova';
}elseif($duljina == 9){
    echo 'Naziv ima 9 znakova';
}elseif($duljina == 8){
    echo 'Naziv ima 8 znakova';
}elseif($duljina == 7){
    echo 'Naziv ima 7 znakova';
}elseif($duljina == 6){
    echo 'Naziv ima 6 znakova';
}else {
    echo 'Naziv je prekratak';
}

echo '<br>';

$a = ''; //logička vrijednost false
$b = '';

if (empty($a)) {
    if(empty($b)){
        echo 'Varijabla B je prazna'.'<br>';
        echo 'Varijabla A je prazna';
    }else{
        echo 'Varijabla B nije prazna'.'<br>';
        echo 'Varijabla A je prazna';
    }
}else{
    if (empty($b)) {
        echo 'Varijabla B je prazna'.'<br>';
        echo 'Varijabla A je nije prazna'.'<br>';
    } else {
        echo 'Varijabla A nije prazna'.'<br>';
        echo 'Varijabla B nije prazna';
    }
    
}

if(empty($a) && empty($b)){
    echo 'Varijabla B je prazna'.'<br>';
    echo 'Varijabla A je prazna';
}elseif(empty($a) && !empty($b)){
    echo 'Varijabla B nije prazna'.'<br>';
    echo 'Varijabla A je prazna';
}elseif(!empty($a) && empty($b)){
    echo 'Varijabla B je prazna'.'<br>';
    echo 'Varijabla A nije prazna'.'<br>';
}else(!empty($a) && !empty($b)){
    echo 'Varijabla A nije prazna'.'<br>';
    echo 'Varijabla B nije prazna'.'<br>';
}
