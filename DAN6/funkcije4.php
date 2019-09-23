<?php

function autor($autor){

    $autor_array = explode(',',$autor); // explore miče npr , koji smo naveli dole u echo autor()
    // print_r($autor_array);
    $ime = $autor_array[1];
    $prezime = $autor_array[0];

    //return $ime_slovo = substr($ime, 0, 1);
    $ime_slovo = strtoupper(substr($ime, 0, 1)); //ako želimo da oba slova (ime i prezime) stavi u velika slova
    $prezime = ucfirst(strtolower($prezime));

    return $ime_slovo . '. ' . $prezime;
}


echo autor('pEric,PEro');
// P. Peric
echo '<br>';
echo autor('markic,MARKO');