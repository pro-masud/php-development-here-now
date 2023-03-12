<?php 

    class Human{

        public $name; 

        function humanSay(){
            echo "my name is masud rana {$this -> name}";
        }
    }

    class Cut{
        function catShy(){
            echo "meow";
        }
    }

    $humanObj = new Human();
    $humanObj -> name = "masud rana";
    $cutObj = new Cut();


    $humanPropartyGetData = $humanObj -> name;
    echo $humanPropartyGetData;
    // $cutObj -> catShy();







?>
