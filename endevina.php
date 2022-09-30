<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina3</title>
</head>
<body>
    <h1>ENDEVINA EL NOMBRE</h1>

    <?php
    session_start();
    if(!isset($_GET["endevina"])){
        $numRandom = rand(1,100);
        $_SESSION['ocult'] = $numRandom;
        ?> 
        <form action="">
            <input type="number" name="endevina">
            <input type="submit">
        </form>

        <?php
    }
    else{
        if($_SESSION["ocult"]> $_GET["endevina"]){
            echo "<p> Numero a endivinar es major</p>";
            ?>
            <form action="">
                <input type="number" name="endevina">
                <input type="submit">
            </form>
            <?php
        }
        else if($_SESSION["ocult"]< $_GET["endevina"]){
            echo "<p> Numero a endivinar es menor</p>";
            ?>
            <form action="">
                <input type="number" name="endevina">
                <input type="submit">
            </form>
            <?php
        }
        else{
            echo "<p> Numero endevinat!!!!</a><br><br>";
            echo "<a href='endevina.php'>Torna a jugar</a>";
        }
    }
    ?>


    

    
</body>
</html>