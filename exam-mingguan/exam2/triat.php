<?php
/*
 Soal 1: Trait untuk Berjalan
 Buat sebuah trait bernama BisaBerjalan yang memiliki method berjalan(), yang 
 mencetak "Saya bisa berjalan!".
 Kemudian, buat kelas Robot yang menggunakan trait ini, dan buat objeknya untuk memanggil 
 method berjalan().
 📌Output yang diharapkan:
 Saya bisa berjalan!

 Soal 2: Trait dengan Beberapa Kelas
 Buat trait BisaTerbang yang memiliki method terbang().
 Buat kelas Burung dan kelas Pesawat, keduanya menggunakan trait BisaTerbang.
 Buat objek dari kedua kelas dan panggil method terbang().
 📌Output yang diharapkan:
 Burung: Saya bisa terbang tinggi!  
 Pesawat: Saya bisa terbang tinggi!
*/

// 1.
// trait BisaBerjalan {
//     public function berjalan() {
//         echo "Saya bisa berjalan!\n";
//     }
// }

// class Robot {
//     use BisaBerjalan;
// }

// $r2d2 = new Robot();
// $r2d2->berjalan();

// 2.
// trait BisaTerbang {
//     public function terbang() {
//         echo "Saya bisa terbang tinggi!\n";
//     }
// }

// class Burung {
//     use BisaTerbang;
// }

// class Pesawat {
//     use BisaTerbang;
// }

// $elang = new Burung();
// $elang->terbang(); 

// $boeing = new Pesawat();
// $boeing->terbang();

?>