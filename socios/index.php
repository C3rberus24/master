
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Socios</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
        <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
        <link rel="stylesheet" type="text/css" href="librerias/datatable/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="librerias/datatable/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="librerias/datatable/buttons/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="librerias/datatable/buttons/buttons.dataTables.min.css">

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
                <a class="navbar-logo" href="/admin.view.php">
                    <img class="icon" src="https://image.flaticon.com/icons/svg/1946/1946433.svg">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="javascript:location.reload()">Socios <span class="sr-only">(current)</span></a>
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
        </header>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12 order-md-0">
                    <h2 class="mb-3">Información General</h2>

                    <!----------------------- Botones de las pantallas modal ------------------------>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_ing_socio">
                        Agregar 
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_mod_socio">
                        Modificar 
                        <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                    <!----------------------- Modal de ingreso de socio ------------------------------->
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal_ing_socio">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel">Nuevo Socio</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body"> <!-- Empieza el cuerpo del Modal-->
                                    <form>
                                        <div class="row">
                                            <div class="col-md-3 mb-3">
                                                <label for="dui_s">N° de DUI</label>
                                                <input type="text" class="form-control" id="dui_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="nit_s">N° de NIT</label>
                                                <input type="text" class="form-control" id="nit_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="cod_s">Código</label>
                                                <input type="text" class="form-control" id="cod_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="insc_s">Fecha de Inscripción</label>
                                                <input type="date" class="form-control" id="insc_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="afil_s">Tipo de afiliacion</label>
                                                <input type="text" class="form-control" id="afil_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="nomb_s">Nombres</label>
                                                <input type="text" class="form-control" id="nomb_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="ape_s">Apellidos</label>
                                                <input type="text" class="form-control" id="ape_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="nac_s">Fecha de nacimiento</label>
                                                <input type="date" class="form-control" id="nac_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="edad_s">Edad</label>
                                                <input type="text" class="form-control" id="edad_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="gen_s">Genero</label>
                                                <input type="text" class="form-control" id="gen_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="civ_s">Estado Civil</label>
                                                <input type="text" class="form-control" id="civ_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="tel_s">Teléfono</label>
                                                <input type="text" class="form-control" id="tel_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="cel_s">Celular</label>
                                                <input type="text" class="form-control" id="cel">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-5 mb-3">
                                                <label for="email_s">Correo <span class="text-muted">(Opcional)</span></label>
                                                <input type="email" class="form-control" id="email_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-11 mb-3">
                                                <label for="dir_s">Dirección</label>
                                                <input type="text" class="form-control" id="dir_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="mun_s">Municipio</label>
                                                <input type="text" class="form-control" id="mun_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-5 mb-3">
                                                <label for="dep_s">Departamento</label>
                                                <input type="text" class="form-control" id="dep_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <hr class="mb-4">
                                        <h2 class="mb-3">Información de la Empresa o Negocio</h2>
                                        <div class="col-md-8 mb-3">
                                            <label for="nomb_e">Nombre</label>
                                            <input type="text" class="form-control" id="nomb_e">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="tel_e">Teléfono</label>
                                            <input type="text" class="form-control" id="tel_e">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-11 mb-3">
                                            <label for="dir_e">Dirección</label>
                                            <input type="text" class="form-control" id="dir_e">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="mun_e">Municipio</label>
                                            <input type="text" class="form-control" id="mun_e">
                                            <div class="invalid-feedback"></div>
                                        </div><div class="col-md-5 mb-3">
                                        <label for="dep_e">Departamento</label>
                                        <input type="text" class="form-control" id="dep_e">
                                        <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <label for="email_e">Correo</label>
                                            <input type="email" class="form-control" id="email_e">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="emp_e">Numero de Empleados</label>
                                            <input type="text   " class="form-control" id="emp_e">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="row">

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="ing_e">Ingresos Mensuales</label>
                                            <input type="text" class="form-control" id="ing_e">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </form>
                                </div> <!-- Finaliza el cuerpo del Modal -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary">Ingresar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------- Modal de modificacion de la info del socio ------------------------------->
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal_mod_socio">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel2">Modificar los datos del Socio</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body"> <!-- Empieza el cuerpo del Modal-->
                                    <form>
                                        <div class="row">
                                            <div class="col-md-3 mb-3">
                                                <label for="dui_s">N° de DUI</label>
                                                <input type="text" class="form-control" id="dui_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="nit_s">N° de NIT</label>
                                                <input type="text" class="form-control" id="nit_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="cod_s">Código</label>
                                                <input type="text" class="form-control" id="cod_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="insc_s">Fecha de Inscripción</label>
                                                <input type="date" class="form-control" id="insc_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="afil_s">Tipo de afiliacion</label>
                                                <input type="text" class="form-control" id="afil_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="nomb_s">Nombres</label>
                                                <input type="text" class="form-control" id="nomb_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="ape_s">Apellidos</label>
                                                <input type="text" class="form-control" id="ape_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="nac_s">Fecha de nacimiento</label>
                                                <input type="date" class="form-control" id="nac_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="edad_s">Edad</label>
                                                <input type="text" class="form-control" id="edad_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="gen_s">Genero</label>
                                                <input type="text" class="form-control" id="gen_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="civ_s">Estado Civil</label>
                                                <input type="text" class="form-control" id="civ_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="tel_s">Teléfono</label>
                                                <input type="text" class="form-control" id="tel_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="cel_s">Celular</label>
                                                <input type="text" class="form-control" id="cel">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-5 mb-3">
                                                <label for="email_s">Correo <span class="text-muted">(Opcional)</span></label>
                                                <input type="email" class="form-control" id="email_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-11 mb-3">
                                                <label for="dir_s">Dirección</label>
                                                <input type="text" class="form-control" id="dir_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="mun_s">Municipio</label>
                                                <input type="text" class="form-control" id="mun_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-md-5 mb-3">
                                                <label for="dep_s">Departamento</label>
                                                <input type="text" class="form-control" id="dep_s">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <hr class="mb-4">
                                        <h2 class="mb-3">Información de la Empresa o Negocio</h2>
                                        <div class="col-md-8 mb-3">
                                            <label for="nomb_e">Nombre</label>
                                            <input type="text" class="form-control" id="nomb_e">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="tel_e">Teléfono</label>
                                            <input type="text" class="form-control" id="tel_e">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-11 mb-3">
                                            <label for="dir_e">Dirección</label>
                                            <input type="text" class="form-control" id="dir_e">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="mun_e">Municipio</label>
                                            <input type="text" class="form-control" id="mun_e">
                                            <div class="invalid-feedback"></div>
                                        </div><div class="col-md-5 mb-3">
                                        <label for="dep_e">Departamento</label>
                                        <input type="text" class="form-control" id="dep_e">
                                        <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <label for="email_e">Correo</label>
                                            <input type="email" class="form-control" id="email_e">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="emp_e">Numero de Empleados</label>
                                            <input type="text   " class="form-control" id="emp_e">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="row">

                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="ing_e">Ingresos Mensuales</label>
                                            <input type="text" class="form-control" id="ing_e">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </form>
                                </div> <!-- Finaliza el cuerpo del Modal--> 
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <!-------------------------------                  ------------------------------->
                    <hr class="mb-4">
                    <form class="needs-validation" novalidate>
                        <!------------------------------------------------------------------------------------------------------>
                        <div class="row">
                            <div class="col-md-2 mb-3">
                                <label for="dui_s">N° de DUI</label>
                                <input type="text" class="form-control" id="dui_s">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="nit_s">N° de NIT</label>
                                <input type="text" class="form-control" id="nit_s"  readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="cod_s">Código</label>
                                <input type="text" class="form-control" id="cod_s" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="insc_s">Fecha de Inscripción</label>
                                <input type="date" class="form-control" id="insc_s"  readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="afil_s">Tipo de afiliacion</label>
                                <input type="text" class="form-control" id="afil_s" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="nomb_s">Nombres</label>
                                <input type="text" class="form-control" id="nomb_s"  readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="ape_s">Apellidos</label>
                                <input type="text" class="form-control" id="ape_s" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="nac_s">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="nac_s" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-1 mb-3">
                                <label for="edad_s">Edad</label>
                                <input type="text" class="form-control" id="edad_s" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="gen_s">Genero</label>
                                <input type="text" class="form-control" id="gen_s" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="civ_s">Estado Civil</label>
                                <input type="text" class="form-control" id="civ_s" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="tel_s">Teléfono</label>
                                <input type="text" class="form-control" id="tel_s" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="cel_s">Celular</label>
                                <input type="text" class="form-control" id="cel" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="email_s">Correo <span class="text-muted">(Opcional)</span></label>
                                <input type="email" class="form-control" id="email_s" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="dir_s">Dirección</label>
                                <input type="text" class="form-control" id="dir_s" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="dep_s">Departamento</label>
                                <input type="text" class="form-control" id="dep_s" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="mun_s">Municipio</label>
                                <input type="text" class="form-control" id="mun_s" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <h2 class="mb-3">Información de la Empresa o Negocio</h2>
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="nomb_e">Nombre</label>
                                <input type="text" class="form-control" id="nomb_e" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="dir_e">Dirección</label>
                                <input type="text" class="form-control" id="dir_e" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="tel_e">Teléfono</label>
                                <input type="text" class="form-control" id="tel_e" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="email_e">Correo</label>
                                <input type="email" class="form-control" id="email_e" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="emp_e">Numero de Empleados</label>
                                <input type="text   " class="form-control" id="emp_e" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="ing_e">Ingresos Mensuales</label>
                                <input type="text" class="form-control" id="ing_e" readonly>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <!------------------------------------------------------------------------------------------------------------->
                    </form>
                </div>
            </div>

            <hr class="mb-4">
            <div class="container">
                <div id="tabla"></div>
            </div>

            <!-- Modal para registrar nuevos servicios-->


            <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"></h4>
                        </div>
                        <div class="modal-body">
                            <label>N°</label>
                            <input type="text" name="" id="nombre" class="form-control input-sm" autocomplete="off">
                            <label>Tipo de servicio</label>
                            <input type="text" name="" id="apellido" class="form-control input-sm" autocomplete="off">
                            <label>Fecha de realización</label>
                            <input type="date" name="" id="email" class="form-control input-sm" autocomplete="off">
                            <label>Responsable</label>
                            <input type="text" name="" id="telefono" class="form-control input-sm" autocomplete="off">
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
                            <label>N°</label>
                            <input type="text" name="" id="nombreu" class="form-control input-sm">
                            <label>Tipo de servicio</label>
                            <input type="text" name="" id="apellidou" class="form-control input-sm">
                            <label>Fecha de realización</label>
                            <input type="date" name="" id="emailu" class="form-control input-sm">
                            <label>Responsable</label>
                            <input type="text" name="" id="telefonou" class="form-control input-sm">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
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
    @media (min-width: 1200px)
    .container {
        width: 1170px;
    }
</script>