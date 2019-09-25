<?php

https://www.hnb.hr/tecajn/htecajn.htm

$lista = file('https://www.hnb.hr/tecajn/htecajn.htm');

echo '<pre>';
//print_r($lista);
echo '</pre>';

array_shift($lista); //izbacivanje prvog i zadnjeg re

foreach ($lista as $key => $value) {
    
    if (strpos($value, 'USD')) { // strpos - uz pomoć nje se može naći traženi pojam, u ovom slučaju USD
        $dolar = explode('       ', $value);
        echo '<pre>';
        print_r($dolar);
    }
    
    $value_array = explode('       ', $value);
    $valuta = substr($value_array[0], 3, 3);
    $srednji_tecaj = str_replace(',','.',$value_array[2]); // [2] - ovo ovisi o tome da li je kupovni, srednji ili prodajni, ovisno o stupcu

    echo "$valuta - " . round($srednji_tecaj,3) . "<br>";
}

