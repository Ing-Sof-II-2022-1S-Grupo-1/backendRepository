<?php
$hostname = 'localhost';
$username = 'lectura';
$password = 'permisoS0l0lectura';
$database = 'eliotdb';
$port = '3306';

$conn = mysqli_connect($hostname, $username, $password, $database, $port);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $cone->connect_error);
}
echo "Connected successfully";

function cerrarConexion()
{
    global $conn;
    mysqli_close($conn);
}
