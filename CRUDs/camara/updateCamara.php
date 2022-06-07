<?php
try {
    require "../../resources/dbUpdate.php";     //Incorporamos el código para consultas Update 

    $id = $_POST['id'] ?? '';   //Extraemos del serializado el valor de la variable
    $ip = $_POST['ip'] ?? '';     //Extraemos del serializado el valor de la variable
    $alias = $_POST['alias'] ?? '';     //Extraemos del serializado el valor de la variable
    $serial = $_POST['serial'] ?? '';     //Extraemos del serializado el valor de la variable
    $marca = $_POST['marca'] ?? '';     //Extraemos del serializado el valor de la variable
    $modelo = $_POST['modelo'] ?? '';     //Extraemos del serializado el valor de la variable
    $estado = $_POST['estado'] ?? '';     //Extraemos del serializado el valor de la variable
    $idCCTV = $_POST['idCCTV'] ?? '';     //Extraemos del serializado el valor de la variable

    //Preparamos la consulta y la realizamos
    $result = $conn->query("UPDATE CAMARA
    SET
    direccionIPCamara = '$ip',
    aliasCamara = '$alias',
    codigoSNCamara = '$serial',
    marcaCamara = '$marca',
    modeloCamara = '$modelo',
    estadoCamara = $estado,
    CCTV_idCCTV = $idCCTV
    WHERE idCamara = $id;
    ");
    cerrarConexion();  //Finalizamos la conexión

    echo 1;         //Flag para indicar que fue correcta la consulta
} catch (Exception $e) {
    echo 2;         //Flag para indicar que ocurrió un error durante la consulta
}