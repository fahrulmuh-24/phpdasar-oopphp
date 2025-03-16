<?php

/* SOAL UJIAN 
1. Perhatikan sebuah array/list dari domba yang mana terdapat domba yang hilang dari tempatnya. Kami butuh fungsi untuk menghitung domba yang hadir dan yang hilang di array atau list tersebut (true berarti hadir).

$domba1 = [123, 'kambing', false, true, null, 'domba', 456, true, false, 'true', 789, true, true];
$domba2 = [true, 'true', 'false', false, true, 'domba', null, false, true, 'kambing', 234];
$domba3 = [false, true, 'domba', 567, 'kambing', null, true, false, 'false', 890, 'true'];
$domba = ['domba', true, 'false', false, true, false, 231, 432, 'domba', null, true, true, true];
$domba = [true, false, 342, 'domba', true, true, true, true, true, false, true, null, null, 2, 'sapi', true, true];

Example,
[true, true, true, false, true, true, true, true , true, false, true, false, true, false, false, true , true, true, true, true , false, false, true, true]
The correct answer would be ‘present = 17, alpha = 7’.
*/

// function hitungDomba($domba) {
    
//     $hadir = count(array_filter($domba, fn($status) => $status === true));
    
//     $hilang = count(array_filter($domba, fn($status) => $status === false));
    
//     return [ "hadir" => $hadir, "hilang" => $hilang ];
// }

// // Test data
// $domba1 = [123, 'kambing', false, true, null, 'domba', 456, true, false, 'true', 789, true, true];
// $domba2 = [true, 'true', 'false', false, true, 'domba', null, false, true, 'kambing', 234];
// $domba3 = [false, true, 'domba', 567, 'kambing', null, true, false, 'false', 890, 'true'];
// $domba4 = ['domba', true, 'false', false, true, false, 231, 432, 'domba', null, true, true, true];
// $domba5 = [true, false, 342, 'domba', true, true, true, true, true, false, true, null, null, 2, 'sapi', true, true];

// print_r (hitungDomba($domba5));

// <=======================================>



/* SOAL UJIAN 
2. Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7.

    $number1 = [3, 12, 43, 21, 90, 120, 1330];
    $number2 = [321, 64, 3, 24, 80, 34, 60];
    $number3 = [99, 89, 45, 21, 75, 23, 55];
    $number4 = [40, 12, 41992, 21, 908493, 13420, 1330];


*/

// function cekKelipatan($array) {
//     // Iterasi setiap elemen dalam array
//     foreach ($array as $number) {
//         if ($number % 3 == 0) {
//             echo $number . " termasuk kelipatan 3.\n";

//         } elseif ($number % 7 == 0) {
//             echo $number . " termasuk kelipatan 7.\n";

//         } else {
//             echo $number . " bukan kelipatan 3 ataupun 7.\n";
//         }
//     }
// }

// // Test data
// $number1 = [3, 12, 43, 21, 90, 120, 1330];
// $number2 = [321, 64, 3, 24, 80, 34, 60];
// $number3 = [99, 89, 45, 21, 75, 23, 55];
// $number4 = [40, 12, 41992, 21, 908493, 13420, 1330];

// Contoh penggunaan
// echo "Cek kelipatan untuk number1:\n";
// cekKelipatan($number1);

// echo "\nCek kelipatan untuk number2:\n";
// cekKelipatan($number2);

// echo "\nCek kelipatan untuk number3:\n";
// cekKelipatan($number3);

// echo "\nCek kelipatan untuk number4:\n";
// cekKelipatan($number4); 


// <=======================================>



/* SOAL UJIAN 
3.Abad pertama terbentang dari tahun 1 hingga  tahun 100, abad
abad kedua - dari tahun 101 hingga tahun 200, dan seterusnya.

Given a year, return the century it is in
$abad1 = [1000, 2309, 2341, 1001, 2022];
$abad2 = [210, 2031, 9201, 3209, 2432];
$abad3 = [909, 122, 3221, 1401, 2222];
$abad4 = [230, 2309, 2341, 12, 20022];
$abad5 = [100, 2, 43, 56, 9098];

*/

// function getAbad($tahun) {
//     return ceil($tahun / 100); // Menggunakan ceil untuk membulatkan ke atas
// }

// $abad1 = [1000, 2309, 2341, 1001, 2022];
// $abad2 = [210, 2031, 9201, 3209, 2432];
// $abad3 = [909, 122, 3221, 1401, 2222];

