<?php
try {
    require "../../resources/dbInsert.php";     //Incorporamos el código para consultas Delete
    $nombre = $_POST['nombre'] ?? '';     //Extraemos del serializado el valor de la variable
    $apellido = $_POST['apellido'] ?? '';     //Extraemos del serializado el valor de la variable
    $usuario = $_POST['usuario'] ?? '';     //Extraemos del serializado el valor de la variable
    $correo = $_POST['correo'] ?? '';     //Extraemos del serializado el valor de la variable
    $contrasena = $_POST['contrasena'] ?? '';     //Extraemos del serializado el valor de la variable
    $estado = $_POST['estado'] ?? '';     //Extraemos del serializado el valor de la variable

    //Preparamos la consulta y la realizamos
    $result = $conn->query("INSERT INTO USUARIO (nombresUsuario, apellidosUsuario, 
                                         usernameUsuario,correoUsuario, passwordUsuario, estadoUsuario)   
                                VALUES ('$nombre', '$apellido', '$usuario', '$correo', '$contrasena', $estado);");

    cerrarConexion();  //Finalizamos la conexión

    echo 1;         //Flag para indicar que fue correcta la consulta
} catch (Exception $e) {
    echo 2;         //Flag para indicar que ocurrió un error durante la consulta
}
