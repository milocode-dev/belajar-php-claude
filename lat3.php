<?php

    # Materi ke 3 : Class

    # Membuat Class Mobil dan Menampilkan Objectnya

    class Mobil {
        public $merk;
        public $warna;
        public $kecepatan = 0;

        function jalan() {
            $this->kecepatan = 60;

            echo "Mobil $this->merk berwarna $this->warna berkendara dengan kecepatan $this->kecepatan <br>";
        }

        function rem() {
            $this->kecepatan = 0;
            echo "Mobil $this->merk stop! <br>";
        }
    }

    $newMobil = new Mobil();
    $newMobil->merk = "Avanza";
    $newMobil->warna = "Putih";
    $newMobil->jalan();
    $newMobil->rem();

?>