<?php

$korisnik1 = array('ime' => 'Ivan', 'prezime' => 'Ivić', 'dob' => 25, 'mjesto' => 'Zagreb');

$korisnik2 = array('ime' => 'Pero', 'prezime' => 'Perić', 'dob' => 28, 'mjesto' => 'Zagreb');

$korisnik3 = array();
$korisnik3['ime'] = 'Vanja';
$korisnik3['prezime'] = 'Vanjić';
$korisnik3['dob'] = 33;
$korisnik3['mjesto'] = 'Varaždin';


$korisnici = array($korisnik1, $korisnik2, $korisnik3);

$korisnici[4]['ime']= 'Iva';
$korisnici[4]['prezime']= 'Ivić';
$korisnici[4]['dob']= 44;
$korisnici[4]['mjesto']= 'Gorica';

    echo '<pre>';
    print_r($korisnici);
    echo '</pre>';


foreach ($korisnici as $rb => $korisnik) {
    echo '<br>';
    foreach ($korisnik as $key => $value) {
        if ($key == 'prezime') {
            echo 'Prezime korisnika sa rednim brojem ' . $rb . ' je '. $value;
        }
        echo '<br>';
    }
}

?>

