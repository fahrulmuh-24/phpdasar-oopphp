<?php
/*
1. Buat class dengan constructor yang menerima parameter name dan age, dan tampilkan nama 
   serta umur ketika objek diinisialisasi
2. Buat class Book dengan constructor yang menerima parameter title dan author. Tampilkan 
   informasi buku saat objek dibuat.
3. Buat class DatabaseConnection dengan destructor yang mencetak pesan "Koneksi ke 
   database ditutup" ketika objek dihancurkan.
4. Buat class yang memiliki constructor untuk menerima nilai parameter, dan destructor yang 
   mencetak pesan ketika objek dihancurkan.
*/

// 1.
// class Person {
//     public $name;
//     public $age;

//     public function __construct($name, $age) {
//         $this->name = $name;
//         $this->age = $age;
//         echo "Nama: $name, Umur: $age\n";
//     }
// }

// $orang = new Person("Fahrul", 20);

// 2.
// class Book {
//     public $title;
//     public $author;

//     public function __construct($title, $author) {
//         $this->title = $title;
//         $this->author = $author;
//         echo "Buku: $title, Penulis: $author\n";
//     }
// }

// $buku = new Book("PHP for Beginners", "John Doe");

// 3.
// class DatabaseConnection {
//     public function __destruct() {
//         echo "Koneksi ke database ditutup\n";
//     }
// }

// $db = new DatabaseConnection();
// unset($db); 

// 4.
// class Contoh {
//     public function __construct() {
//         echo "Objek dibuat!\n";
//     }

//     public function __destruct() {
//         echo "Objek dihancurkan!\n";
//     }
// }

// $obj = new Contoh();
// unset($obj);


?>