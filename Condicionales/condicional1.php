<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $num = $_POST['numero'];

        if($num == 0){
            echo "El número es cero";
        } else if($num % 2 == 0){
            echo "El número $num es par";
        } else{
            echo "El número $num es impar";
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
    <form method="POST" action="">
        <h1>Pares o Impares</h1>
        <label for="">Escriba un número</label>
        <input type="number" name="numero">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