// // Fungsi untuk menampilkan hasil abad dari array tahun
// function cekAbad($array) {
//     foreach ($array as $tahun) {
//         echo "Tahun $tahun berada di abad ke-" . getAbad($tahun) . "\n";
//     }
// }

// echo "Abad 1:\n";
// cekAbad($abad1);

// echo "\nAbad 2:\n";
// cekAbad($abad2);

// echo "\nAbad 3:\n";
// cekAbad($abad3);


// <=======================================>


/* SOAL UJIAN 
4. Budi ingin membuat fungsi untuk membedakan antara angka genapdan ganjil
dalam sebuah array dengan bahasa PHP, bisakah kamu membantunya?

$numbers1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numbers2 = [23, 53532, 625265, 1230984, 102];
$numbers3 = [123, 234, 345, 456, 567, 678, 789, 890, 901, 1011];
$numbers4 = [4902,902, 32, 31, 78, 424];
$numbers5 = [8932, 971902, 2179879, 31378121321
*/

// function cekGenapGanjil($array) {
//     foreach ($array as $number) {
//         if ($number % 2 == 0) {
//             echo "$number adalah angka genap.\n"; 
//         } else {
//             echo "$number adalah angka ganjil.\n"; 
//         }
//     }
// }

// // data
// $numbers1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// $numbers2 = [23, 53532, 625265, 1230984, 102];
// $numbers3 = [123, 234, 345, 456, 567, 678, 789, 890, 901, 1011];
// $numbers4 = [4902, 902, 32, 31, 78, 424];
// $numbers5 = [8932, 971902, 2179879, 31378121321];


// echo "Array 1:\n";
// cekGenapGanjil($numbers1);

// echo "\nArray 2:\n";
// cekGenapGanjil($numbers2);

// echo "\nArray 3:\n";
// cekGenapGanjil($numbers3);

// echo "\nArray 4:\n";
// cekGenapGanjil($numbers4);

// echo "\nArray 5:\n";
// cekGenapGanjil($numbers5);


// <=======================================>

/* SOAL UJIAN 
5. Buat kumpulan data nama nama array kemudian buatlah 
fungsi yang menerima string untuk menambahkan carachter 
otomatis pada setiap array

$add1 = ['Andi', 10000, 'Frodo', 'Gandalf', 1000, 10000000];
$add2 = [232000, 15000000000000, 'Frodo', 'Legolas', 'Sukardi', 2500, 'Hataru', 9320200];
$add3 = [20000, 'Aragorn','Legolas',320090, 'Naruto', 3000, 7500, 'Bambang'];
$add4 = ['Siti', 340023, 'Samwise', 'Boromir', 43000, 604000];
$add5 = ['Joko', 30000, 'Dwarf', 5000, 'Gwenn', 'Pippin', 2300, 2300,'Conan',920000000000000000000];


Array =  [Nama1,Nama2,] | [10.000,20.000] 
Array = [Pak Nama1 -kun,Pak Nama2 -kun] | [Rp.10.000,00-,Rp.20.000,00-]
*/

//  function tambahKarakter($array, $depan, $belakang){
//     return array_map(fn($nama)=> $depan . " ". $nama . $belakang , $array); 
//  }
   
// $nama = ["nama1","nama2"];
// $harga = [10000,20000];

// $namabaru = tambahkarakter($nama, "pak","-kun");
// $hargabaru = tambahkarakter($harga, "Rp.", ",00");

// // print_r($hargabaru);
// var_dump($hargabaru);
// var_dump($namabaru);
// <=======================================>

/* SOAL UJIAN 
6. Warung makan “Budhe Nar” ingin mendigitalisasi restorannya dia sudah 
menyediakan menu menu masakannya dalam bentuk array, bantulah mereka untuk 
menampilkan semua menu yang mereka punya secara rapih. 
$menu = [
    'makanan' => [
        'ayam' => [
            'ayam bakar',
            'ayam goreng',
            'ayam sambal',
            'ayam kecap'
        ],
        'ikan' => [
            'ikan bakar',
            'ikan goreng',
            'ikan sambal',
            'ikan kecap'
        ],
        'sapi' => [
            'sapi bakar',
            'sapi goreng',
            'sapi sambal',
            'sapi kecap'
        ],
        'kambing' => [
            'kambing bakar',
            'kambing goreng',
            'kambing sambal',
            'kambing kecap'
        ]
        ],
    "minuman" =>[
        'es teh',
        'es jeruk',
        'es anggur',
        "masirmas",
        "teh sisri",
        "es teh anget",
        "soda gembira"
    ]
];

*/

