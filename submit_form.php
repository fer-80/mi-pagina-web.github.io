<?php
// Conexión a la base de datos
$servername = "localhost"; // Servidor local
$username = "root";       // Usuario por defecto en XAMPP
$password = "";           // Contraseña por defecto en XAMPP (vacía)
$dbname = "sistemas_computacionales"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Insertar datos en la base de datos
$sql = "INSERT INTO contactos (nombre, email, telefono, mensaje)
VALUES ('$nombre', '$email', '$telefono', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Mensaje enviado correctamente. Gracias por contactarnos.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
