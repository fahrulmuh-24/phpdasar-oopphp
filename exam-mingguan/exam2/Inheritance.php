<?php
/*
 Soal 1: Pewarisan Sederhana
 Buatlah kelas induk bernama Hewan dengan property $nama dan method suara().
 Buat kelas anak bernama Kucing yang mewarisi Hewan dan mengimplementasikan method 
 suara() yang mencetak "Meow!".
 Kemudian, buat objek dari kelas Kucing dengan nama "Milo" dan panggil method suara().
 📌Output yang diharapkan:
 Nama: Milo 

 Soal 2: Pewarisan dengan Konstruktor
 Buat kelas Kendaraan yang memiliki property $merk dan method info().
 Kemudian, buat kelas Mobil yang mewarisi Kendaraan dan menambahkan property 
 $jumlahPintu.
 Gunakan konstruktor pada kedua kelas agar data dapat diinisialisasi saat objek dibuat.
 📌Output yang diharapkan:
 Merk: Toyota  
 Jumlah Pintu: 4
 */


//  1.
//  class Hewan {
//     public $nama;
//     public function suara() {
//         echo "Suara tidak diketahui\n";
//     }
// }

// class Kucing extends Hewan {
//     public function suara() {
//         echo "Meow!\n";
//     }
// }

// $milo = new Kucing();
// $milo->nama = "Milo";
// echo "Nama: " . $milo->nama . "\n";
// $milo->suara();

// 2.
// class Kendaraan {
//     public $merk;

//     public function __construct($merk) {
//         $this->merk = $merk;
//     }

//     public function info() {
//         echo "Merk: " . $this->merk . "\n";
//     }
// }

// class Mobil extends Kendaraan {
//     public $jumlahPintu;

//     public function __construct($merk, $jumlahPintu) {
//         parent::__construct($merk);
//         $this->jumlahPintu = $jumlahPintu;
//     }

//     public function infoMobil() {
//         echo "Merk: $this->merk\n";
//         echo "Jumlah Pintu: $this->jumlahPintu\n";
//     }
// }

// $toyota = new Mobil("Toyota", 4);
// $toyota->infoMobil();


?>