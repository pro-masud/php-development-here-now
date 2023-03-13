<?php 

    // class Human{

    //     public $name; 

    //     function humanSay(){
    //         echo "my name is masud rana {$this -> name}";
    //     }
    // }

    // class Cut{
    //     function catShy(){
    //         echo "meow";
    //     }
    // }

    // $humanObj = new Human();
    // $humanObj -> name = "masud rana";
    // $cutObj = new Cut();


    // $humanPropartyGetData = $humanObj -> name;
    // echo $humanPropartyGetData;
    // // $cutObj -> catShy();


    class RGB{
        private $color;
        private $red;
        private $green;
        private $blue;

        public function __construct($colorCode = '0'){

            $this -> color = ltrim($colorCode,"#");

            $this -> setColor($colorCode );
        }
        public function getColor(){
            return $this -> color;
        }
        public function setColor($colorCode){
            $this -> color = ltrim($colorCode,"#");
            $this -> parSeColor();
        }
        private function parSeColor(){

            if($this -> color){
                sscanf($this -> color, '%02x%02x%02x',$this->red, $this->green,$this->blue);
                echo $this -> red ."\n";
                echo $this -> green ."\n";
                echo $this -> blue ."\n";
            }else{
                sscanf($this -> color, '0,0,0');
            }
        }

    }

    $newRGB = new RGB('#4523af');
    "\n";
    "\n";
    "\n";
    "\n";
   



?>
