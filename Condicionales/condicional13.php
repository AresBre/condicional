<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $peso = $_POST['peso'];
    $estatura = $_POST['estatura'];

    $imc = $peso / ($estatura * $estatura);

    $estado = '';
    
    if ($imc < 18.5) {
        $estado = 'Desnutrido';
    } elseif ($imc >= 18.5 && $imc < 25) {
        $estado = 'Normal';
    } elseif ($imc >= 25 && $imc < 30) {
        $estado = 'Sobrepeso';
    } elseif ($imc >= 30 && $imc < 35) {
        $estado = 'Obesidad Grado 1';
    } elseif ($imc >= 35 && $imc < 40) {
        $estado = 'Obesidad Grado 2';
    } elseif ($imc >= 40 && $imc < 50) {
        $estado = 'Obesidad Grado 3';
    } else {
        $estado = 'Obesidad Grado 4';
    }

    echo "Su IMC es: $imc <br>";
    echo "Su estado es: $estado";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form action="" method="post">
        <label for="peso">Peso (Kg):</label>
        <input type="number" name="peso" id="peso" min="1" required><br>
        <label for="estatura">Estatura (metros):</label>
        <input type="number" name="estatura" id="estatura" min="0.01" step="0.01" required><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>