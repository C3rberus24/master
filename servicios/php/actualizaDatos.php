<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['email'];
	$t=$_POST['telefono'];

	$sql="UPDATE servicios set tipo_servicio='$n',
								responsable_servicio='$a',
								lugar='$e',
								fecha_realizacion_s='$t'
				where id_servicios='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>