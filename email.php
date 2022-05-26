<?php
// El mensaje
$mensaje = "Hola :D";

// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");

// Enviarlo
mail('kmilito2002@gmail.com', 'Mi título', $mensaje);
?>