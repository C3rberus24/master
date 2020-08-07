<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['email'];
	$t=$_POST['telefono'];

	$sql="UPDATE pagos set n_recibo_p='$n',
								monto_p='$a',
								fecha_p='$e',
								periodo_p='$t'
				where idpagos='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>