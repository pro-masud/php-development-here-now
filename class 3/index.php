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


    
    // foreach( $folsass as $key=>$value ){

    //     echo $value . " = " > $key ;
    // }

    // $key_array = array_keys($folsass);
    // $key_count = count($folsass);
    
    // for( $i = 0; $i <= $key_count; $i++){
    //     $key_array_is = $key_array[$i];
    //     echo $key_array_is. "\n";
    // }

    // $folsass['j']  = "ami j k tmr ";
    

    // print_r( $folsass); 
   
//     $fols = ['alo','potol','mango','lemon','dalim','piyara','anaros','licho','boroi'];
//     $namberJi = [1,2,3,4,5,6,7,8,9];
//     $faolsass = [
//         'a' => 'alo',
//         'b' => 'potol',
//         'c' => 'mango',
//         'd' => 'lemon',
//         'e' => 'dalim',
//         'f' => 'piyara',
//         'g' => 'anaros',
//         'h' => 'licho',
//         'i' => 'boroi'
//     ];

    
//    $faolsass['m'] = ['j','pro','hihi'];

//    print_r($faolsass);

    // $undertext = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi, est veritatis ipsa molestias ea porro unde corporis quaerat inventore qui.";

    // $convertText = explode(',',$undertext);
    //  $joinText = $convertText;

    //  $underTextJoin = join(',',$joinText);

    //  print_r($convertText)."\n";
    //  print_r($underTextJoin);

    // print_r($family['father']['name']) ."\n";
        // print_r($family['father']['age']) ."\n";
        // // outpur array data here now
        // print_r($family);
        // echo $family['father']['name'] . " " . $family['father']['age']. "\n";

        // printf("%s %s", $family['father']['name'], $family['father']['age']);

        // php serialize data system here now
        //$newConverData = serialize($family);
        // $newConverData = json_encode($family);
        // echo $newConverData;
        // $newConverDataPro = json_decode($newConverData);

        // echo $newConverDataPro;

        // remove a array value in unset function here now
        // unset($family['Me']);
        // print_r($family);


        // $family = [
        //     "father"    => [
        //                         'name' => 'mannan',
        //                         'age' => 58,
        //                         'address' => 'pahargon',
        //                         'persion Address' => 'haripur'],
        //     "mother"    => [
        //                         'name' => 'josnara',
        //                         'age'  => 46,
        //                         'address' => 'pahargon',
        //                         'old' => 'haripur'],
        //     "Me"        => [
        //                         'name' => 'masud',
        //                         'age' => 21,
        //                         'address' =>  'parhargon',
        //                         'old address' => 'haripur'
        //                     ]

        // ];

         // $newArray = array_splice($fols,2);
        // $newArrayfive = array_splice($fols,0);

        // print_r($newArray);
        // print_r($newArrayfive);

        // // print_r($fols);

        
        // $namberJi = [1,2,3,4,5,6,7,8,9];
        
        //  $newArray = array_slice($fols,2);
        //  $newArrayfive = array_splice($fols,0);

        //  //$newmers = array_merge($newArray, $namberJi);
        //     $allArray = $newArray + $namberJi;
        //  print_r($allArray);
        
         
           

          //  if( isset( $name )){
          //       echo"my name is {$name}";
          //  }else{
          //       echo"it's Not my Name Okkay ? ";
          //  }

          // $arrayOne = ['alo','potol','law'];
          // $arrayTwo = ['dim','kola','murgi'];
          // $arrayThree   = ['gosto','ruti','prodeveloper'];


        $fols = ['alo','potol','mango','lemon',
        'b' => 'dalim','piyara','anaros','licho','boroi'];

        if( key_exists('b',$fols)){
            echo "This value is exists Here";
        }else{
            echo "This value is Not exists Here";
        }