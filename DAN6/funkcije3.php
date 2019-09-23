<?php

function potencija(&$val){ // & - referenca na varijablu, u ovom primjeru varijabla $a

    $val = $val * $val;
}

$a = 2;
potencija($a);
echo $a;

