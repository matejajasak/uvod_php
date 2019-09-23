<?php

$cipele = array();


$cipele[0] = 'Gucci'; //[1] - indeks
$cipele[1] = 'Adidas';
$cipele[2] = 'Nike';
$cipele[3] = 'Puma';
$cipele[4] = 'Vans';

$cipele5 = [1 => 'Gucci', 2 => 'Adidas', 3 => 'Nike', 4 => 'Puma', 5 => 'Vans'];

echo '<pre>';
print_r($cipele5);
echo '</pre>';

echo 'Element polja $cipele sa na drugom mjestu je '.$cipele[1].'<br>';

echo 'Polje $cipele sastoji se od '. count($cipele) . ' elemenata.';

$cipele2 = array();

$cipele2[] = 'Gucci'; 
$cipele2[] = 'Adidas';
$cipele2[] = 'Nike';
$cipele2[] = 'Puma';
$cipele2[] = 'Vans';


$cipele3 = array('Gucci','Adidas','Nike','Puma','Vans');

$cipele4 = ['Gucci','Adidas','Nike','Puma','Vans'];

echo '<br>';
echo '<br>';

for ($i=0; $i < count($cipele); $i++) { 
   echo $cipele[$i].'<br>';
}

echo '<br>';
//ključ = indeks

foreach ($cipele5 as $key => $value) {
    echo $key . ' - ' .$value.'<br>';;
}