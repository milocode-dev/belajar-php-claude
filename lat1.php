<?php
    # Latihan Minggu 1 Dengan Panduan Claude

    /* Di latihan pertama ini akan mengulik kembali tentang dasar pemrograman yaitu variable, tipe data (string, integer, float, bool, array),
    operator, if/else, switch 
    */

    # Program 1 : Program Cek Bilangan Ganjil/Genap

    $angka = 10;

    if ($angka % 2 === 0) {
        echo "Angka anda adalah $angka dan angka tersebut termasuk bilangan genap";

        echo "<br>";
    } else {
        echo "Angka anda adalah $angka dan angka tersebut termasuk bilangan ganjil";    

        echo "<br>";
    }

    # Program 2 : Program Kalkulator Sederhana

    // Langkah-langkah (Agar terbiasa menulis apa yang perlu dilakukan terlebih dahulu)
    # Harus mempunyai 2 bilangan untuk diprogram
    # Menentukan kedua bilangan tersebut akan dioperasikan dengan apa + - * /
    # Logika untuk mengoperasikan
    # Echo hasil

    $angka1 = 10;
    $angka2 = 0;
    $operator = "/";

    if ($operator == "+" ) {
        $hasil = $angka1 + $angka2;

        echo "Hasil dari $angka1 + $angka2 adalah $hasil <br>";
    } elseif ($operator == "-") {
        $hasil = $angka1 - $angka2;

        echo "Hasil dari $angka1 - $angka2 adalah $hasil <br>";
    } elseif ($operator == "*") {
        $hasil = $angka1 * $angka2;

        echo "Hasil dari $angka1 * $angka2 adalah $hasil <br>";
    } elseif ($operator == "/") {
        if ($angka2 === 0) {
            echo "Angka tidak logis!";
        } else {
        $hasil = $angka1 / $angka2;

        echo "Hasil dari $angka1 / $angka2 adalah $hasil <br>";
        }
    } else {
        echo "Operator tidak tersedia <br>";
    }
?>