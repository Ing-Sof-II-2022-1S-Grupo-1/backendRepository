<?php
try {
    require "../../resources/dbUpdate.php";
    $idUsuario = $_POST['idUsuario'] ?? '';
    $nombresUsuario = $_POST['nombresUsuario'] ?? '';
    $result = $conn->query("UPDATE usuario
                                SET nombresUsuario = '$nombresUsuario' 
                                WHERE (idUsuario = '$idUsuario');");
    cerrarConexion();

    echo 1;
} catch (Exception $e) {
    echo 2;
}
