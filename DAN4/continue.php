<?php

for ($i=0; $i < 10; $i++) { 
    echo '<br>';
    for ($j=0; $j <= 10; $j++) { 

        if ($j == 8){
            continue 2; // continue - preskače if petlju i preskače broj 8
                        // continue 2 - preskače unutarnj u ivanjsku i kreće ispočetka
        }
        echo '  '.$j;
    }
    
}