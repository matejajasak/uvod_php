<?php

$polaznici[1]['ime'] = 'Ana';
$polaznici[1]['prezime'] = 'Anić';
$polaznici[1]['placa'] = '5687.45';
$polaznici[1]['adresa']['grad'] = 'Zagreb';
$polaznici[1]['adresa']['ulica'] = 'Vrtni put';
$polaznici[1]['adresa']['kcbr'] = 1;

$polaznik2 = array('ime' => 'Đuro', 'prezime' => 'Đurić', 'placa' => 6589.47, 
                'adresa' => array('grad'=> 'Zagreb', 'ulica' => 'Zagrebačka', 'kcbr' => 56));
                
$polaznik3 = array('ime' => 'Ivo', 'prezime' => 'Ivić', 'placa' => 7899.47, 
                    'adresa' => array('grad'=> 'Sisak', 'ulica' => 'Varaždinska', 'kcbr' => 9));

// na mjesto [2] spremamo polaznika 2
$polaznici[2] = $polaznik2;
$polaznici[3] = $polaznik3;

$polaznik = array($polaznici[1], $polaznici[2], $polaznik3);


function format_hr_placa($placa){
    $placa_hr = str_replace('.',',',$placa) . ' HRK';
    return $placa_hr;
}


function format_adresa($adresa_array){
        $adresa_string = '';
    if (is_array($adresa_array)){
        foreach ($adresa_array as $key => $value) {
            $adresa_string .= $value . '';
        }
        $adresa_string = "$adresa_array[grad], $adresa_array[ulica], $adresa_array[kcbr]";
    }

        return $adresa_string;
}

/* ili

function format_adresa($adresa_array){
    $adresa_string = '';
return $adresa_string = "$adresa_array[grad], $adresa_array[ulica], $adresa_array[kcbr]";
*/


?>

<table width="500" border="1">
        <tr>
            <td>R.B.</td>
            <td>Ime</td>
            <td>Prezime</td>
            <td>Plaća</td>
            <td>Adresa</td>
        </tr>
        <?php
        foreach ($polaznici as $key => $polaznik) {
        ?>
        <tr>
            <td><?php echo $key.'.' ?></td>
            <td><?php echo $polaznik['ime']?></td>
            <td><?php echo $polaznik['prezime']?></td>
            <td><?php echo format_hr_placa($polaznik['placa'])?></td> 
            <td><?php echo format_adresa($polaznik['adresa'])?></td>
        </tr>
        <?php    
        }
        ?>
</table>



