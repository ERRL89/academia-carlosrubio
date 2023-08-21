<?php
$servername = "fdb32.awardspace.net";
$username = "4361640_ovit";
$password = "Erxl5063701489";
$dbname = "4361640_ovit";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_GET["nombre"];

$sql = "INSERT INTO `Grabado_lapiz`(`Pedido`, `Cliente`) VALUES ('','$nombre')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
