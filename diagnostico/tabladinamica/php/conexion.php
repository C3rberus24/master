

<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="adel2018";
			$bd="pruebas";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>