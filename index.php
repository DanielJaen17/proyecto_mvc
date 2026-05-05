<?php
// Activa la visualización de errores de PHP.
// Esto ayuda a detectar problemas durante el desarrollo.
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Se incluye el controlador principal del formulario.
// __DIR__ ayuda a tomar la ruta correcta del archivo actual.
require_once __DIR__ . "/controllers/ContactController.php";

// Se crea un objeto del controlador.
$controller = new ContactController();

// Se ejecuta el método principal que controla la página.
$controller->index();
?>