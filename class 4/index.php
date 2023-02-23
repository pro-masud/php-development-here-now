<?php include_once"function.php"; 

$fols = ['alo','potol','mango','lemon','dalim','piyara','anaros','licho','boroi'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Development Class 4 within milligram CSS Framework</title>

    <!-- Milligram Css framework installing here now -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        .checkboxs label{
            margin-left: 10px;
        }
        .our_form input{
            display:block;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="column column-50 column-offset-20">
            <h2>Contact Form</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem repellendus iste cum nihil molestias eveniet dignissimos similique, blanditiis sapiente debitis.</p>

            <p>
                <?php 
                    $name = '';
                    $pass = '';
                    $checked = '';
                    // input user name here now
                    if(isset($_REQUEST['fname']) && $_REQUEST['fname'] != ''){
                            $name = htmlspecialchars( $_REQUEST['fname']); 
                        }
                    // input password dynamic here now
                    if(isset($_REQUEST['pass']) && $_REQUEST['pass'] != ''){
                                $pass = htmlspecialchars($_REQUEST['pass']); 
                            }
                    
                    //input checkbox dynamic here now
                    if(isset($_REQUEST['cb1']) && $_REQUEST['cb1'] = 1 ){
                                $checked = "checked";
                        }

                    // select and option dynamic here now
                    if(isset($_POST['opens']) && $_POST['opens']  !== ''){
                        $optionOurPut = printf("Fols Select Now : %s ", htmlspecialchars($_POST['opens']));
                    }
                ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="column column-50 column-offset-20">
            <div class="our_form">
                <form action="" method="POST">
                    <fieldset>
                        <label for="fname">Frist Name</label>
                        <input name="fname" type="text" id="fname" value="<?php echo $name ; ?>">
                        <label for="fass">Password</label>
                        <input name="pass" type="text" id="fass" value="<?php echo $pass ; ?>">
                        <label for="fass">Chose One Now</label>
                        <select name="opens" id="opensn">
                            <option value="" selected> Select Now</option>
                            <?php  inputOption($fols); ?>
                        </select>
                        <input name="submit" class="button-primary" type="submit" value="Send">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
                
    

</body>
</html>