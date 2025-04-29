<?php
function hitungDomba($arr) {
    $hadir = 0; 
    $hilang = 0;

    foreach ($arr as $domba) {
        if ($domba === true) {
            $hadir++;
        } elseif ($domba === false) {
            $hilang++;
        }
    }  

    return "data kehadiran domba : " . "\n" .  "true = {$hadir}, false = {$hilang}";
}


$domba1 = [123, 'kambing', false, true, null, 'domba', 456, true, false, 'true', 789, true, true];
$domba2 = [true, 'true', 'false', false, true, 'domba', null, false, true, 'kambing', 234];
$domba3 = [false, true, 'domba', 567, 'kambing', null, true, false, 'false', 890, 'true'];
$domba4 = ['domba', true, 'false', false, true, false, 231, 432, 'domba', null, true, true, true];
$domba5 = [true, false, 342, 'domba', true, true, true, true, true, false, true, null, null, 2, 'sapi', true, true];

echo hitungDomba($domba5) . "\n"; 
?>