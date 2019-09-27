
<?php


include 'data.php';



function date_trans($datum){
    $datum_polje = explode('-', $datum);
    $datum = $datum_polje[2].'.'.$datum_polje[1].'.'.$datum_polje[0];
    return $datum;
    }


    

?>
  


<table width="500" border="1">
        <tr>
            <td>Rbr.</td>
            <td>Prezime</td>
            <td>Ime</td>
            <td>Datum prijave</td>
            <td>Placeno</td>
        </tr>
        <?php
        foreach ($data as $key => $korisnici) {
          
        ?>
        <tr>
            <td><?php echo $key.'.' ?></td>
            <td><?php echo $korisnici['prezime']?></td>
            <td><?php echo $korisnici['ime']?></td>
            <td><?php echo date_trans($korisnici['datum'])?></td>
            <td><?php ($korisnici['placeno'])?>
            <select id = "placeno">
            <option <?php if( $korisnici['placeno'] == 'Da') echo 'selected'; ?>> Da</option>
            <option <?php if( $korisnici['placeno'] == 'Ne') echo 'selected' ; ?>> Ne </option>
            </select>

        </tr>
        <?php   
        }
        ?>
</table>