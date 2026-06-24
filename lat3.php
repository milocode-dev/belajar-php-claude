<?php

    # Materi ke 3 : Class

    # Membuat Class Mobil dan Menampilkan Objectnya

    class Mobil {
        public $merk;
        public $warna;
        public $type;
        public $kecepatan = 0;

        function __construct($merk, $type, $warna) {
            $this->merk = $merk;
            $this->type = $type;
            $this->warna = $warna;
        }

        function jalan() {
            $this->kecepatan = 60;

            echo "Mobil $this->merk $this->type  berwarna $this->warna berkendara dengan kecepatan $this->kecepatan km/h <br>";
        }

        function rem() {
            $this->kecepatan = 0;
            echo "Mobil $this->merk stop! <br>";
        }
    }

    $newMobil = new Mobil("BMW", "M4", "Black");
    $newMobil->jalan();
    $newMobil->rem();

?>