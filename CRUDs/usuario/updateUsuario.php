<?php
try {
    require "../../resources/dbUpdate.php";     //Incorporamos el código para consultas Update 
    $idUsuario = $_POST['idUsuario'] ?? '';     //Extraemos del serializado el valor de la variable
    $nombresUsuario = $_POST['nombresUsuario'] ?? '';
    
    //Preparamos la consulta y la realizamos
    $result = $conn->query("UPDATE usuario
                                SET nombresUsuario = '$nombresUsuario' 
                                WHERE (idUsuario = '$idUsuario');");
    cerrarConexion();  //Finalizamos la conexión

    echo 1;         //Flag para indicar que fue correcta la consulta
} catch (Exception $e) {
    echo 2;         //Flag para indicar que ocurrió un error durante la consulta
}