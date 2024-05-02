<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];

        if($edad >= 18){
            echo "Señor $nombre tiene $edad años, por lo cual es mayor de edad";
        } else if ($edad < 18 && $edad >= 0){
            echo "Niño $nombre tiene $edad años, por lo cual es menor de edad";
        } else if($edad > 100){
            echo "Edad ingresada inválida";
        } else {
            echo "Edad ingresada inválida";
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
        <h1>Edades</h1>
        <label for="">Escriba su Nombre:</label>
        <input type="text" name="nombre"> <br>
        <label for="">Escriba su Edad: </label>
        <input type="number" name="edad">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>