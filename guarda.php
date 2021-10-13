<?php
include("based.php");

if (isset($_POST['enviarr'])){
    $Nombre=$_POST['nombre'];
    $telefono=$_POST['tel'];
    $correo=$_POST['corr'];
    $mensaje=$_POST['men'];
    
    $query="INSERT INTO mensajes(Nombre,telefono,correo,mensaje)VALUES('$Nombre','$telefono','$correo','$mensaje')";
    $resultado=mysqli_query($conn, $query);
    if(!$resultado){
        die("Error");
    }
    header("location:contacta.php");
}
?>