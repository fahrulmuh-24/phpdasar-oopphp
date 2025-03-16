<?php
trait Pesan {
    public function kirimPesan() {
        echo "Pesan dikirim!\n";
    }
}

class WhatsApp {
    use Pesan;
}   

$wa = new WhatsApp();
$wa->kirimPesan(); // Output: Pesan dikirim!


?>  