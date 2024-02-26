<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intro php</title>
</head>
<body>
    <form action="text.php" method="GET" >
        <label for="nome">parola da censurare:</label><br>
        <input type="text" name="nome" id="nome" $parola><br>
        <label for="testo"> paragrafo </label><br>
        <textarea name="testo" id="testo" cols="30" rows="10"></textarea>
        <button type="submit">invia</button>
    </form>
</body>
</html>