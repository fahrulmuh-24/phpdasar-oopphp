<?php
class Hewan {
    public $nama;

    public function makan() {
        echo "$this->nama sedang makan.\n";
    }
}

class Kucing extends Hewan { // Kucing mewarisi Hewan
    public function mengeong() {
        echo "$this->nama mengeong!\n";
    }
}

$pus = new Kucing();
$pus->nama = "Kitty";
$pus->makan(); // Output: Kitty sedang makan.
$pus->mengeong(); // Output: Kitty mengeong!

?>