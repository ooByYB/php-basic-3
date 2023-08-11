<?php
    // require ('./frog.php');
    class Animal {
        public $name;
        public $legs = 4;
        public $cold_blooded = 'no';
        public function __construct($name) {
            $this->name = $name;
        }
        public function getName() {
            return $this->name;
        }
        public function getLegs() {
            return $this->legs;
        }
        public function getColdBlooded() {
            return $this->cold_blooded;
        }
    }

    // $sheep = new Animal("shaun");

    // echo $sheep->name;
    // echo $sheep->legs;
    // echo $sheep->cold_blooded;
?>