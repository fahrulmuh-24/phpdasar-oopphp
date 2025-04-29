<?php
$menu = [
    'makanan' => [
        'ayam' => [
            'ayam bakar',
            'ayam goreng',
            'ayam sambal',
            'ayam kecap'
        ],
        'ikan' => [
            'ikan bakar',
            'ikan goreng',
            'ikan sambal',
            'ikan kecap'
        ],
        'sapi' => [
            'sapi bakar',
            'sapi goreng',
            'sapi sambal',
            'sapi kecap'
        ],
        'kambing' => [
            'kambing bakar',
            'kambing goreng',
            'kambing sambal',
            'kambing kecap'
        ]
    ],
    "minuman" =>[
        'es teh',
        'es jeruk',
        'es anggur',
        "masirmas",
        "teh sisri",
        "es teh anget",
        "soda gembira"
    ]
];
 function tampilMenu ( array $menu){
   echo "----------makanan----------" . "\n";
   foreach ($menu['makanan'] as $jenis => $nama){
           echo $jenis . " : " . "\n";
       foreach ($nama as $item){
           echo " - " . $item . "\n" ;
       }
   }
   echo "\n" ."----------Minuman----------" . "\n";
   foreach ($menu['minuman'] as $item){
       echo " - " . $item . "\n";
   }
}
tampilMenu($menu);
?>