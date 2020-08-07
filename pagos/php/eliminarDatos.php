
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE from pagos where idpagos='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>