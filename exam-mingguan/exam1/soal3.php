<?php
function chekabad(array $tahun) {
    foreach($tahun as $abad) {
        echo "$abad tahun ini adalah abad ke " . ceil($abad / 100) . "\n";
    }  
}


$abad1 = [1000, 2309, 2341, 1001, 2022];
$abad2 = [210, 2031, 9201, 3209, 2432];
$abad3 = [909, 122, 3221, 1401, 2222];
$abad4 = [230, 2309, 2341, 12, 20022];
$abad5 = [100, 2, 43, 56, 9098];

chekabad($abad1)
?>