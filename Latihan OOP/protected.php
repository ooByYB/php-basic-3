<?php

class Mobil 
{
    protected $roda = 4;
}

class MobilSport extends Mobil
{
    protected $maxSpeed;
    
    public function getRoda() {
        return $this->roda;
    }
}

$ferrari = new MobilSport;
echo $ferrari->getRoda(); // Output: 4

?>
