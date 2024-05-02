<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];
        $nota5 = $_POST['nota5'];

        $promedio = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;

        if ($promedio >= 3.0) {
            echo "Aprobó con un promedio de: $promedio";
        } else {
            echo "No aprobó con un promedio de: $promedio";
        }
    }
?>

<form method="post">
    <h1>Promedio Nota</h1>
    <label for="nota1">Nota 1:</label>
    <input type="number" name="nota1" min="0" max="5" step="0.1"><br>
    <label for="nota2">Nota 2:</label>
    <input type="number" name="nota2" min="0" max="5" step="0.1"><br>
    <label for="nota3">Nota 3:</label>
    <input type="number" name="nota3" min="0" max="5" step="0.1"><br>
    <label for="nota4">Nota 4:</label>
    <input type="number" name="nota4" min="0" max="5" step="0.1"><br>
    <label for="nota5">Nota 5:</label>
    <input type="number" name="nota5" min="0" max="5" step="0.1"><br><br>
    <input type="submit" value="Calcular Promedio">
</form>