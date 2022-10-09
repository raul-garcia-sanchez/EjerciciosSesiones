<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudoku</title>
</head>
<body>

<table border="1">
    <form action="" method="POST">
        <?php
            if(!$_POST){
                $numsSudoku = numerosSudoku();
            }
            echo "<tr></tr>";
            for($fila=1;$fila<=9;$fila++){
                echo "<tr>\n";
                for($columna=1;$columna<=9;$columna++){
                    $numCasilla = "$fila$columna";
                    echo "<td>\n<select name='casilla$fila$columna' id='numSelect'>\n";
                    if(in_array($numCasilla,$numsSudoku)){
                        $numRandom = rand(1,9);
                        echo "<option selected> $numRandom</option>\n";
                    }
                    else{
                        echo "<option ></option>\n";
                    }
                    for($k=1;$k<10;$k++){
                        if($k == $_POST["casilla$fila$columna"]){
                            echo "<option selected >$k</option>\n";
                        }
                        else{
                            if(!in_array($numCasilla,$numsSudoku)){
                                echo "<option >$k</option>\n";
                            }
                        }
                    }
                    echo "</select>";
                    echo "</td>\n";
                    if($columna % 3 == 0){
                        echo "<td style='border:0px'></td>";
                    }
                    }
                    echo "</tr>";
                    if($fila % 3 == 0){
                        echo "<tr></tr><tr></tr>";
                    }
            }
            if($_POST){
                for($i = 1; $i < 10; $i++){
                    comprovarColumna($i);
                }
            }
            
            function numerosSudoku(){
                $numsSudoku = array();
                for($i = 0;$i < 31;$i++){
                    $filaRandom = rand(1,9);
                    $casillaRandom = rand(1,9);
                    $casilla = "$filaRandom$casillaRandom";
                    while(in_array($casilla,$numsSudoku)){
                        $filaRandom = rand(1,9);
                        $casillaRandom = rand(1,9);
                        $casilla = "$filaRandom$casillaRandom";
                    }
                    array_push($numsSudoku,$casilla);
                }
                return $numsSudoku;
            }

            function comprovarFila($filera){
                $arrayFilera = [];
                for($i = 1; $i < 10; $i++){
                    array_push($arrayFilera,$_POST["casilla$filera$i"]);
                }
                if(count($arrayFilera) == count(array_unique($arrayFilera))){
                    echo "Fila $filera bien";
                }
                else{
                    echo "Filera $filera mal";
                }
            }

            function comprovarColumna($columna){
                $arrayColumna = [];
                for($i = 1; $i < 10; $i++){
                    array_push($arrayColumna,$_POST["casilla$i$columna"]);
                }
                if(count($arrayColumna) == count(array_unique($arrayColumna))){
                    echo "Columna $columna bien";
                }
                else{
                    echo "Columna $columna mal";
                }
            }
        ?>
        <input type="submit">
    </form>
    <?php
        

    ?>
    

</table>



</body>
</html>