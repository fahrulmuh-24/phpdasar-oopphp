<?php
$menu = [
    'makanan' => [
        'ayam' => [
            'ayam bakar' => 25000,
            'ayam goreng' => 20000,
            'ayam sambal' => 22000,
            'ayam kecap' => 23000
        ],
        'ikan' => [
            'ikan bakar' => 27000,
            'ikan goreng' => 22000,
            'ikan sambal' => 24000,
            'ikan kecap' => 25000
        ], 
        'sapi' => [
            'sapi bakar' => 35000,
            'sapi goreng' => 32000,
            'sapi sambal' => 33000,
            'sapi kecap' => 34000
        ],
        'kambing' => [
            'kambing bakar' => 40000,
            'kambing goreng' => 38000,
            'kambing sambal' => 39000,
            'kambing kecap' => 39500
        ]
    ],
    'minuman' => [
        'es teh' => 5000,
        'es jeruk' => 7000,
        'es anggur' => 10000,
        'masirmas' => 8000,
        'teh sisri' => 6000,
        'es teh anget' => 5000,
        'soda gembira' => 12.000
    ]
];

function tampilMenu(array $menu) {
    echo "---------- Makanan ----------\n";
    foreach ($menu['makanan'] as $jenis => $daftar) {
        echo "$jenis:\n";
        foreach ($daftar as $nama => $harga) {
            echo " - $nama : Rp. " . number_format($harga, 0, ',', '.') . "\n";
        }
    }
    
    echo "\n---------- Minuman ----------\n";
    foreach ($menu['minuman'] as $nama => $harga) {
        echo " - $nama : Rp. " . number_format($harga, 0, ',', '.') . "\n";
    }
}

tampilMenu($menu);
?>
