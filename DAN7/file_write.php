<?php

$handle = fopen('podaci.txt', 'a');
fwrite($handle, "\nJasna Jasić");
fwrite($handle, "\nZorana Zoranić");
fclose($handle);