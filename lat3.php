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

    # Tes Mandiri

    class Buku {
        public $judul;
        public $penulis;
        public $harga;
        public $terbit;

        function __construct($judul, $penulis, $harga, $terbit) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->harga = $harga;
            $this->terbit = $terbit;
        }

        function tampilkanInfo() {
            echo "Buku dengan judul $this->judul yang merupakan karya dari $this->penulis dengan tahun terbit $this->terbit dijual ke masyarakat umum dengan $this->harga <br>";
        }
    }

    $newBook = new Buku("Giyatris", "Jiojak", "40000", "2025");
    $newBook->tampilkanInfo();

?>