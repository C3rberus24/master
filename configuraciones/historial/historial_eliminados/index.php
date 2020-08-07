<?php 
session_start();

unset($_SESSION['consulta']);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Registro de Eliminaciones</title>
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

        <div class="container">
            <div id="tabla">
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
    $(document).ready(function() {
        $('#tablaDinamicaLoad').DataTable({
            dom: 'Blfrtip',
            buttons: [
                {
                    extend:'pdfHtml5',
                    orientation: 'landscape',
                    pagesize: 'LETTER',
                    exportOptions: {
                        columns: [ 0, 1, 2]
                    }


                }

            ],
            language: {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     " Mostrar _MENU_ registros",
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
            }

        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function(){
        $('#tabla').load('componentes/tabla.php');
    });
</script>

