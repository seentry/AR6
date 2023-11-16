<!DOCTYPE html>
<html>
<head>
    <title>Ej1</title>
</head>
<body>
    <h1>Ej1</h1>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
$puntos = [];

function calculaPuntos($puntos){

    $ganados = 3;
    $empate = 1;
    $perdido = 0;
    $g = $ganados * $_POST["g"];
    $p = $perdido + $_POST["p"];
    $e = $empate + $_POST["e"];
    $total = $g + $p + $e;
    array_push ($puntos, $total);
    return $puntos;
} 

    $resultado = calculaPuntos($puntos);
    var_dump($resultado);

}

?>

<form method="POST" action="">
    <label for="g">Ganados: </label>
    <input type="number" id="g" name="g">
    <br>
    <label for="p">Perdidos: </label>
    <input type="number" id="p" name="p">
    <br>
    <label for="e">Empatados: </label>
    <input type="number" id="e" name="e">
    <br>
    <input type="submit" value="Calcular">
</form>
</body>
</html>
