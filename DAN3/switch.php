<?php

$naziv = 'Algebra';

$duljina = strlen($naziv);

switch ($duljina) {
    case 10:
        echo 'Naziv ima više od 10 znakova';
        break;
    case 9:
        echo 'Naziv ima 9 znakova';
        break;
    case 8:
        echo 'Naziv ima 8 znakova';
        break;
    case 7:
        echo 'Naziv ima 7 znakova';
         break;
    case 6:
        echo 'Naziv ima 6 znakova';
        break;
    case 5:
        echo 'Naziv ima 5 znakova';
        break;
    default:
        echo 'Nepoznato znakova';
        break;
}

echo '<br>';

$ime = 'Pero';

switch ($ime) {
    case 'Ivo':
        echo 'Vi ste Ivo';
        break;
    case 'Pero':
        echo 'Vi ste Pero';
        break;   
    case 'Đuro':
        echo 'Vi ste Đuro';
        break;
    default:
        echo 'Nemamo pojma tko ste!';
        break;
}