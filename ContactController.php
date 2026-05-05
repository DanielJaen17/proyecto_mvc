<?php
// Se incluye el modelo, que será el encargado de guardar los datos.
require_once __DIR__ . "/../models/ContactModel.php";

// Clase del controlador.
// Aquí se recibe la información del formulario y se decide qué vista mostrar.
class ContactController
{
    // Método principal del controlador.
    public function index()
    {
        // Variable para guardar un mensaje de error si la validación falla.
        $error = "";

        // Se verifica si el formulario fue enviado con el método POST.
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Se reciben los datos enviados desde el formulario.
            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];
            $telefono = $_POST["telefono"];
            $mensaje = $_POST["mensaje"];

            // Se valida que el mensaje tenga mínimo 10 caracteres.
            if (strlen($mensaje) < 10) {

                // Si el mensaje es muy corto, se guarda el mensaje de error.
                $error = "El mensaje debe tener mínimo 10 caracteres.";

                // Se vuelve a cargar el formulario para mostrar el error.
                require_once __DIR__ . "/../views/formulario.php";

            } else {

                // Se configura la zona horaria para registrar la fecha y hora de México.
                date_default_timezone_set("America/Mexico_City");

                // Se obtiene la fecha y hora actual del envío.
                $fechaHora = date("d/m/Y H:i:s");

                // Se crea un objeto del modelo.
                $modelo = new ContactModel();

                // Se envían los datos al modelo para guardarlos en el archivo .txt.
                $modelo->guardarDatos($nombre, $correo, $telefono, $mensaje, $fechaHora);

                // Se carga la vista de resultado para mostrar los datos enviados.
                require_once __DIR__ . "/../views/resultado.php";
            }

        } else {

            // Si todavía no se ha enviado el formulario,
            // se muestra la vista inicial del formulario.
            require_once __DIR__ . "/../views/formulario.php";
        }
    }
}
?>