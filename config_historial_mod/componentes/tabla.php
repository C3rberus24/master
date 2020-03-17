
<?php 
session_start();
require_once "../php/conexion.php";
$conexion=conexion();

?>
<div class="row">
    <div class="col-sm-12">
        <div class="colsm-6 md-6 lg-6">
            <h1>Historial de registros modificados</h1>
        </div>
        <div class="col sm-4 md-4 lg-4">
            <!--<caption>
<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
Agregar nuevo 
<span class="glyphicon glyphicon-plus"></span>
</button>
</caption>-->
        </div>
        <hr class="mb-4">
        <table class="table table-hover table-condensed table-bordered" id="tablaDinamicaLoad">

            <thead class="thead-dark">
                <tr>
                    <th>Usuario</th>
                    <th>Fecha y Hora</th>
                    <th>Información anterior</th>
                    <th>Información nueva</th>
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
                        $ver[3]."||".
                        $ver[4];
                ?>

                <tr>
                    <td><?php echo $ver[1] ?></td>
                    <td><?php echo $ver[2] ?></td>
                    <td><?php echo $ver[3] ?></td>
                    <td><?php echo $ver[4] ?></td>
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
        $('#tablaDinamicaLoad').DataTable({
            dom: 'Bfrtip',
            
            buttons: [
                {
                    extend:'pdfHtml5',
                    orientation: 'landscape',
                    pagesize: 'LETTER',
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
                    "extend": 'pdfHtml5',
                    "orientation": 'landscape'
                }
            }

        });
    });
</script>