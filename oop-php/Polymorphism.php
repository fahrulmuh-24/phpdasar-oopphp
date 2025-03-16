<?php  
class Hewan {
    public function bersuara() {
        echo "Hewan bersuara...\n";
    }
}

class Anjing extends Hewan {
    public function bersuara() {
        echo "Guk Guk!\n";
    }
}

class Kucing extends Hewan {
    public function bersuara() {
        echo "Meong Meong!\n";
    }
}

$anjing = new Anjing();
$kucing = new Kucing();

$anjing->bersuara(); // Output: Guk Guk!
$kucing->bersuara(); // Output: Meong Meong!

?>