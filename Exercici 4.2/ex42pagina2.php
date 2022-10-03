<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>

    <h1>ENREGISTA FRASE 2</h1>
    <form action="ex42pagina3.php">
        <input name="frase2" type="text">
        <input type="submit">
    </form>

    <?php
        session_start();
        $_SESSION["frase1"] = $_GET["frase1"];
    ?>
    
</body>
</html>