<?php
// abstract class Kendaraan {
//     abstract public function maju();
// }

// class Motor extends Kendaraan {
//     public function maju() {
//         echo "Motor sedang berjalan\n";
//     }
// }

// $vario = new Motor();
// $vario->maju(); // Output: Motor melaju...


abstract class Orang{
    abstract function makan($makanan);
    abstract function minum($minuman,$sop);
    abstract function bernafas():string;
}

class bocil extends Orang{
    function makan($makanan){
        echo "Aku makan $makanan"."\n";
    }

    function minum($minuman, $sop){
        echo "Aku minum $minuman"."\n";
    }

    function bernafas():string{
        return "HHHHHHHHHHHHHHHHHHHHHH"."\n";
    }
}

$bocil = new bocil;
$bocil->makan("Tempe");
$bocil->minum("Jus","sop ayam");
echo $bocil->bernafas();
?>