<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

if ($usuario=="admin" and $contraseña=="admin") {
    header ("location: mensajes.php");
}
else {
    echo '<script language="javascript">';
    echo 'alert("Usuario o Contraseña Incorrecta")';
    echo '</script>';
}
?>