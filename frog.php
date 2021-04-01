<?php 
    require_once('animal.php');

    class Frog extends Animal{
        public $legs = 4;

        function jump() {
            echo "Jump : hop hop";
        }
    }

?>