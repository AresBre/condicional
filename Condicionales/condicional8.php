<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $num3 = $_POST['numero3'];

        if ($num1 <= $num2 && $num1 <= $num3) {
            $min = $num1;
            if ($num2 <= $num3) {
                $medio = $num2;
                $max = $num3;
            } else {
                $medio = $num3;
                $max = $num2;
            }
        } else if ($num2 <= $num1 && $num2 <= $num3) {
            $min = $num2;
            if ($num1 <= $num3) {
                $medio = $num1;
                $max = $num3;
            } else {
                $medio = $num3;
                $max = $num1;
            }
        } else {
            $min = $num3;
            if ($num1 <= $num2) {
                $medio = $num1;
                $max = $num2;
            } else {
                $medio = $num2;
                $max = $num1;
            }
        }

        echo "Orden ascendente: $min, $medio, $max<br>";

        echo "Orden descendente: $max, $medio, $min";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h1>Orden Ascendente y Descendente</h1>
        <label for="numero1">Ingrese el primer número:</label><br>
        <input type="number" name="numero1"><br>
        <label for="numero2">Ingrese el segundo número:</label><br>
        <input type="number" name="numero2"><br>
        <label for="numero3">Ingrese el tercer número:</label><br>
        <input type="number" name="numero3"><br>
        <input type="submit" value="Ordenar">
    </form>
</body>
</html>

