<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php delopment</title>
</head>
<body>

<?php 


// $pro = <<<EOD
// Lorem ipsum dolor sit amet consectetur \n adipisicing elit. Sint laborum rerum,\n consequatur voluptatibus mollitia\n illum eius voluptatem. Sed, debitis velit.
// EOD;

// $newString = substr($pro, 6, 100);
// echo $newString;

    $string = "Lorem ipsum dolor Dolor sit amet consectetur  adipisicing elit. Sint laborum rerum, consequatur voluptatibus mollitia illum eius voluptatem. Sed";

    $newString = str_ireplace('dolor','Red',$string);
    echo $newString;


?>

    
</body>
</html>