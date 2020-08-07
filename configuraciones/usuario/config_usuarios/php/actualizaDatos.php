<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['email'];
	$t=$_POST['telefono'];

	$sql="UPDATE usuarios set usuario_u='$n',
								clave_u='$a',
								rol_u='$e',
								genero_u='$t'
				where id_user='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>