<?php

$lista = file_get_contents('https://www.hnb.hr/tecajn/htecajn.htm');

echo '<pre>';
var_dump($lista);
echo '</pre>';