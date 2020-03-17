<?php 
  session_start();

  unset($_SESSION['consulta']);

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Pagos</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

                /* Custom page CSS
        -------------------------------------------------- */
        /* Not required for template or sticky footer method. */
         
        img.icon{
            width: 50px;
            margin: auto;
            padding: 10px;
        }
        
        main > .container {
          padding: 60px 15px 0;
        }

        .footer {
          background-color: #f5f5f5;
        }

        .footer > .container {
          padding-right: 15px;
          padding-left: 15px;
        }

        code {
          font-size: 80%;
        }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>
    
    
</head>
<body>
    <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-logo" href="/usuario.view.php">
      <img class="icon" src="https://image.flaticon.com/icons/svg/1946/1946433.svg">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon"></span>
    </button>
       
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="/user_socios/index.php">Socios </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:location.reload()">Pagos</a>
        </li>
      </ul>
      <div class="">
        <a class="navbar-logo" href="/index.php">
            <img class="icon" src="https://image.flaticon.com/icons/svg/485/485902.svg">
        </a>
      </div>
    </div>
  </nav>
</header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 order-md-0">
            <h2 class="mb-3">Información General</h2>
    
            <hr class="mb-4">
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-2 mb-3">
            <label for="firstName">N° de DUI</label>
            <input type="text" class="form-control" id="n_dui" >
            <div class="invalid-feedback"></div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="lastName">N° de NIT</label>
            <input type="text" class="form-control" id="n_nit"  readonly>
            <div class="invalid-feedback"></div>
          </div>
            <div class="col-md-2 mb-3">
                <label for="lastName">Código</label>
                    <input type="text" class="form-control" id="soc_cod" readonly>
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-md-2 mb-3">
                <label for="lastName">Fecha de Inscripción</label>
                    <input type="date" class="form-control" id="soc_fecha_insc"  readonly>
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="lastName">Tipo de afiliacion</label>
                    <input type="text" class="form-control" id="soc_afiliacion" readonly>
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-md-4 mb-3">
            <label for="firstName">Nombres</label>
            <input type="text" class="form-control" id="soc_nombres"  readonly>
            <div class="invalid-feedback"></div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="lastName">Apellidos</label>
            <input type="text" class="form-control" id="soc_apellidos" readonly>
            <div class="invalid-feedback"></div>
          </div>
        </div>
        </form>
        </div>
    </div>
<hr class="mb-4">
	<div class="container">
    <div id="buscador"></div>
    <div id="tabla"></div>
	</div>

	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        	<label>N° Recibo</label>
        	<input type="text" name="" id="nombre" class="form-control input-sm" autocomplete="off">
        	<label>Monto</label>
        	<input type="text" name="" id="apellido" class="form-control input-sm" autocomplete="off">
        	<label>Fecha del Pago</label>
        	<input type="date" name="" id="email" class="form-control input-sm" autocomplete="off">
        	<label>Pagado hasta</label>
        	<input type="date" name="" id="telefono" class="form-control input-sm" autocomplete="off">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo" onclick="location.reload()"> 
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
      		<input type="text" hidden="" id="idpersona" name="">
        	<label>N° Recibo</label>
        	<input type="text" name="" id="nombreu" class="form-control input-sm">
        	<label>Monto</label>
        	<input type="text" name="" id="apellidou" class="form-control input-sm">
        	<label>Fecha del Pago</label>
        	<input type="date" name="" id="emailu" class="form-control input-sm">
        	<label>Pagado hasta</label>
        	<input type="date" name="" id="telefonou" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>
    </div>
    
    <footer class="footer mt-auto py-3">
  <div class="container text-center">
    <span class="text-muted">&copy; ADEL Sonsonate.</span>
  </div>
</footer>
    
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          nombre=$('#nombre').val();
          apellido=$('#apellido').val();
          email=$('#email').val();
          telefono=$('#telefono').val();
            agregardatos(nombre,apellido,email,telefono);
        });



        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>