<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario con POST</title>
</head>
<body>

    <h1>Formulario de contacto</h1>


    <form method="POST" action="contacto.php">
        <label>Nombre:</label><br>
        <input type="text" name="nombre"><br><br>

        <label>Correo electrónico:</label><br>
        <input type="email" name="correo"><br><br>

        <input type="submit" value="Enviar">
    </form>

    <br>

    <?php
    // Recepción de datos enviados por el método POST
    if (isset($_POST["nombre"]) && isset($_POST["correo"])) {
        echo "<h3>Datos enviados:</h3>";
        echo "Nombre: " . $_POST["nombre"] . "<br>";
        echo "Correo: " . $_POST["correo"];
    }
    ?>

    <hr>

    <a href="index.php">Volver a la página principal</a>

</body>
</html>