<?php
try {
    require "../../resources/dbUpdate.php";     //Incorporamos el código para consultas Update 

    $id = $_POST['id'] ?? '';   //Extraemos del serializado el valor de la variable
    $ip = $_POST['ip'] ?? '';     //Extraemos del serializado el valor de la variable
    $alias = $_POST['alias'] ?? '';     //Extraemos del serializado el valor de la variable
    $estado = $_POST['estado'] ?? '';     //Extraemos del serializado el valor de la variable
    
    //Preparamos la consulta y la realizamos
    $result = $conn->query("UPDATE CCTV
    SET
    aliasCCTV = '$alias',
    direccionIPCCTV = '$ip',
    estadoCCTV = $estado
    WHERE idCCTV = $id;
    ");
    cerrarConexion();  //Finalizamos la conexión

    echo 1;         //Flag para indicar que fue correcta la consulta
} catch (Exception $e) {
    echo 2;         //Flag para indicar que ocurrió un error durante la consulta
}