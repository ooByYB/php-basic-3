<?php

class Mobil {
    private $roda = 4;
    public function jumlahRoda()
    {
        echo $this->roda;
    }
}

$kijang = new Mobil();
$kijang->jumlahRoda(); // menampilkan 4

?>