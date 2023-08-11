<?php
    require_once './animal.php';
    require_once './badak.php';
    require_once './monyet.php';

    $sheep = new Animal("Shaun");
    echo "Name : " . $sheep->getName() . "<br>";
    echo "Legs : " . $sheep->getLegs() . "<br>";
    echo "Cold Blooded : " . $sheep->getColdBlooded() . "<br>";
    echo "<br>";
    
    $badak = new Badak("Badak");
    echo "Name : " . $badak ->getName() . "<br>";
    echo "Legs : " . $badak ->getLegs() . "<br>";
    echo "Cold Blooded : " . $badak ->getColdBlooded() . "<br>";
    echo "Jump : " . $badak ->jump() . "<br>";
    echo "<br>";

    $monyet  = new Monyet("Monyet");
    echo "Name : " . $monyet ->getName() . "<br>";
    echo "Legs : " . $monyet ->getLegs() . "<br>";
    echo "Cold Blooded : " . $monyet ->getColdBlooded() . "<br>";
    echo "Yell : " . $monyet ->yell() . "<br>";
    echo "<br>";
?>