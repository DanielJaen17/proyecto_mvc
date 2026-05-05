<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <!-- Título que aparece en la pestaña del navegador -->
    <title>Formulario MVC</title>

    <!-- Se conecta el archivo CSS para aplicar estilos al formulario -->
    <link rel="stylesheet" href="public/css/estilos.css">
</head>
<body>

<!-- Contenedor principal del formulario -->
<div class="contenedor">

    <!-- Título principal de la página -->
    <h1>Formulario de Contacto</h1>

    <!-- Si existe un error, se muestra en pantalla -->
    <?php if (!empty($error)) { ?>
        <div class="error">
            <?php echo $error; ?>
        </div>
    <?php } ?>

    <!-- Formulario que envía los datos mediante el método POST -->
    <form method="POST" action="index.php">

        <!-- Campo para capturar el nombre -->
        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <!-- Campo para capturar el correo electrónico -->
        <label>Correo:</label>
        <input type="email" name="correo" required>

        <!-- Campo agregado para capturar el teléfono -->
        <label>Teléfono:</label>
        <input type="text" name="telefono" required>

        <!-- Campo para capturar el mensaje -->
        <label>Mensaje:</label>
        <textarea name="mensaje" required></textarea>

        <!-- Botón que envía el formulario -->
        <button type="submit">Enviar</button>

    </form>

</div>

</body>
</html>