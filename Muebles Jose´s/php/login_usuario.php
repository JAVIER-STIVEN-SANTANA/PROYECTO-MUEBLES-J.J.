<?php

session_start();

include 'conexion.php';

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$validar_login=mysqli_query($conexion, "SELECT * FROM usuarios where correo='$correo' and contraseña='$contraseña'");

if(mysqli_num_rows($validar_login)>0){
$_SESSION['usuario']=$correo;
header("location:../index1.html");
exit;
}else{
echo'
<script>
alert("Usuario no existe, por favor verifique los datos introducidos");
window.location ="../index.php";
</script>

';
exit;
}
