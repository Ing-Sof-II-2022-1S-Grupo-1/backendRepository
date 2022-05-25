<?php
try {
    require "../../resources/dbInsert.php";     //Incorporamos el código para consultas Delete
    $ip = $_POST['ip'] ?? '';     //Extraemos del serializado el valor de la variable
    $alias = $_POST['alias'] ?? '';     //Extraemos del serializado el valor de la variable
    $serial = $_POST['serial'] ?? '';     //Extraemos del serializado el valor de la variable
    $marca = $_POST['marca'] ?? '';     //Extraemos del serializado el valor de la variable
    $modelo = $_POST['modelo'] ?? '';     //Extraemos del serializado el valor de la variable
    $idCCTV = $_POST['idCCTV'] ?? '';     //Extraemos del serializado el valor de la variable
    //Preparamos la consulta y la realizamos
    $result = $conn->query("INSERT INTO camara
                                    (direccionIPCamara, aliasCamara, codigoSNCamara,
                                        marcaCamara, modeloCamara, estadoCamara, CCTV_idCCTV) 
                                VALUES ('$ip', '$alias', '$serial', '$marca', '$modelo', 1, $idCCTV);");

    cerrarConexion();  //Finalizamos la conexión

    echo 1;         //Flag para indicar que fue correcta la consulta
} catch (Exception $e) {
    echo 2;         //Flag para indicar que ocurrió un error durante la consulta
}
