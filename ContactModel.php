<?php
// Clase del modelo.
// Su función es manejar el guardado de datos.
class ContactModel
{
    // Método que recibe los datos del formulario y los guarda en un archivo .txt.
    public function guardarDatos($nombre, $correo, $telefono, $mensaje, $fechaHora)
    {
        // Ruta donde se guardará el archivo contactos.txt.
        // __DIR__ permite ubicar correctamente la carpeta data.
        $archivo = __DIR__ . "/../data/contactos.txt";

        // Se arma el contenido que se guardará dentro del archivo.
        $contenido = "Nombre: " . $nombre . "\n";
        $contenido .= "Correo: " . $correo . "\n";
        $contenido .= "Teléfono: " . $telefono . "\n";
        $contenido .= "Mensaje: " . $mensaje . "\n";
        $contenido .= "Fecha y hora: " . $fechaHora . "\n";
        $contenido .= "-----------------------------\n";

        // Se guarda la información en el archivo.
        // FILE_APPEND evita que se borren los registros anteriores.
        file_put_contents($archivo, $contenido, FILE_APPEND);
    }
}
?>