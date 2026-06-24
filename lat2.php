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
    echo "<br>";

    # Program 3 : Membuat Array dan menampilkan hanya nama yang memiliki jumlah string lebih dari 5

    $names = ["Pask ", "Jids ", "Prabss ", "Jisuds ", "Ojadn "];

    foreach ($names as $name) {
        if (strlen($name) > 5) {
            echo $name;
            echo "<br>";
        }
    }

    # Tes Mandiri : Membuat function yang menerima array angka dan return rata-ratanya

    function hitungRataRata($angka) {
        return array_sum($angka) / count($angka);
    }

    $data = ["10", "20", "30", "40", "50", "60", "70", "80", "90", "100"];

    echo hitungRataRata($data);
?>