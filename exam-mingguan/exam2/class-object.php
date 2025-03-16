<?php
/*
1. Buat sebuah class bernama Person dengan property name dan age. Buat objek dari class 
   tersebut dan tampilkan nilai property name.  
2. Buat class Car dengan method startEngine(), yang menampilkan "Engine Started" ketika 
   dipanggil.
3. Buat class Rectangle dengan property width dan height, serta method calculateArea() yang 
   mengembalikan hasil luas (area) dari persegi panjang.
4. Buat objek dari class Rectangle dan tampilkan hasil perhitungan area berdasarkan property 
   width dan height.
5. Buat class Employee dengan method getSalary(). Tulis kode untuk menampilkan gaji dari 
   objek Employee.
*/

// 1.
// class Person {
//     public $name;
//     public $age;
// }
// $orang = new Person();
// $orang->name = "Fahrul";
// echo $orang->name; 

// 2.
// class Car {
//     public function startEngine() {
//         echo "Engine Started";
//     }
// }
// $mobil = new Car();
// $mobil->startEngine();

// 3.
// class Rectangle {
//     public $width;
//     public $height;

//     public function calculateArea() {
//         return $this->width * $this->height;
//     }
// }

// $kotak = new Rectangle();
// $kotak->width = 5;
// $kotak->height = 10;
// echo $kotak->calculateArea(); 

// 4.
// class Employee {
//     public function getSalary() {
//         return 5000000;
//     }
// }
// $pegawai = new Employee();
// echo $pegawai->getSalary(); 

// 5.
// class Employee {
//     private $salary;

//     public function __construct($salary) {
//         $this->salary = $salary;
//     }

//     public function getSalary() {
//         return $this->salary;
//     }
// }

// $pegawai1 = new Employee(5000000);
// $pegawai2 = new Employee(7000000);

// echo "Gaji Pegawai 1: " . $pegawai1->getSalary() . "\n";
// echo "Gaji Pegawai 2: " . $pegawai2->getSalary() . "\n"; 


?>