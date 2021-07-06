<?php
    function deret_fibonacci($jumlah){

        $angka_sebelumnya=0;
        $angka_setelah=1;
        
        $hasil = "$angka_sebelumnya $angka_setelah";
        
        for ($i=0; $i<$jumlah; $i++){

            $temp = $angka_setelah + $angka_sebelumnya;
            $hasil = $hasil." $temp";
        
            //siapkan angka untuk perhitungan berikutnya
            $angka_sebelumnya = $angka_setelah;
            $angka_setelah = $temp;
        }

        return $hasil;
    }

    echo deret_fibonacci(20);
?>