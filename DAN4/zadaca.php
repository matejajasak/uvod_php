<?php

/*$i = 1;
$j = 1;

    echo "<table><tr>";
    for ($i=1, $i <= 10, $i++) {
        for ($j=1, $j <= 10, $j++) {
        echo "<td>" .$i*$j."</td>";
}
    echo "</tr><tr>";
}
    echo "</tr></table>";
   
*/

$a = 1;
$b = 1;
echo '<table border="1">';
while ($a <= 10) {
    echo '<tr>';
    while ($b <= 10) {
        echo '<td>'.$a*$b.'</td>';
        $b++;
    }
    echo '</tr>';
    $a++;
    $b = 1;
}
echo '</table>';