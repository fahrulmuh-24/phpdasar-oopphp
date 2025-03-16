<?php
/*
Buat class Student dengan property name yang memiliki akses private, method getName() 
yang memiliki akses public, dan method setName() yang memiliki akses protected. 
Demonstrasikan akses terhadap properti dan metode di luar class.
*/

// 1.
class Student {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    protected function setName($newName) {
        $this->name = $newName;
    }
}

$murid = new Student("Fahrul");
echo $murid->getName();

?>