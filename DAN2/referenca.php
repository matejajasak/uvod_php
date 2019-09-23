<?php

$a = 500;
$b = &$a; //stvara se referenca (pointer) na memorijsku lokaciju varijable $a --> (ono što piše u a, ispisat će se i u b)

echo 'a='.$a;
echo '<br>';
echo 'b='.$b;
