<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <!-- Título que aparece en la pestaña del navegador -->
    <title>Resultado</title>

    <!-- Se conecta el archivo CSS para mantener el mismo diseño -->
    <link rel="stylesheet" href="public/css/estilos.css">
</head>
<body>

<!-- Contenedor principal de la vista de resultado -->
<div class="contenedor">

    <!-- Mensaje principal después de enviar el formulario -->
    <h1>Datos enviados correctamente</h1>

    <!-- Caja donde se muestran los datos recibidos -->
    <div class="datos">

        <!-- Se muestra el nombre enviado.
             htmlspecialchars ayuda a mostrar texto de forma segura. -->
        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>

        <!-- Se muestra el correo enviado -->
        <p><strong>Correo:</strong> <?php echo htmlspecialchars($correo); ?></p>

        <!-- Se muestra el teléfono enviado -->
        <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($telefono); ?></p>

        <!-- Se muestra el mensaje enviado -->
        <p><strong>Mensaje:</strong> <?php echo htmlspecialchars($mensaje); ?></p>

        <!-- Se muestra la fecha y hora del envío -->
        <p><strong>Fecha y hora:</strong> <?php echo htmlspecialchars($fechaHora); ?></p>
    </div>

    <!-- Enlace para regresar al formulario y enviar otro mensaje -->
    <a href="index.php" class="boton-volver">Enviar otro mensaje</a>

</div>

</body>
</html>