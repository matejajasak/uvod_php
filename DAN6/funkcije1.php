<?php

function hr_dan(){

    $dan = date('N');

    switch ($dan) {
        case 1:
            echo 'Danas je ponedjeljak';
            break;
        case 2:
            echo 'Danas je utorak';
            break;
        case 3:
            echo 'Danas je srijeda';
            break;
        case 4:
            echo 'Danas je četvrtak';
            break;
        case 5:
            echo 'Danas je petak';
            break;
        case 6:
            echo 'Danas je subota';
            break;
        case 7:
            echo 'Danas je nedjelja';
            break;
        default:
            echo 'Ne znam koji je dan';
            break;
    }
}

hr_dan(); // ovo je za ispis