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


    $filepath = "D:\\PHP\\work\\php development work\\class work\\class 7\\file\\data.txt";

    

        
    if( is_writable($filepath)){
        $fileRead = file_get_contents($filepath);
        $fileOpen = fopen( $filepath, 'a+');

        fwrite($fileOpen, $fileRead);
        echo "\n";
        echo "\n";
        echo "\n";
        fwrite($fileOpen, "Masud rana \n");
        fwrite($fileOpen, "PHP \n");
        fwrite($fileOpen, "WordPress \n");
    }


   fclose($fileOpen);

  










?>
