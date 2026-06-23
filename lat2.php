<?php

    # Latihan Minggu 2 Dengan Panduan Claude

    # Program 1 : Cetak perkalian 1-10

    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            $hasil = $i * $j;

            echo "$i x $j = $hasil <br>";
        }
    }

    # Program 2 : Mengenal Function Dengan Membuat Function Untuk Menghitung Luas Persegi Panjang

    function hitungLuas($p, $l) {
        return $p * $l;
    }

    echo hitungLuas("10", "20");

?>