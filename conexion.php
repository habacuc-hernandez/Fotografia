<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia localhost por la dirección de tu servidor MySQL
$username = "root"; // Cambia usuario por tu nombre de usuario de MySQL
$password = ""; // Cambia contraseña por tu contraseña de MySQL
$dbname = "fotografia"; // Cambia fotografia por el nombre de tu base de datos

// Establecer conexión con la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Recuperar datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Preparar la consulta SQL para insertar datos
$sql = "INSERT INTO contacto (nombre, email, telefono, mensaje) VALUES ('$nombre', '$email', '$telefono', '$mensaje')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Mensaje enviado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión con la base de datos
$conn->close();
?>