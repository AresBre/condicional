<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $num = $_POST['numero'];

        if($num > 0){
            echo "El numero $num es positivo";
        } else if($num == 0){
            echo "El numero es cero";
        } else{
            echo "El numero es negativo";
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
        <h1>Positivos o Negativo</h1>
        <label for="">Escriba un número</label>
        <input type="text" name="numero">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>