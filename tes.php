<?php

    # Tes Pemahaman Dari Ke 4 Latihan Sebelumnya

    # Bagian 1 : Variable, Tipe Data, Percabangan
    # Membuat function yang menghitung diskon member


    function hitungDiskon($harga, $statusMember) {
        if ($statusMember === "gold") {
            $diskon = $harga * 0.2;
            $hargaSetelahDiskon = $harga - $diskon;
            return $hargaSetelahDiskon;
        } elseif ($statusMember === "silver") {
            $diskon = $harga * 0.1;
            $hargaSetelahDiskon = $harga - $diskon;
            return $hargaSetelahDiskon;
        } elseif ($statusMember === "reguler") {
            $diskon = $harga * 0;
            $hargaSetelahDiskon = $harga - $diskon;
            return $hargaSetelahDiskon;
        } else {
            return "Status tidak valid";
        }
    }

    echo "Anda mendapatkan diskon 20% total belanjaan setelah diskon adalah " . hitungDiskon(200000, "gold") . "<br>";

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


    # Bagian 3 : OOP
    # Tes pemahaman class

    class RekeningBank {
        public $namaPemilik;
        public $saldo;

        public function __construct($namaPemilik, $saldo) {
            $this->namaPemilik = $namaPemilik;
            $this->saldo = $saldo;
        }

        public function setor($jumlah) {
            $this->saldo += $jumlah;

            echo "$this->namaPemilik Saldo telah ditambahkan senilai : $jumlah <br>";
        }

        public function tarik($jumlah) {
            if ($this->saldo < $jumlah) {
                echo "$this->namaPemilik Saldo tidak mencukupi, total saldo anda saat ini adalah $this->saldo <br>";
            } else {
                $this->saldo -= $jumlah;

                echo "$this->namaPemilik Saldo anda telah ditarik senilai $jumlah <br>";
            }
        }

        public function cekSaldo() {
            echo "$this->namaPemilik    Saldo anda saat ini bernilai : $this->saldo <br>";
        }
    }

    $newUser = new RekeningBank("Riya", 300000);
    $newUser->cekSaldo();
    $newUser->setor(200000);
    $newUser->cekSaldo();
    $newUser->tarik(450000);
    $newUser->cekSaldo();
    $newUser->tarik(100000);
    $newUser->cekSaldo();


    abstract class Kendaraan {
        public $merk;

        public function __construct($merk) {
            $this->merk = $merk;
        }

        public function jalan() {
            echo "Mobil $this->merk sedang berjalan. <br>";
        }

        abstract public function jenisKendaraan();
    }

    interface BisaBayar {
        public function bayar($jumlah);
    }

    class Mobil extends Kendaraan implements BisaBayar {
        public $jenis;

        public function __construct($merk, $jenis) {
            parent::__construct($merk);
            $this->jenis = $jenis;
        }

        public function jalan() {
            parent::jalan();
            echo "Jenis Kendaraan : $this->jenis <br>";
        }

        public function jenisKendaraan() {
            if ($this->jenis === "motor") {
                echo "$this->jenis adalah kendaraan roda 2";
            } else {
                echo "$this->jenis adalah kendaraan roda lebih dari 2";
            }
        }

        public function bayar($jumlah) {
            echo "$this->merk membayar sejumlah $jumlah";
        }
    }


    $mobil = new Mobil("Toyota", "mobil");
    $mobil->jalan();
    $mobil->jenisKendaraan();
    $mobil->bayar(2000);
?>