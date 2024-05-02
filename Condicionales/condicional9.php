<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $valor = $_POST['valor'];

        if($valor < 150000){
            echo "Seria $valor y tienes que pagar con efectivo";
        } else if($valor >= 150000 && $valor <= 300000){
            echo "Seria $valor y tienes que pagar con dinero electronico";
        } else if($valor > 300000 && $valor <= 600000){
            echo "Seria $valor y tienes que pagar con targeta de credito";
        } else{
            echo "m";
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
        <h1>Metodo de Pago</h1>
        <label for="">Precio: </label>
        <input type="text" name="valor">
    </form>
</body>
</html>