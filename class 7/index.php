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

    $filepath = "D:\\PHP\\work\\php development work\\class work\\class 7\\file\\data.txt";

    $fullContent = file_get_contents($filepath);

    print_r($fullContent);

   










?>
