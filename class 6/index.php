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


$pro = <<<EOD
Lorem ipsum dolor sit amet consectetur \n adipisicing elit. Sint laborum rerum,\n consequatur voluptatibus mollitia\n illum eius voluptatem. Sed, debitis velit.
EOD;

$convertbr = nl2br($pro);
echo $convertbr;
?>

    
</body>
</html>