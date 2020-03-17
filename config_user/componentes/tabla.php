
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
      <div class="colsm-6 md-6 lg-6">
	       <h1>Listado de usuarios</h1>
      </div>
        <div class="col sm-4 md-4 lg-4">
            <caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
        </div>
        <hr class="mb-4">
		<table class="table table-hover table-condensed table-bordered">
		
            <thead class="thead-dark">
			<tr>
				<th>Usuario</th>
				<th>Contraseña</th>
				<th>Género</th>
				<th>Rol</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
            </thead>

			<?php 

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT id,nombre,apellido,email,telefono 
						from t_persona where id='$idp'";
					}else{
						$sql="SELECT id,nombre,apellido,email,telefono 
						from t_persona";
					}
				}else{
					$sql="SELECT id,nombre,apellido,email,telefono 
						from t_persona";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4];
			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-trash" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>