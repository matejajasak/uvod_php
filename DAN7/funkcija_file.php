<?php

$file = file('podaci.txt');

var_dump($file);

foreach ($file as $broj_retka => $redak) {
    echo $broj_retka+1 . ' - ' . $redak;
}