<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Navegación con GET</title>
</head>
<body>

    <h1>Página principal</h1>

    <p>Seleccione una sección:</p>

    <a href="index.php?seccion=Inicio">Inicio</a> |
    <a href="index.php?seccion=Unidades">Unidades</a> |
    <a href="index.php?seccion=Contacto">Contacto</a>

    <br><br>

    <?php
    // Recepción de datos enviados por el método GET
    if (isset($_GET["seccion"])) {
        echo "Sección seleccionada: <strong>" . $_GET["seccion"] . "</strong>";
    } else {
        echo "No se ha seleccionado ninguna sección.";
    }
    ?>

    <hr>

    <a href="contacto.php">Ir al formulario de contacto</a>

</body>
</html>