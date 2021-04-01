<?php 
    require_once('frog.php');

    class Ape extends Animal{
        public $legs = 2;

        function Yell() {
            echo "Yell : Auuooo";
        }
    }
?>