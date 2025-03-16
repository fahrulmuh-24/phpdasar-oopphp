<?php
/*
 1. Ubah variabel string yang berisi angka "123.45" menjadi integer, dan tampilkan hasilnya.
 2. Ubah variabel integer menjadi float. Kemudian, tampilkan hasilnya.   
 3. Buat variabel bertipe array dan ubah menjadi tipe object, kemudian tampilkan hasilnya.
*/

// 1. 
// $angkaString = "123.45";
// $angkaInt = (int) $angkaString;
// echo $angkaInt; 

// 2.
// $angkaInt = 100;
// $angkaFloat = (float) $angkaInt;
// echo $angkaFloat; 

// 3.
$data = ["nama" => "Fahrul", "umur" => 20];
$obj = (object) $data;
echo $obj->nama; 

?>