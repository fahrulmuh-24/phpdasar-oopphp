<?php 

class Restoran {
    // Property
    public $nama;
    public $lokasi;
    public $menu = [];   
    
    // Method
    function setRestoran($nama, $lokasi) {
        $this->nama = $nama;
        $this->lokasi = $lokasi;
    }

    function tambahMenu($namaMenu, $harga) {
        $this->menu[$namaMenu] = $harga;
    }

    function tampilkanMenu() {
        echo "Menu di " . $this->nama . ":\n";
        foreach ($this->menu as $namaMenu => $harga) {
            echo "- $namaMenu : Rp$harga\n";
        }
    }
}

// Membuat objek restoran
$warteg = new Restoran;
$warteg->setRestoran("Warteg Maknyus", "Jakarta");
$warteg->tambahMenu("Nasi Goreng", 15000);
$warteg->tambahMenu("Ayam Bakar", 20000);
$warteg->tampilkanMenu();


?>

