<?php 

// loops
$dataPit = [
    'Hubaib',
    'Ujang',
    'Bambang',
    'Asep',
    'Udin',
    'Budi',
    'Rudi',
    'Caca',
    'Dedi',];

$i = 0;

while ($i < count($dataPit)) {
  echo $i+1 . '. Nama : '. $dataPit[$i] . "\n";
$i++;

// while loop
$i = 0;  
while ($i < 100) {
  $i+=10;
  echo $i . "-";
}

// for loop
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }



  $ukuran = 5;
  for($i = 1; $i <= $ukuran ; $i++){
    for($o = 1; $o <= $ukuran ; $o++){
        if (true) {
            if($o == $i || $o == ($ukuran - $i)){
                echo "*";
            }
                echo " ";
            }
             echo "\n";
        }
    }
  }  