$menu = [
    'makanan' => [
        'ayam' => [
            'ayam bakar',
            'ayam goreng',
            'ayam sambal',
            'ayam kecap'
        ],
        'ikan' => [
            'ikan bakar',
            'ikan goreng',
            'ikan sambal',
            'ikan kecap'
        ],
        'sapi' => [
            'sapi bakar',
            'sapi goreng',
            'sapi sambal',
            'sapi kecap'
        ],
        'kambing' => [
            'kambing bakar',
            'kambing goreng',
            'kambing sambal',
            'kambing kecap'
        ]
        ],
    "minuman" =>[
        'es teh',
        'es jeruk',
        'es anggur',
        "masirmas",
        "teh sisri",
        "es teh anget",
        "soda gembira"
    ]
];

function tampilMenu($menu){
    echo "================================\n";
    echo "     WARUNG MAKAN BUDHE NAR     \n";
    echo "================================\n";
    echo "-------------MAKANAN------------\n";
    foreach ($menu['makanan'] as $jenis => $nama){
        echo $jenis . " : " . "\n";
    foreach ($nama as $item){
        echo " - " . $item . "\n" ;
    }
}
    echo "\n" ."----------Minuman----------" . "\n";
    foreach ($menu['minunman'] as $item){
        echo " - " . $item . "\n";
}
}
tampilMenu($menu);

// <=======================================>

/* SOAL UJIAN 
7 Dan buatkan function untuk set harga pada setiap menu yang mereka punya. 
$menu = [
    'makanan' => [
        'ayam' => [
            'ayam bakar' => 25000,
            'ayam goreng' => 20000,
            'ayam sambal' => 22000,
            'ayam kecap' => 23000
        ],
        'ikan' => [
            'ikan bakar' => 27000,
            'ikan goreng' => 22000,
            'ikan sambal' => 24000,
            'ikan kecap' => 25000
        ], 
        'sapi' => [
            'sapi bakar' => 35000,
            'sapi goreng' => 32000,
            'sapi sambal' => 33000,
            'sapi kecap' => 34000
        ],
        'kambing' => [
            'kambing bakar' => 40000,
            'kambing goreng' => 38000,
            'kambing sambal' => 39000,
            'kambing kecap' => 39500
        ]
    ],
    'minuman' => [
        'es teh' => 5000,
        'es jeruk' => 7000,
        'es anggur' => 10000,
        'masirmas' => 8000,
        'teh sisri' => 6000,
        'es teh anget' => 5000,
        'soda gembira' => 12.000
    ]
];
*/



// Daftar menu dalam bentuk array asosiatif
// $menu = [
//     'makanan' => [
//         'ayam' => [
//             'ayam bakar' => 25000,
//             'ayam goreng' => 20000,
//             'ayam sambal' => 22000,
//             'ayam kecap' => 23000
//         ],
//         'ikan' => [
//             'ikan bakar' => 27000,
//             'ikan goreng' => 22000,
//             'ikan sambal' => 24000,
//             'ikan kecap' => 25000
//         ], 
//         'sapi' => [
//             'sapi bakar' => 35000,
//             'sapi goreng' => 32000,
//             'sapi sambal' => 33000,
//             'sapi kecap' => 34000
//         ],
//         // 'kambing' => [
//             'kambing bakar' => 40000,
//             'kambing goreng' => 38000,
//             'kambing sambal' => 39000,
//             'kambing kecap' => 39500
//         ]
//     ],
//     'minuman' => [
//         'es teh' => 5000,
//         'es jeruk' => 7000,
//         'es anggur' => 10000,
//         'masirmas' => 8000,
//         'teh sisri' => 6000,
//         'es teh anget' => 5000,
//         'soda gembira' => 12.000
//     ]
// ];

// // 
// function tampilkanMenu($menu) {
//     echo "==================================\n";
//     echo "       MENU WARUNG BUDHE NAR      \n";
//     echo "==================================\n";
//     echo "| No | Nama Menu      | Harga    |\n";
//     echo "----------------------------------\n";
    
//     foreach ($menu as $index => $item) {
//         printf("| %-2d | %-13s | Rp. %-6d |\n", $index + 1, $item["nama"], $item["harga"]);
//     }
    
//     echo "==================================\n";
// }

// tampilkanMenu($menu);

