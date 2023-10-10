<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Procesando Datos</title>
</head>
<body>
    <?php include 'header.php'; ?> <!-- Incluye el encabezado -->

    <h1>Datos del Formulario</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $correo = $_POST["correo"];
        $password = $_POST["password"];

        echo "<p>Nombre: $nombre</p>";
        echo "<p>Edad: $edad</p>";
        echo "<p>Correo Electrónico: $correo</p>";
        echo "<p>Contraseña: $password</p>";
    }
    ?>

    <form action="formulario.php">
        <input type="submit" value="Volver al Formulario">
    </form>

    <?php include 'footer.php'; ?> <!-- Incluye el pie de página -->
</body>
</html>