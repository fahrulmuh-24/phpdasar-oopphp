<?php
function tambahKarakter($array, $awal, $akhir) {
    return array_map(fn($item) => $awal . " " . $item . $akhir, $array);
}

$nama = ["Nama1", "Nama2"];
$harga = ["10.000", "20.000"];

$namaBaru = tambahKarakter($nama, "Pak", " -kun");
$hargaBaru = tambahKarakter($harga, "Rp.", ",00-");

print_r($namaBaru);
print_r($hargaBaru);

?>


$nama1 = ["Andi","Frodo","Gandalf"];
$nama2 = ["Aragorn","Legolas","Sukardi","Hataru"];
$nama3 = ["Aragorn","Legolas","Naruto","Bambang"];
$nama4 = ["Siti","Samwise","Boromir",];
$nama5 = ["Joko","Dwarf","Gwen","Pippin"];