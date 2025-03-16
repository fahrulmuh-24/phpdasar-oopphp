<?php
function bedakanGenapGanjil($array) {
    $genap = array_filter($array, fn($num) => $num % 2 === 0);
    $ganjil = array_filter($array, fn($num) => $num % 2 !== 0);

    return ["Genap" => $genap, "Ganjil" => $ganjil];
}


$numbers1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numbers2 = [23, 53532, 625265, 1230984, 102];
$numbers3 = [123, 234, 345, 456, 567, 678, 789, 890, 901, 1011];
$numbers4 = [4902,902, 32, 31, 78, 424];
print_r(bedakanGenapGanjil($numbers1));


// $kaliDua = fn($x) => $x * 2;
// echo $kaliDua(5); 

// function kaliDuaDanTampil($x) {
//     $hasil = $x * 2;
//     echo "Hasil: " . $hasil;
// }

// kaliDuaDanTampil(5);

?>

