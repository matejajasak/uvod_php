<?php

$a = 1;

do {
    echo $a.'<br>';
    $a++;
} while($a <= 10);


echo '<table border="1">';

$b = 1;
do {
    echo '<tr>
            <td>'.$b.'</td>
            <td>Hello!</td>
            </tr>';
    $b++;
} while ($b <= 10);

echo '</table>';