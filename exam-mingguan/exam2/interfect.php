<?php
/*
 Soal 1: Menggunakan Interface
 Buat interface Bentuk dengan method hitungLuas().
 Kemudian, buat dua kelas yang mengimplementasi interface ini:
 • Kelas Persegi (memiliki property $sisi, method hitungLuas() mengembalikan 
 luas sisi * sisi). 
• Kelas Segitiga (memiliki property $alas dan $tinggi, method hitungLuas() 
 mengembalikan 0.5 * alas * tinggi). 
 Buat objek dari kedua kelas tersebut dan tampilkan luasnya.
 📌Output yang diharapkan:
 Luas Persegi: 25  
 Luas Segitiga: 15
 (Jika panjang sisi 5, alas 6, dan tinggi 5)

 Soal 2: Interface untuk Kendaraan
 Buat interface Kendaraan dengan method jalan().
 Kemudian, buat kelas Mobil dan kelas Sepeda yang mengimplementasi interface ini dengan 
 mencetak:
 • "Mobil berjalan di jalan raya." 
 • "Sepeda berjalan di jalur sepeda." 
 Buat objek dari kedua kelas dan panggil method jalan().
 📌Output yang diharapkan:
 Mobil berjalan di jalan raya.  
 Sepeda berjalan di jalur sepeda.
*/

// 1.
// interface Bentuk {
//     public function hitungLuas();
// }

// class Persegi implements Bentuk {
//     public $sisi;
//     public function __construct($sisi) {
//         $this->sisi = $sisi;
//     }
//     public function hitungLuas() {
//         return $this->sisi * $this->sisi;
//     }
// }

// class Segitiga implements Bentuk {
//     public $alas, $tinggi;
//     public function __construct($alas, $tinggi) {
//         $this->alas = $alas;
//         $this->tinggi = $tinggi;
//     }
//     public function hitungLuas() {
//         return 0.5 * $this->alas * $this->tinggi;
//     }
// }

// $p = new Persegi(5);
// echo "Luas Persegi: " . $p->hitungLuas() . "\n"; 

// $s = new Segitiga(6, 5);
// echo "Luas Segitiga: " . $s->hitungLuas() . "\n";

// 2.
interface Kendaraan {
    public function jalan();
}


class Mobil implements Kendaraan {
    public function jalan() {
        echo "Mobil berjalan di jalan raya.\n";
    }
}


class Sepeda implements Kendaraan {
    public function jalan() {
        echo "Sepeda berjalan di jalur sepeda.\n";
    }
}


// $mobil = new Mobil();
// $mobil->jalan(); 

$sepeda = new Sepeda();
$sepeda->jalan();

?>