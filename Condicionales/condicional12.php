<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cantidad = $_POST['cantidad'];
    $precio_unitario = $_POST['precio_unitario'];

    $total_pagar = 0;

    if ($cantidad <= 5) {
        $total_pagar = $cantidad * $precio_unitario;
    } elseif ($cantidad < 10) {
        $total_pagar = $cantidad * $precio_unitario * 0.95;
    } else {
        $total_pagar = $cantidad * $precio_unitario * 0.92;
    }

    echo "El total a pagar es: $total_pagar";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Precio Total</title>
</head>
<body>
    <h1>Calculadora de Precio Total</h1>
    <form action="" method="post">
        <label for="cantidad">Cantidad de articulos:</label>
        <input type="number" name="cantidad" id="cantidad" min="1" required><br>
        <label for="precio_unitario">Precio unitario:</label>
        <input type="number" name="precio_unitario" id="precio_unitario" min="0.01" step="0.01" required><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>