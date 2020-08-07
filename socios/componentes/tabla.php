
<?php 
session_start();
require_once "../php/conexion.php";
$conexion=conexion();

?>
<div class="row">
    <div class="col-sm-12">
        <div class="colsm-5 md-5 lg-5">
            <h2>Historial de servicios recibidos</h2>
        </div>
        <div class="col sm-4 md-4 lg-4">
            <caption>
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                    Agregar servicio 
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
            </caption>   
        </div>
        <br>
        <table class="table table-hover table-condensed table-bordered" id="tabla_registro_servicios">

            <thead class="thead-dark">
                <tr>
                    <th>No.</th>
                    <th>Tipo de servicio</th>
                    <th>Fecha de realización</th>
                    <th>Responsable</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
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
                        $ver[3];
                    $ver[4];
                ?>

                <tr>
                    <td><?php echo $ver[1] ?></td>
                    <td><?php echo $ver[2] ?></td>
                    <td><?php echo $ver[3] ?></td>
                    <td><?php echo $ver[4] ?></td>

                    <td>
                        <center>
                            <button class="btn btn-danger btn-lg glyphicon glyphicon-trash" 
                                    onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
                            </button>
                        </center>
                    </td>
                    <td>
                        <center>
                            <button class="btn btn-warning btn-lg glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
                            </button>
                        </center>
                    </td>
                </tr>

                <?php 
                }
                ?>

            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tabla_registro_servicios').DataTable({
            dom: 'Blfrtip',
            buttons: [
                {
                    extend:'pdfHtml5',
                    orientation: 'portrait',
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

            }

        });
    });
</script>