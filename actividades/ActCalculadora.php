<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento vacío</title>
</head>
<body>
    <h1>Calculadora de suma</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        Valor 1:<input type="number" name="valor1" /><br />
        Valor 2:<input type="number" name="valor2" /><br />
        <input type="submit" value="Calcular">
    </form>
</body>
</html>