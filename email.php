<?php
// El mensaje
$paraCorreo = "kmilito2002@gmail.com";
$titulo = "Recuperación de Contraseña";
$mensaje = "Hola :D";
$tuCorreo = "From: noresponderEliot@gmail.com";

if (mail($paraCorreo, $titulo, $mensaje, $tuCorreo)) {
    echo "Correo Envíado";
} else {
    echo "eroor";
}

?>