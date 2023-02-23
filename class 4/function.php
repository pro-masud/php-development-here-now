<?php 

 function inputCheck($inputCheck, $value){
    if(isset($_REQUEST[$inputCheck]) && is_array($_REQUEST[$inputCheck]) && in_array($value, $_REQUEST[$inputCheck])){
        echo "checked";
    }
 }

 function isInputCheck($value){
    if(isset($_REQUEST['checkbox']) && is_array($_REQUEST['checkbox']) && in_array($value, $_REQUEST['checkbox'])){
        echo "checked";
    }
 }

 function inputOption($values){
    foreach( $values as $value){
        printf("<option value'%s'>%s</option>",strtolower($value),ucwords($value));
    }
 }

?>


