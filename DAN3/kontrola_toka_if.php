<?php

$a = 1;
$b = 5;


// operator usporedbe jednakosti
//uspoređuje vrijednost podataka, ali ne uspoređuje tip podataka
if($a == 1){
    echo 'Isti je';
}


echo '<br>';

// operator usporedbe identičnosti
//uspoređuje vrijednost podataka i koji je tip podataka
if($a === 1){
    echo 'Isti tip podataka';
}

echo '<br>';

// operator nejednakosti
// uspoređuje vrijednost podataka, ali ne uspoređuje tip podataka
if ($a != $b) {
    echo 'nisu jednaki';
}

echo '<br>';

// operator usporedbe NE identičnosti
// uspoređuje vrijednost podataka i koji je tip podataka
if ($a !== $b) {
    echo 'Različit je tip podataka';
}
