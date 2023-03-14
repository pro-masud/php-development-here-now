<?php 

    // // class Human{

    // //     public $name; 

    // //     function humanSay(){
    // //         echo "my name is masud rana {$this -> name}";
    // //     }
    // // }

    // // class Cut{
    // //     function catShy(){
    // //         echo "meow";
    // //     }
    // // }

    // // $humanObj = new Human();
    // // $humanObj -> name = "masud rana";
    // // $cutObj = new Cut();


    // // $humanPropartyGetData = $humanObj -> name;
    // // echo $humanPropartyGetData;
    // // // $cutObj -> catShy();


    // class RGB{
    //     private $color;
    //     private $red;
    //     private $green;
    //     private $blue;

    //     public function __construct($colorCode = '0'){

    //         $this -> color = ltrim($colorCode,"#");

    //         $this -> setColor($colorCode );
    //     }
    //     public function getColor(){
    //         return $this -> color;
    //     }

    //     public function getRGBColor(){
    //         return [$this->red, $this->green, $this->blue];
    //     }

    //     public function readRGBColor(){
    //         echo "Red : {$this -> red}\n Green : {$this -> green} \n Blue : {$this -> blue }";
    //     }

    //     public function setColor($colorCode){
    //         $this -> color = ltrim($colorCode,"#");
    //         $this -> parSeColor();
    //     }
    //     private function parSeColor(){

    //         if($this -> color){
    //             sscanf($this -> color, '%02x%02x%02x',$this->red, $this->green,$this->blue);
    //             "Red : ". $this -> red ."\n";
    //             "Green : ". $this -> green ."\n";
    //             "Blue : ". $this -> blue ."\n";
    //         }else{
    //             list($this->red, $this->green,$this->blue) = array(0,0,0);
    //             "Red : ". $this -> red ."\n";
    //             "Green : ". $this -> green ."\n";
    //             "Blue : ". $this -> blue ."\n";   
    //         }
    //     }

    //     public function red(){
    //         return $this -> red;
    //     }

    //     public function green(){
    //         return $this -> green;
    //     }

    //     public function blue(){
    //         return $this -> blue;
    //     }

    // }

    // $newRGB = new RGB('#ffcebd');

    // $newRGB -> readRGBColor();


    // class RGB{
    //     private $color;
    //     private $red;
    //     private $green;
    //     private $blue;

    //     public function __construct($colorCode = '0'){
    //         $this -> color = ltrim($colorCode,'#');

    //         $this -> setColor($colorCode);
    //     }

    //     public function getColor(){
    //         return [$this -> red, $this -> green, $this -> blue ];
    //     }
    //     public function readRGBColor(){
    //         echo "Red : {$this -> red}\nGreen : {$this -> green} \nBlue {$this -> blue}";
    //     }
    //    public function setColor($colorCode){
    //         $this -> color = ltrim($colorCode,'#');
    //         $this -> parseColor();
    //    }

    //    private function parseColor(){
    //         if( $this -> color){
    //             sscanf($this -> color, '%02x%02x%02x',$this -> red, $this -> green, $this -> blue);
    //             $this -> red;
    //             $this -> green;
    //             $this -> blue;
    //         }else{

    //         }
    //    }

    //    public function red(){
    //         return $this -> red;
    //    }

    //    public function green(){
    //         return $this -> green;
    //    }
    //    public function blue(){
    //         return $this -> blue;
    //    }
    // }


    // $newRGB = new RGB("#efffff");

    // $newRGB -> readRGBColor();

        /*  PHP OOP ColorCode convert To RGB Colorcode in this video here Okkay */


        // class RGB{

        //     private $color;
        //     private $red;
        //     private $green;
        //     private $blue;

        //     public function __construct( $colorCode = "0"){

        //         $this -> color = ltrim($colorCode,"#");
        //         $this -> setColorcode($colorCode);
        //     }


        //     public function getColor(){
        //         return $this -> color;
        //     }

        //     public function setColorcode($colorCode){

        //         $this -> color = ltrim($colorCode,"#");

        //         $this -> partSeColor();

        //     }

        //     private function partSeColor(){
        //         if( $this -> color ){
        //             sscanf($this -> color, '%02x %02x %02x', $this -> red, $this -> green, $this -> blue );
        //             echo "Red : " . $this -> red ."\n";
        //             echo "Green : " . $this -> green ."\n";
        //             echo "Blue : " . $this -> blue ."\n";
        //         }else{
        //             list($this -> red, $this -> green, $this -> blue ) = [0,0,0];

        //             echo "Red : " . $this -> red ."\n";
        //             echo "Green : " . $this -> green ."\n";
        //             echo "Blue : " . $this -> blue ."\n";
        //         }
        //     }
        // }

        // $newRGB = new RGB("#ffe2cr");


        // /* This program is successfully complete now */



        // class RGB{
        //     private $name;

        //     public function __construct($colorCode= '0'){
        //         $this -> color = ltrim($colorCode,)
        //     }
        // }
        class Shape{

        }
        class Shapes{
            private $shapes;

            public function __construct(){
                $this -> shapes = [];
            }

            public function addShape( Shape $shape){
                array_push( $this -> shapes, $shape );
            }

            public function totalShape(){
                return count( $this -> shapes );
            }
        }

        class Rectangle extends Shape{

        }

        class Triangle extends Shape{

        }

        class Student {
            
        }

        $newShapes = new Shapes();
        $newShapes -> addShape( new Rectangle());
        $newShapes -> addShape( new Triangle());
       // $newShapes -> addShape( new Student());

       echo  $newShapes -> totalShape();

?>
