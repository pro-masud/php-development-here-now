<?php 

        function evenodd($numbers){
            if( $numbers % 2 == 0 ){
                return  true;
            }else {
                return false;
            }
        }

        $number = 19;

        if( evenodd($number)){
            echo"this is a " . $number . " Even Number";
        }else{
            echo"this is a " . $number . " Odd Number";
        }
       

?>