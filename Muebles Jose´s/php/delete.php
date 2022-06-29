<?php

include 'conexion.php';

$id_usuarios=$_GET['id'];

$sql="DELETE FROM usuarios WHERE id_usuario like $id_usuarios";

$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>
