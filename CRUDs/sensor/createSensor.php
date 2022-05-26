<?php
try {
    require "../../resources/dbInsert.php";     //Incorporamos el código para consultas Delete
    $alias = $_POST['alias'] ?? '';     //Extraemos del serializado el valor de la variable
    $ip = $_POST['ip'] ?? '';     //Extraemos del serializado el valor de la variable
    $datos = $_POST['datos'] ?? '';     //Extraemos del serializado el valor de la variable
    $estado = $_POST['estado'] ?? '';     //Extraemos del serializado el valor de la variable
    $idCCTV = $_POST['idCCTV'] ?? '';     //Extraemos del serializado el valor de la variable

    //Preparamos la consulta y la realizamos
    $result = $conn->query("INSERT INTO SENSOR
    (direccionIPSensor, aliasSensor, datosSensor, estadoSensor, CCTV_idCCTV)
    VALUES ('$ip', '$alias', '$datos', $estado, $idCCTV);");
            
    cerrarConexion();  //Finalizamos la conexión

    echo 1;         //Flag para indicar que fue correcta la consulta
} catch (Exception $e) {
    echo 2;         //Flag para indicar que ocurrió un error durante la consulta
}