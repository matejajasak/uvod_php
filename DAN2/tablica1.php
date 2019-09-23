<?php
$ime = 'Mateja';
$prezime = 'Jasak';

?>


<table border = "1">
    <tr>
        <th>Ime</th>
        <th>Prezime</th>
    </tr>
    
    <tr>
        <td><?php echo $ime?></td>
        <td><?php echo $prezime?></td>
    </tr>
</table>

<?php

    echo
        "<table border = '1'>
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
            </tr>
            <tr>
                <td>$ime</td>
                <td>$prezime</td>
            </tr>
        </table>";
?>