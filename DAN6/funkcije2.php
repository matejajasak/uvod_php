<?php

$polje = [1,5,7,9,12,34];

function suma($a){ // ova varijabla se zove kako god. ona kopira vrijednosti od varijable $polje

    $zbroj = 0;
    foreach ($a as $value) {
        $zbroj += $value;
    }
    return $zbroj;
}

echo suma($polje);