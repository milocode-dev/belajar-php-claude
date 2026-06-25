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

?>