<?php

// class Dosen {
//     public $nama;          
//     protected $asal;       
//     private $umur;         
//     private $agama;        

//     function __construct($nama, $asal, $umur, $agama) {
//         $this->nama = $nama;
//         $this->asal = $asal;
//         $this->umur = $umur;
//         $this->agama = $agama;
//     }

//     public function tampilkanSemua() {
//         echo "Nama  : $this->nama\n";
//         echo "Asal  : $this->asal\n"; 
//         echo "Umur  : $this->umur\n";    
//         echo "Agama : $this->agama\n";  
//     }

//     protected function getAsal() {
//         return $this->asal; 
//     }
// }

// class Mahasiswa extends Dosen {
//     public $universitas;
//     protected $jurusan;

//     function __construct($nama, $asal, $umur, $agama, $universitas, $jurusan) {
//         parent::__construct($nama, $asal, $umur, $agama);
//         $this->universitas = $universitas;
//         $this->jurusan = $jurusan;
//     }

//     public function tampilkanMahasiswa() {
//         echo "Nama        : $this->nama\n"; 
//         echo "Asal        : " . $this->getAsal() . "\n";  
//         echo "Universitas : $this->universitas\n";
//         echo "Jurusan     : $this->jurusan\n";
//     }
// }


// $bioMahasiswa = new Mahasiswa("Ahmad Muhammad", "Yogyakarta", "19 Tahun", "Islam", "Universitas Indonesia", "Pendidikan");
// $bioMahasiswa->tampilkanMahasiswa();

// echo "\nAkses langsung:\n";
// echo "Nama (Public)  : " . $bioMahasiswa->nama . "\n"; 

// Abstract class Animal
abstract class Animal {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __destruct() {
        echo "Objek {$this->name} telah dihapus.\n";
    }

    abstract public function makeSound();
    abstract public function getInfo();
}

// Class Dog
class Dog extends Animal {
    private $breed;

    public function __construct($name, $age, $breed) {
        parent::__construct($name, $age);
        $this->breed = $breed;
    }

    public function makeSound() {
        return "Woof! Woof!";
    }

    public function getInfo() {
        return "Anjing: Nama - {$this->name}, Umur - {$this->age} tahun, Ras - {$this->breed}";
    }
}

// Class Cat
class Cat extends Animal {
    private $color;

    public function __construct($name, $age, $color) {
        parent::__construct($name, $age);
        $this->color = $color;
    }

    public function makeSound() {
        return "Meow! Meow!";
    }

    public function getInfo() {
        return "Kucing: Nama - {$this->name}, Umur - {$this->age} tahun, Warna - {$this->color}";
    }
}

// Membuat objek Dog dan Cat
$dog1 = new Dog("Buddy", 3, "Golden Retriever");
$dog2 = new Dog("Max", 2, "Bulldog");

$cat1 = new Cat("Luna", 4, "Hitam");
$cat2 = new Cat("Milo", 1, "Putih");

// Memanggil method makeSound() dan getInfo()
echo $dog1->makeSound() . "\n";
echo $dog1->getInfo() . "\n";

echo $dog2->makeSound() . "\n";
echo $dog2->getInfo() . "\n";

echo $cat1->makeSound() . "\n";
echo $cat1->getInfo() . "\n";

echo $cat2->makeSound() . "\n";
echo $cat2->getInfo() . "\n";

// Menghapus salah satu objek
unset($dog1);


