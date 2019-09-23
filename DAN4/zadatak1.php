<?php

//ispisati brojeve između 1 i 100 koji su djeljivi sa 3

/*for($i = 3; $i <= 100; $i+=3){
    echo $i.'<br>';
}*/

for ($i=1; $i < 100 ; $i++){
    if ($i % 3 == 0) {
        echo $i.'<br>';
    }

}

