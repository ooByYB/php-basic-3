<?php

class Mobil {
    protected $roda= 4;
    public $merk;
    public function __construct($merk) 
    {
        $this->merk= $merk;
    }
}

$xeniya = new Mobil("Xeniya");
echo $xeniya->merk; // Xeniya

?>
