<?php
$area1 = "";

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['figura'])){
    $figura = $_POST['figura'];

    if ($figura == "triangulo") {
        echo "<form action='' method='post'>";
        echo "<label for='base'>Ingrese la base del triángulo:</label>";
        echo "<input type='number' name='base' id='base' required><br>";
        echo "<label for='altura'>Ingrese la altura del triángulo:</label>";
        echo "<input type='number' name='altura' id='altura' required><br>";
        echo "<input type='submit' value='Calcular Área'>";
        echo "</form>";

        if(isset($_POST['base']) && isset($_POST['altura'])){
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            $area = ($base * $altura) / 2;
            echo "El área del triángulo es: $area";
        }
    } elseif ($figura == "cuadrado") {
        echo "<form action='' method='post'>";
        echo "<label for='lado'>Ingrese el lado del cuadrado:</label>";
        echo "<input type='number' name='lado' id='lado' required><br>";
        echo "<input type='submit' value='Calcular Área'>";
        echo "</form>";

        if(isset($_POST['lado'])){
            $lado = $_POST['lado'];
            $area = $lado * $lado;
            echo "El área del cuadrado es: $area";
        }
    } elseif ($figura == "rectangulo") {
        echo "<form action='' method='post'>";
        echo "<label for='base'>Ingrese la base del rectángulo:</label>";
        echo "<input type='number' name='base' id='base' required><br>";
        echo "<label for='altura'>Ingrese la altura del rectángulo:</label>";
        echo "<input type='number' name='altura' id='altura' required><br>";
        echo "<input type='submit' value='Calcular Área'>";
        echo "</form>";

        if(isset($_POST['base']) && isset($_POST['altura'])){
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            $area = $base * $altura;
            echo "El área del rectángulo es: $area";
        }
    } elseif ($figura == "rombo") {
        echo "<form action='' method='post'>";
        echo "<label for='A'>Ingrese el lado A:</label>";
        echo "<input type='number' name='A' id='base' required><br>";
        echo "<label for='base'>Ingrese el lado C:</label>";
        echo "<input type='number' name='C' id='base' required><br>";
        echo "<label for='base'>Ingrese el lado D:</label>";
        echo "<input type='number' name='D' id='base' required><br>";
        echo "<label for='altura'>Ingrese el lado B:</label>";
        echo "<input type='number' name='B' id='altura' required><br>";
        echo "<input type='submit' value='Calcular Área'>";
        echo "</form>";

        if(isset($_POST['A']) && isset($_POST['C']) && isset($_POST['D']) && isset($_POST['B'])){
            $A = $_POST['A'];
            $C = $_POST['C'];
            $D = $_POST['D'];
            $B = $_POST['B'];

            $area1 = $A + $C * $B + $D / 2;
            echo "El área del rombo es: $area1";
        }
    } elseif ($figura == "trapecio") {
        // Código para calcular el área del trapecio
    } elseif ($figura == "triangulo_equilatero") {
        // Código para calcular el área del triángulo equilátero
    } elseif ($figura == "triangulo_rectangulo") {
        // Código para calcular el área del triángulo rectángulo
    } elseif ($figura == "poligono_regular") {
        // Código para calcular el área del polígono regular
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Áreas</title>
</head>
<body>
    <h1>Calculadora de Áreas</h1>
    <form action="" method="post">
        <label for="figura">Seleccione la figura geométrica:</label>
        <select name="figura" id="figura">
            <option value="triangulo">Triángulo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="rectangulo">Rectángulo</option>
            <option value="rombo">Rombo</option>
            <option value="trapecio">Trapecio</option>
            <option value="triangulo_equilatero">Triángulo Equilátero</option>
            <option value="triangulo_rectangulo">Triángulo Rectángulo</option>
            <option value="poligono_regular">Polígono Regular</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>