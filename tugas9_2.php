<?php

    function bilangan_prima($jumlah){
        for($i = 1; $i <= $jumlah ; $i++){

            $t = 0; 
        
            for($j = 1; $j <= $i ; $j++){

                if ($i % $j == 0) {
                    $t++;
                }
            }
        
            if($t == 2) {
                echo "". $i . ",";
            }
        }
    }

    bilangan_prima(200);

 ?>