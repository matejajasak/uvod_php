<?php

$file = 'podaci.txt';

$handle = fopen($file, 'r'); // pokazivač u file-u
$fsize = filesize($file);

$contents = fread($handle, $fsize);

fclose($handle); // potrebno je zatvoriti konekciju za čitanje, budući da smo ju u fopen otvorili

echo $contents;