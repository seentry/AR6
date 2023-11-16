<!DOCTYPE html>
<html>
<head>
    <title>Ej3</title>
</head>
<body>
    <h1>Ej3</h1>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rango = [$_POST["inicio"], $_POST["fin"]];
    

function calculaSuma($rango) {
    $suma = 0;


    for ($i = $rango[0]; $i <= $rango[1]; $i++) {
        if ($i % 2 == 0) {
            $suma += $i;
        }
    }
    return $suma;
}
$resultado = calculaSuma($rango);
var_dump($resultado);
}
?>

<form method="POST" action="">
        <label for="inicio">Inicio: </label>
        <input type="number" id="inicio" name="inicio">
        <br>
        <label for="fin">Fin: </label>
        <input type="number" id="fin" name="fin">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
