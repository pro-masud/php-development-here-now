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

 function inputOption($values, $newInputNow){
    $newSelect = '';
    foreach( $values as $value){
        if( in_array($value, $newInputNow)){
            $newSelect = "selected";
        }
        printf("<option value='%s' %s> %s </option>",strtolower($value), $newSelect, ucwords($value));
    }
 }

?>


