<?php
// Credenciales de usuario y contraseña esperadas
$expected_user = 'admin';
$expected_pass = 'Muysec123*';
 
// Verifica si el servidor ha recibido una petición POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar usuario y contraseña de la petición POST
    $username = isset($_POST['user']) ? $_POST['user'] : '';
    $password = isset($_POST['pass']) ? $_POST['pass'] : '';
 
    // Comprueba si las credenciales son correctas
    if ($username === $expected_user && $password === 'Muysec123*') {
        // Define el nombre del archivo donde se guardará el mensaje
        $filename = "flag.txt";
        // Define el mensaje a guardar
        $message = "Well Done";
 
        // Intenta crear o sobrescribir el archivo con el mensaje
        if (file_put_contents($filename, $message) !== false) {
            echo "Archivo creado con éxito.";
        } else {
            echo "Error al crear el archivo.";
        }
    } else {
        // Si las credenciales no son correctas, muestra un mensaje de error
        echo "Error: necesita un usuario y contraseña válidos.";
    }
} else {
    // Si no es una petición POST, muestra un mensaje de error
    echo "Método no permitido. Debe ser una petición POST.";
}
?>
