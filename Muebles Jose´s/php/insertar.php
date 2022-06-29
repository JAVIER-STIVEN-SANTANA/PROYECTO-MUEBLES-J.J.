<?php

include 'conexion.php';


$id_usuario=$_POST['id_usuario'];
$nombre_completo=$_POST['nombre_completo'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$sql="INSERT INTO usuarios(id_usuario, nombre_completo,correo,usuario, contraseña)  
VALUES('$id_usuario','$nombre_completo','$correo','$usuario','$contraseña')";
$query=mysqli_connect($conexion,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>