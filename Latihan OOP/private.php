<?php
class Mobil
{
    private $roda = 4;
    
    private function jalan()
    {
        echo 'Mobil berjalan';
    }

    public function tampilkanJalan()
    {
        $this->jalan();
    }

    public function tampilkanRoda()
    {
        return $this->roda;
    }
}

$avanza = new Mobil();
$avanza->tampilkanJalan();  // Output: Mobil berjalan
echo PHP_EOL;
echo $avanza->tampilkanRoda(); // Output: 4
echo PHP_EOL;
?>
