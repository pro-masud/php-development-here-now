<?php


// for( $i = $n - 0; $i >= 0; $i--){
//     //     echo $namberJi [$i]."\n";
//     // }

//     // // for( $i = 0; $i >= 0; $i--){
//     // //     echo $namberJi[$i];
//     // // }
//     // $fols = ['alo','potol','mango','lemon','dalim','piyara','anaros','licho','boroi'];
//     // $namberJi = [1,2,3,4,5,6,7,8,9];

//     // $allArrayCount = count($fols);
//     // $n = count($namberJi);

 // $shift_array = array_shift($folsass,'b');
    // print_r(  $folsass );
    // print_r(  $shift_array ) ;
   
    $fols = ['alo','potol','mango','lemon','dalim','piyara','anaros','licho','boroi'];
    $namberJi = [1,2,3,4,5,6,7,8,9];
    $folsass = [
        'a' => 'alo',
        'b' => 'potol',
        'c' => 'mango',
        'd' => 'lemon',
        'e' => 'dalim',
        'f' => 'piyara',
        'g' => 'anaros',
        'h' => 'licho',
        'i' => 'boroi'
    ];

    // foreach( $folsass as $key=>$value ){

    //     echo $value . " = " > $key ;
    // }

    $key_array = array_keys($folsass);
    $key_count = count($folsass);
    
    for( $i = 0; $i <= $key_count; $i++){
        $key_array_is = $key_array[$i];
        echo $key_array_is. "\n";
    }
    
   

