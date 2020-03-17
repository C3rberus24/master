

<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="adel2018";
			$bd="mydb";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>