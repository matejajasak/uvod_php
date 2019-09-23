<?php

$vrijeme = time();

echo $vrijeme;

echo '<br>';

echo date('D.M.Y H:i:s',$vrijeme);

echo '<br>';



//Zadatak 1
//Napraviti kod da kada se pokrene ispiše u kojem smo kvartalu godine na temelju trenutnog vremena

$mjesec = date('n');

switch ($mjesec) {
    case 1: //propadanje, fall through
    case 2:
    case 3:
        echo '<p>1. kvartal</p>';
        break;
    case 4: //propadanje
    case 5:
    case 6:
            echo '<p>2. kvartal</p>';
        break;
    case 7: //propadanje
    case 8:
    case 9:
            echo '<p>3. kvartal</p>';
        break;
    case 10: //propadanje
    case 11:
    case 12:
            echo '<p>4. kvartal</p>';
        break;
    default:
        echo '<p>Mjesec ne postoji</p>';
        break;
}

// isto kao case 1-3 i switch statementu iznad
if ($mjesec ==1 || $mjesec == 3) {
    echo '<p>1.kvartal</p>';
}




//Zadatak 2
//Napraviti kod da kada se pokrene ispiše koji je dan na temelju trenutnog vremena

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