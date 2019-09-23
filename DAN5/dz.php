<?php


// Napunite polje s 10 elemenata
// Ispisati vrijednosti svakog elemenata tako da su vrijednosti odvojene zarezom, zadnja vrijednost na kraju ne smije imati zarez
// Izbrisati prvi i zadnji element polja
// Ispisati vrijednosti svakog elemenata tako da su vrijednosti odvojene zarezom, zadnja vrijednost na kraju ne smije imati zarez
// Sortirati polje uzlazno
// Ispisati vrijednosti svakog elemenata tako da su vrijednosti odvojene zarezom, zadnja vrijednost na kraju ne smije imati zarez


$a = array();
$a[] = 'Pero';
$a[] = 'Ana';
$a[] = 'Marko';
$a[] = 'Iva';
$a[] = 'Ivan';
$a[] = 'Kruno';
$a[] = 'Božica';
$a[] = 'Davor';
$a[] = 'Filip';
$a[] = 'Kristina';

foreach ($a as $key => $value) {
    if ($key+1 < count($a)) {
        $value .= ', ';
    }
    echo $value;
}

/* ili
$counter = 1;

foreach ($a as $key => $value) {
    if ($counter < count($a)) {
        $value .= ', ';
    }
    echo $value;
}
*/

echo '<br>';

// Izbrisati prvi i zadnji element polja

array_pop($a);
array_shift($a);

foreach ($a as $key => $value) {
    if ($key+1 < count($a)) {
        $value .= ', '; // .=  !!!
    }
    echo $value;
}


echo '<br>';

// Sortirati polje uzlazno

sort($a);

foreach ($a as $key => $value) {
    if ($key+1 < count($a)) {
        $value .= ', ';
    }
    echo $value;
}




$imena = implode(',', $a);