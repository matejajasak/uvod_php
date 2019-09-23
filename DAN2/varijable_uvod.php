<?php

echo "Neki probni tekst";

echo '<br>';
//Varijable

$ime = 'Mateja'; // -> ova vrsta podataka naziva se String (niz znakova)
$dob = 26; // ova vrsta podataka naziva se Integer (cijeli broj)
$masa = 25.5; // ova vrsta podataka naziva se Float (decimalni broj)
$hobiji = array('jedrenje', 'arheologija', 'kupanje'); // array (polje podataka)
$samac = true; // boolean (logička vrijednost)

echo $ime.'<br>'.$masa.' <br> '; // Točka je operator spajanja stringova (konkatenacija)
echo $dob;

echo '<br>';
// echo $hobiji; //Array se ne može ispisivati na ovaj način

echo $samac;
echo '<br>';

var_dump($samac);
echo '<br>';

echo "Moje ime je ".$ime.".".'<br>';
echo "Moje ime je $ime.";
echo '<br>';
echo 'Moje ime je $ime.';

//Promjena vrijednosti varijable
echo $ime.'<br>';
$ime = 'Ivan';
echo $ime.'<br>';
$ime = 23;
$ime = null;
var_dump($ime);

?>