<?php

include 'conexion.php';

$id_usuario=$_POST['id_usuario'];
$nombre_completo=$_POST['nombre_completo'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$sql="UPDATE usuarios SET  id_usuario='$id_usuario', nombre_completo='$nombre_completo',correo='$correo',usuario='$usuario',contraseña='$contraseña' WHERE id_usuario='$id_usuario'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>