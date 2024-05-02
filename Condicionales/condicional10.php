<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $llantas = $_POST['llantas'];

        $valo1 = 240000;
        $valor2 = 221000;
        $valor3 = 180000;

        if ($llantas < 6) {
            $resultado1 = $llantas * $valo1;
            echo "El valor final es: $resultado1";
        } else if ($llantas >= 6 && $llantas <= 7) {
            $resultado2 = $llantas * $valor2;
            echo "El valor final es: $resultado2";
        } else if ($llantas > 7){
            $resultado3 = $llantas * $valor3;
            echo "El valor final es: $resultado3";
        } else{
            mmmmmm;
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
        <h1>Llantas</h1>
        <label for="">Cantidad de Llantas: </label>
        <input type="text" name="llantas">
    </form>
</body>
</html>