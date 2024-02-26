<?php
$parola= $_GET["nome"];
$text= $_GET["testo"];
$censored= str_replace($parola, "***", $text );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>censored</title>
</head>
<body>
   
    <div>
        "<?php echo $text?>" <span> ha una lunghezza di: </span>  <?php echo strlen($text) ?>
    </div>

    <div>
        "<?php echo $censored ?>" <span> ha una lunghezza di: </span>  <?php echo strlen($text) ?>
    </div>

</body>
</html>