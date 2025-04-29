<?php
class Mobil {
    public $merk;
    public function __construct($merk) { // Constructor
        $this->merk = $merk;
        echo "Mobil $merk dibuat! \n";
    }
    public function __destruct() { // Destructor
        echo "Mobil $this->merk dihancurkan! \n";
    }
}
$bmw = new Mobil("BMW"); // Membuat objek Mobil

?>