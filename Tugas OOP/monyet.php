<?php
    require_once './animal.php';

    class Monyet extends Animal {
        public function yell() {
            return 'Khuhuhuuuaaa';
        }
        public function getLegs() {
            return 2;
        }
    }
?>