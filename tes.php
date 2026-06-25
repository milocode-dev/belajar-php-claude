<?php

    # Tes Pemahaman Dari Ke 4 Latihan Sebelumnya

    # Bagian 1 : Variable, Tipe Data, Percabangan
    # Membuat function yang menghitung diskon member


    function hitungDiskon($harga, $statusMember) {
        if ($statusMember === "gold") {
            return $harga * 0.2;
        } elseif ($statusMember === "silver") {
            return $harga * 0.1;
        } elseif ($statusMember === "reguler") {
            return $harga * 0;
        } else {
            return "Status tidak valid";
        }
    }

    echo "Anda mendapatkan diskon sebesar", " " , hitungDiskon("200000", "silver"), " ", "rupiah <br>";

    # Bagian 2 : Loop & Array
    # Membuat array 5 produk dan menampilkan produk yang harganya di atas 50000

    $produk = [
        ["nama" => "iPhone 13", "harga" => 80000],
        ["nama" => "Gitar", "harga" => 25000],
        ["nama" => "Kipas", "harga" => 35000],
        ["nama" => "Laptop", "harga" => 60000],
        ["nama" => "Parfum", "harga" => 45000],
    ];

    foreach ($produk as $item) {
        if($item["harga"] > 50000) {
            echo $item["nama"] . " - Rp" . $item["harga"] . "<br>";
        }
    }
?>