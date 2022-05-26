<?php
try {
    require "../../resources/dbDelete.php";     //Incorporamos el código para consultas Delete
    $idCCTV = $_POST['idCCTV'] ?? '';     //Extraemos del serializado el valor de la variable
    
    //Preparamos la consulta y la realizamos
    $result = $conn->query("DELETE FROM cctv WHERE idCCTV = $idCCTV;");
    
    cerrarConexion();  //Finalizamos la conexión

    echo 1;         //Flag para indicar que fue correcta la consulta
} catch (Exception $e) {
    echo 2;         //Flag para indicar que ocurrió un error durante la consulta
}