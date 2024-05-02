<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $tamano = $_POST['option'];
    $adicion = $_POST['adic'];

    $precios = array(
        1 => 15000,
        2 => 24000,
        3 => 36000
    );

    if(isset($tamano) && isset($adicion)){
        $respuesta1 = $adicion * 4000;
        $precio_total = $precios[$tamano] + $respuesta1;

        echo "La respuesta es: $precio_total";
    } else {
        echo "Falta tamaño o adicion";
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
    <form action="" method="post">
        <h1>Piezas de Carro</h1>
        <label for="">Tamaño de la pieza: </label>
        <select name="option" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select> <br>
        <label for="">Ingrediente adicionales: </label>
        <input type="text" name="adic">
        <input type="submit">
    </form>
</body>
</html>