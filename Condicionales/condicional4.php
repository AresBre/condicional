<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];

        if ($num1 == $num2) {
            echo "Los números son iguales: $num1";
        } else if ($num1 > $num2) {
            echo "El número mayor es: $num1<br>";
            echo "El número menor es: $num2";
        } else {
            echo "El número mayor es: $num2<br>";
            echo "El número menor es: $num1";
        }
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
        <h1>Mayor o Menor</h1>
        <label for="numero1">Ingrese el primer número:</label>
        <input type="number" name="numero1"><br>
        <label for="numero2">Ingrese el segundo número:</label>
        <input type="number" name="numero2"><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
