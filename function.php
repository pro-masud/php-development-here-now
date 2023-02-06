<?php 

// function oddEven(int $numbers){
//     if($numbers % 2 == 0){
//         return true;
//     }else{
//         return false;
//     }
// }

function factorial($num){
    $rasult = 1;
    for($i = $num; $i > 1; $i--){
        $rasult *= $i;
    }
   return $rasult;
}





?>