<?php

    # Minggu ke 4 : Materi OOP Lanjutan -- Inheritance, Interface, Composer

    # Membuat Class Parent Hewan dan Memiliki Child Nama Hewan Tersebut

    abstract class Hewan {
        public $nama;

        public function __construct($nama) {
            $this->nama = $nama;
        }

        abstract public function bersuara();

        public function makan() {
            echo "$this->nama sedang makan. <br>";
        }

        public function bermain() {
            echo "$this->nama sedang bermain. <br>";
        }
    }

    class Kucing extends Hewan {
        public function bersuara() {
            echo "$this->nama say : Meoww! <br>";
        }
    }

    class Anjing extends Hewan {
        public function bersuara() {
            echo "$this->nama say : Wuff! <br>";
        }
    }

    interface BisaTerbang {
        public function terbang();
        public function mendarat();
    }

    class Burung extends Hewan implements BisaTerbang {

        public function bersuara() {
            echo "$this->nama say : Gakzz. <br>";
        }

        public function terbang() {
            echo "$this->nama terbang menggunakan interface. <br>";
        }

        public function mendarat() {
            echo "$this->nama mendarat dengan interface. <br>";
        }
    }

    $newKucing = new Kucing("Ciko");
    $newKucing->makan();
    $newKucing->bersuara();

    $newAnjing = new Anjing("Wolfie");
    $newAnjing->bermain();
    $newAnjing->bersuara();

    $newBurung = new Burung("Joni");
    $newBurung->terbang();
    $newBurung->mendarat();
    $newBurung->bersuara();

?>