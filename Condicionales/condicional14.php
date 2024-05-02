<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];

    if ($genero == 1) {
        $pulsaciones = (220 - $edad) / 10;
    } elseif ($genero == 2) {
        $pulsaciones = (210 - $edad) / 10;
    } else {
        $pulsaciones = 'Genero no valido';
    }

    echo "El numero de pulsaciones es: $pulsaciones por cada 10 segundos";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Pulsaciones</title>
</head>
<body>
    <h1>Calculadora de Pulsaciones</h1>
    <form action="" method="post">
        <label for="edad">Edad (años):</label>
        <input type="number" name="edad" id="edad" min="1" required><br>
        <label for="genero">Genero:</label>
        <select name="genero" id="genero" required>
            <option value="1">Femenino</option>
            <option value="2">Masculino</option>
        </select><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>