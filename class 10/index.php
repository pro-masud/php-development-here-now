<?php 

    // $filepath = "D:\\PHP\\work\\php development work\\class work\\class 7\\file\\data.txt";

    // $fileopen = fopen($filepath, 'r');
    
     
    // while($line = fgets($fileopen) ){
    //     echo $line;
    // }

    // fclose($fileopen);

    // One function file all read data here now
    // $fullContent = file($filepath);
    // print_r($fullContent);

    // $fullContent = file_get_contents($filepath);
    // print_r($fullContent);


//     $filepath = "D:\\PHP\\work\\php development work\\class work\\class 7\\file\\data.txt";

//     $fileRead = file_get_contents($filepath);

//    $fileOpen = fopen( $filepath, 'a');

//    fwrite($fileOpen, $fileRead);
//    echo "\n";
//    echo "\n";
//    echo "\n";
//    fwrite($fileOpen, "Masud rana \n");
//    fwrite($fileOpen, "PHP \n");
//    fwrite($fileOpen, "WordPress \n");


//    fclose($fileOpen);


// w || write mode system here code now
// if( is_writable($filepath)){
//     $fileRead = file_get_contents($filepath);
//     $fileOpen = fopen( $filepath, 'w');

//     fwrite($fileOpen, $fileRead);
//     echo "\n";
//     echo "\n";
//     echo "\n";
//     fwrite($fileOpen, "Masud rana \n");
//     fwrite($fileOpen, "PHP \n");
//     fwrite($fileOpen, "WordPress \n");
// }

// a || append mode system here code now
// if( is_writable($filepath)){
//     $fileRead = file_get_contents($filepath);
//     $fileOpen = fopen( $filepath, 'w');

//     fwrite($fileOpen, $fileRead);
//     echo "\n";
//     echo "\n";
//     echo "\n";
//     fwrite($fileOpen, "Masud rana \n");
//     fwrite($fileOpen, "PHP \n");
//     fwrite($fileOpen, "WordPress \n");
// }


//     $filepath = "D:\\PHP\\work\\php development work\\class work\\class 7\\file\\data.txt";

    

        
//     if( is_writable($filepath)){
//         $fileRead = file_get_contents($filepath);
//         $fileOpen = fopen( $filepath, 'a+');

//         fwrite($fileOpen, $fileRead);
//         echo "\n";
//         echo "\n";
//         echo "\n";
//         fwrite($fileOpen, "Masud rana \n");
//         fwrite($fileOpen, "PHP \n");
//         fwrite($fileOpen, "WordPress \n");
//     }


//    fclose($fileOpen);


//  $StartTime = microtime(true);
  
//     factorialNumber(100);

//  $endTime = microtime(true);

//  $excuationTime = $endTime  - $StartTime;

//  printf("%10.8f", $excuationTime);

// function factorialNumber($n){

//     $result = 1;
//     for($i = 1; $i<= $n; $i++){
//         $result *= $i;
//     }

//     return $result;
// }


// $startTime = microtime(true);

//     filterTitle(100);

// $endTime = microtime(true);

// $excuationTime = $endTime - $startTime;

// printf("%10.8f",$excuationTime);

// function filterTitle($number){
//     $result = 1;
//     for( $i = 1; $i<$number; $i++ ){
//         $result *= $i;
//     }
//     return $result;
// }
    


    // /* PHP Counting 100 Number Count How Many Time Now */


    // $startTime = microtime(true);
    //     exTime(100);
    // $endTime = microtime(true);

    // $excuationTime = $endTime - $startTime;

    // printf("%10.8f", $excuationTime);


    // function exTime($number){
    //     $result = 1;

    //     for ( $i = 1; $i <= $number; $i++ ){
    //         $result *= $i;
    //     }

    //     return $result;
    // }


    // /* This number php excuation time to excut  0.00001001 and 100 number excuate time */


        /* Time Object niye joto kaj amader ai khane */

        // // 20 01 23
        // echo date('d m, y') . "\n";

        //  // 20 01 2023
        //  echo date('d m, Y') . "\n";

        //  // 20 march 2023
        // echo date('d M, Y') . "\n";

        //  // 20 march 2023
        //  echo date('d F, Y') . "\n";

        //  // 20 march 2023 time : 09:37:39
        //  echo date('dS F, Y h:i:s' ) . "\n";

        //  // 20 march 2023 time : 09:37:39
        //  echo date('dS F, Y h:i:s A' ) . "\n";

        //  // 20 march 2023 time : 09:37:39
        //  echo date('z' ) . "\n";


        echo $now =  time() . "\n";

        echo $pass = mktime(0,0,0,12,05,2001) . "\n";

       date_default_timezone_set('Asia/Dhaka') ."\n";

       echo mktime(0,0,0,12,03,2022) ."\n";

       echo gmmktime(0,0,0,12,2018) ."\n";

       echo (22400 - 800 ) / ( 60 * 60 ) ."\n";



?>
