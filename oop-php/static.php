<?php

class statis{
    static function methodstatic(){
        echo "Ini method static \n";
    }

    function biasa(){
        echo "ini method biasa \n";
    }

    function dinamis(){
        self::methodstatic(); // ini method static
        $this->biasa(); // Ini method biasa
    }
}

// dipanggil tanpa buat objek telebih dahulu
// namaKelas::mtehodStatic();
statis::methodstatic();

// harus buat objek dulu baru bisa dipanggil
$statik = new statis;
$statik->dinamis();