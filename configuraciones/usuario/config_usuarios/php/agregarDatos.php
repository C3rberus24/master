<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['email'];
	$t=$_POST['telefono'];

    $pass_cifrada = password_hash($a,PASSWORD_DEFAULT);

	$sql="INSERT into usuarios (usuario_u,clave_u,rol_u,genero_u)
								values ('$n','$pass_cifrada','$e','$t')";
	echo $result=mysqli_query($conexion,$sql);

 ?>