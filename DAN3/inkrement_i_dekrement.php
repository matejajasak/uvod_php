<?php

$a = 0;
$a = $a + 1;
$a++; // increment operator - povećaj vrijednost za jedan

echo $a.'<br>';

$a--; // decrement operator - smanji vrijednost za jedan
//--$a;

$b = $a++; //prvo se obavi operacija pa se onda poveća vrijednost
// ako je ++a - onda se prvo poveća vrijednost pa se odradi operacija

echo $b; // -> b = 1 -> prvo se pridružuje vrijednost pa se onda $a povećeava za 1



