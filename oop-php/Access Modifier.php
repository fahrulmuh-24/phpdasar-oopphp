<?php
class Laptop {
    private $merek; // Hanya bisa diakses dari dalam class

    public function setMerek($merek) {
        $this->merek = $merek; // Mengubah nilai private
    }

    public function getMerek() {
        return $this->merek; // Mengambil nilai private
    }
}

$asus = new Laptop();
$asus->setMerek("Asus ROG");
echo $asus->getMerek(); // Output: Asus ROG

?>