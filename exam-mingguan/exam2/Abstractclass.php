<?php
/*
 Soal 1: Abstract Class Dasar
 Buat abstract class MakhlukHidup yang memiliki method abstract bernafas().
 Kemudian, buat kelas Manusia yang mewarisi MakhlukHidup dan mengimplementasi 
 bernafas() dengan mencetak "Manusia bernafas dengan paru-paru.".
 📌Output yang diharapkan:
 Manusia bernafas dengan paru-paru.

 Soal 2: Abstract Class dengan Beberapa Kelas
 Buat abstract class AlatMusik dengan method abstract mainkan().
 Buat dua kelas yang mewarisi AlatMusik:
 • Gitar dengan method mainkan() yang mencetak "Memainkan gitar: jreng jreng!" 
 • Piano dengan method mainkan() yang mencetak "Memainkan piano: ting ting!" 
 Buat objek dari kedua kelas tersebut dan panggil method mainkan().
 📌Output yang diharapkan:
 Memainkan gitar: jreng jreng!  
 Memainkan piano: ting ting!
 */

// 1.
// abstract class MakhlukHidup {
//     abstract public function bernafas();
// }

// class Manusia extends MakhlukHidup {
//     public function bernafas() {
//         echo "Manusia bernafas dengan paru-paru.\n";
//     }
// }

// $orang = new Manusia();
// $orang->bernafas();

// 2.
// abstract class AlatMusik {
//     abstract public function mainkan();
// }

// class Gitar extends AlatMusik {
//     public function mainkan() {
//         echo "Memainkan gitar: jreng jreng!\n";
//     }
// }

// class Piano extends AlatMusik {
//     public function mainkan() {
//         echo "Memainkan piano: ting ting!\n";
//     }
// }

// $gitar = new Gitar();
// $gitar->mainkan();

// $piano = new Piano();
// $piano->mainkan();

?>