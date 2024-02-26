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
    <title>Document</title>
</head>
<body>
    <h3>
        <?php echo $parola ?>       
    </h3>
    <p>
        <?php echo $text ?>
    </p>
    <p>
    <?php echo $censored ?>
    </p>
</body>
</html>