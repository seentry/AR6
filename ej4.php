<!DOCTYPE html>
<html>
<head>
    <title>Ej4</title>
</head>
<body>
    <h1>Ej4</h1>
<?php

$pro = [10,55,43.99,12.50];
$desc = [0,10,5,15];

function preFinal ($pro, $desc) {
    $proDesc = [];
    for ($i = 0; $i < count($pro); $i++) {
        $op1 = $pro[$i] * $desc[$i];
        $op2 = $op1 / 100;
        $op3 = $pro[$i] - $op2;
        $iv1 = $op3 * 0.21;
        $iv2 = $op3 + $iv1;
        array_push($proDesc, $iv2);
    }
    return $proDesc;
}

$resultadoFin = preFinal($pro, $desc);
echo "El precio de los productos con el descuento y el IVA aplicado es ";
echo implode(' | ', $resultadoFin);
?>
</body>
</html>
