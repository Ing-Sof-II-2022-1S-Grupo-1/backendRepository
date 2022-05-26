<?php
// El mensaje
?>
<form action="email.php" method="post">
    <input type="text" name="correo" placeholder="Correo"></input>
    <button type="submit" name="send" >Enviar</button>
</form>
<?php
$paraCorreo = $_POST['correo'] ?? '';
$titulo = "Recuperación de Contraseña";
$mensaje = "Hola :D";
$tuCorreo = "From: noresponderEliot@gmail.com";

if (mail($paraCorreo, $titulo, $mensaje, $tuCorreo)) {
    echo "Correo Envíado";
} else if (isset($_POST['send'])){
    echo "Error :P";
}

?>