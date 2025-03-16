<?php
function kelipatan( $array){

    $hasil=[];
    
    foreach ($array as $kelipatan){
        if($kelipatan % 3 == 0 || $kelipatan % 7 == 0){
            $hasil[$kelipatan]="true";
        }else{
            $hasil[]= "false";
        }
    }
    return $hasil;
}
$number1 = [3, 12, 43, 21, 90, 120, 1330];
$number2 = [321, 64, 3, 24, 80, 34, 60];

print_r(kelipatan($number2));
?>