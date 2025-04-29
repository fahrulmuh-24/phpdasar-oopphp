<?php
// (//) ini adalah komentar
// (/* */) ini juga komentar untuk  bercabang ke bawah

/* standar output (pemanggilan ke layar)
1. echo
2. print
3. print_r
4. var-dump = menampilkan informasi tampilan 
*/

// float (yang berkoma)
// $a = 12.00;

// string (betanda kutip satu)
// $b = 'string';

// NULL
// $c = null;
 
// integer (angka)  
// $d = 1;
// $e = 5;

// function
// function pertambahan ($d,$e) {
//     return $d + $e;
// }

// function perkalian ($d,$e) {
//     return $d * $e;
// }

// echo "ini hasil pertambahan:" . pertambahan(1,5) . "\n";

// Array (bisa menampung string, true, null ) memanggil dengan sesuai urutan
// $z = [];

// Assosiative array kata kuncinya dibuat oleh kita (lebih spesifik)
// $z2 = [];



// TIME =>>>>>>>>>>>>>>>>>>

// ===>>> memberikan informasi tanggal sekarang===>>>
// echo date("l, d-Y-M");

// ===>>> mengetahui hari apa lima hari kedepan ===>>>
// rumus (detik*menit*hari*heri ke 5)
// echo date("d M Y", time()+60*60*24*5);


// ===>>> hari apa kita lahir ===>>>
// rumus mktime(jam, menit, detik, bulan, tanggal, tahun)
// echo date("l", mktime(0,0,0,02,24,2006));

// ===>>>> menghitung berapa hari lagi ulang tahun ===>>>>
// function hitungHariUlangTahun($tanggal_lahir) {
//     $sekarang = new DateTime(); // Ambil tanggal hari ini
//     $tahun_ini = $sekarang->format('Y'); // Ambil tahun sekarang

//     // Buat tanggal ulang tahun di tahun ini
//     $ulang_tahun = new DateTime("$tahun_ini-$tanggal_lahir");

//     // Kalau ulang tahun tahun ini sudah lewat, pakai tahun depan
//     if ($ulang_tahun < $sekarang) {
//         $ulang_tahun->modify('+1 year');
//     }

//     // Hitung selisih hari
//     $selisih = $sekarang->diff($ulang_tahun);
//     return $selisih->days;
// }

// // Panggil fungsi dengan tanggal lahir
// $tanggal_lahir = "02-24"; // Format MM-DD (Bulan-Hari)
// echo "Sisa " . hitungHariUlangTahun($tanggal_lahir) . " hari lagi sampai ulang tahun kamu :)";


// ===>>> mengetahui jam berapa sekarang di luar negri ===>>>
// date_default_timezone_set('Asia/Riyadh'); // Zona waktu Madinah sama dengan Riyadh

// echo "Waktu saat ini di Madinah: " . date('Y-m-d H:i:s');

?>