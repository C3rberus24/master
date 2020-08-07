
<?php 
session_start();

include("php/conexion.php");
$conexion=conexion();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="UTF-8">
        <title>Servicios</title>
        <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
        <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
        <link rel="stylesheet" type="text/css" href="librerias/datatable/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="librerias/datatable/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="librerias/datatable/buttons/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="librerias/datatable/buttons/buttons.dataTables.min.css">

        <link rel="stylesheet" type="text/css" href="librerias/datatable/">

        <script src="librerias/jquery-3.2.1.min.js"></script>
        <script src="js/funciones.js"></script>
        <script src="librerias/bootstrap/js/bootstrap.js"></script>
        <script src="librerias/alertifyjs/alertify.js"></script>
        <script src="librerias/select2/js/select2.js"></script>
        <script src="librerias/datatable/jquery.dataTables.min.js"></script>
        <script src="librerias/datatable/dataTables.bootstrap4.min.js"></script>        
        <script src="librerias/datatable/buttons/jquery.dataTables.min.js"></script>
        <script src="librerias/datatable/buttons/dataTables.buttons.min.js"></script>
        <script src="librerias/datatable/buttons/jszip.min.js"></script>
        <script src="librerias/datatable/buttons/pdfmake.min.js"></script>
        <script src="librerias/datatable/buttons/vfs_fonts.js"></script>
        <script src="librerias/datatable/buttons/buttons.html5.min.js"></script>

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

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

        <style>
            .thead-black{
                background-color: #0d0d0d;
                color: white;
            }
        </style>

    </head>
    <body>
        <div class="header">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-logo" href="/admin.view.php">
                    <img class="icon" src="https://image.flaticon.com/icons/svg/1946/1946433.svg">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="/socios/index.php">Socios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pagos/index.php">Pagos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/servicios/index.php">Servicios</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/configuraciones.view.php">Configuraciones </a>
                        </li>
                    </ul>
                    <div class="">
                        <a class="navbar-logo" href="/index.php">
                            <img class="icon" src="https://image.flaticon.com/icons/svg/485/485902.svg">
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <br>
        <br>
        <br>
        <br>

        <form method="POST" action="index.php">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for="doc">No. de DUI</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" name="dui" class="form-control" id="dui" autocomplete="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="submit" value="Consultar" class="btn btn-info" name="btn1">
                    </div>
                </div>
            </div>
        </form>


        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <h1>Registro de Servicios</h1>

                    <hr class="mb-4">

                    <div class="container">
                        <table class="table table-hover table-condensed table-bordered" id="tablaDinamicaLoad">
                            <thead class="thead-black">
                                <tr>
                                    <td>Servicio brindado</td>
                                    <td>Responsable</td>
                                    <td>Lugar</td>
                                    <td>Fecha de realización</td>
                                    <td>Acción</td>
                                    <td>Acción</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                if(isset($_POST['btn1'])){

                                    $dui = $_POST['dui'];

                                    if($dui=="") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
                                    {echo "Digita un documento por favor.";}

                                    else{

                                        $sql1 = "SELECT `id_socio`, `fecha_inscrip`, `rubro`, `nombre_s`, `apellido_s`, `fecha_nac_s`, `nit_s`, `dui_s` FROM `datos_personales` WHERE `dui_s` = '$dui'";           

                                        $resultados1 = mysqli_query($conexion,$sql1);    
                                        while($consulta = mysqli_fetch_array($resultados1))
                                        {
                                            echo 
                                                "
                            
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-5\">
                                <div class=\"form-group\">
                                    <label for=\"nit\">Nombre del socio</label>
                                    <input type=\"text\" name=\"nit\" class=\"form-control\" id=\"nit\" value=\"$consulta[nombre_s] $consulta[apellido_s]\" readonly> 
                                </div>
                            </div>
                            <div class=\"col-md-2\">
                                <div class=\"form-group\">
                                    <label for=\"nit\">No. de DUI</label>
                                    <input type=\"text\" name=\"nit\" class=\"form-control\" id=\"nit\" value=\"$consulta[dui_s]\" readonly> 
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    <label for=\"nit\">No. de NIT</label>
                                    <input type=\"text\" name=\"nit\" class=\"form-control\" id=\"nit\" value=\"$consulta[nit_s]\" readonly> 
                                </div>
                            </div>
                            <div class=\"col-md-1\"></div>
                            <div class=\"col-md-2\">
                                <div class=\"form-group\">
                                    <label for=\"nit\">Fecha de Inscripción</label>
                                    <input type=\"text\" name=\"nit\" class=\"form-control\" id=\"nit\" value=\"$consulta[fecha_inscrip]\" readonly> 
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    <label for=\"nit\">Rubro</label>
                                    <input type=\"text\" name=\"nit\" class=\"form-control\" id=\"nit\" value=\"$consulta[rubro]\" readonly> 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class=\"mb-4\">
                    ";
                }


                        $sql2 = "SELECT s.id_servicios, s.tipo_servicio, s.responsable_servicio, s.lugar, s.fecha_realizacion_s, dp.id_socio, dp.dui_s FROM servicios AS s INNER JOIN datos_personales AS dp ON s.datos_personales_id_socio=dp.id_socio 
                        WHERE dp.id_socio= (SELECT dp.id_socio FROM datos_personales AS dp WHERE dp.dui_s='$dui')";

                                        $resultados2 = mysqli_query($conexion,$sql2);
                                        while($ver = mysqli_fetch_array($resultados2))
                                        {

                                            $datos=$ver[0]."||".
                                                $ver[1]."||".
                                                $ver[2]."||".
                                                $ver[3]."||".
                                                $ver[4]."||".
                                                $ver[5];
                                ?>


                                <tr>
                                    <td><?php echo $ver[1] ?></td>
                                    <td><?php echo $ver[2] ?></td>
                                    <td><?php echo $ver[3] ?></td>
                                    <td><?php echo $ver[4] ?></td>
                                    <td>
                                        <center>
                                            <button class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
                                                Editar
                                            </button>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <button class="btn btn-danger" onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
                                                Eliminar
                                            </button>
                                        </center>
                                    </td>
                                </tr>
                                <?php

                                        }
                                    }
                                }

                                ?>
                            </tbody>
                        </table>
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
                        <h4 class="modal-title" id="myModalLabel">Actualizar los datos del registro</h4>
                    </div>
                    <div class="modal-body">
                        <input type="text" hidden="" id="idpersona" name="">
                        <label>Servicio brindado</label>
                        <input type="text" name="" id="nombreu" class="form-control input-sm">
                        <label>Responsable</label>
                        <input type="text" name="" id="apellidou" class="form-control input-sm">
                        <label>Lugar</label>
                        <input type="text" name="" id="emailu" class="form-control input-sm">
                        <label>Fecha de realización</label>
                        <input type="date" name="" id="telefonou" class="form-control input-sm">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning" id="actualizadatos" data-dismiss="modal" onclick="location.reload();">Actualizar</button>

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

<script type="text/javascript">
    $(document).ready(function() {
        $('#tablaDinamicaLoad').DataTable({
            dom: 'Blfrtip',
            buttons: [
                {
                    extend:'pdfHtml5',
                    orientation: 'landscape',
                    pagesize: 'LETTER',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3 ]
                    }


                }

            ],
            language: {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
                }
            }

        });
    });
</script>