<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <?php include 'header.php'; ?> <!-- Incluye el encabezado -->

    <h1>Formulario de Registro</h1>
    <form action="procesar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" name="correo" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="enviar" value="Enviar">
    </form>

    <a href="formulario.php">Regresar</a> <!-- Enlace para regresar a la página del formulario -->

    <?php include 'footer.php'; ?> <!-- Incluye el pie de página -->
</body>
</html>