<?php
$conn = new mysqli("localhost", "root", "", "desarrollo_social");
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>