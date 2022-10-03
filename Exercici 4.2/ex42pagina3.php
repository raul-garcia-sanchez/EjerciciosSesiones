<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina3</title>
</head>
<body>
    <h1>COINCIDÈNCIES</h1>
    <a href="ex42pagina1.php">Tornar enrere</a><br><br>

    <?php
    session_start();
    $arrayFrase1 = explode(" ",$_SESSION["frase1"]);
    $arrayFrase2 = explode(" ",$_GET["frase2"]);
    $palabraRepetida = false;

    foreach($arrayFrase1 as $word){
        if(in_array($word,$arrayFrase2)){
            echo "<p>La paraula <strong>$word</strong> està a les dues frases<p>\n";
            echo "<br>";
            $palabraRepetida = true;
        }
    }

    if(!$palabraRepetida){
        echo "<p>No hi ha cap coincidència</p>";
    }


    ?>

</body>
</html>