<style>
    .thead-black{
        background-color: #0d0d0d;
        color: white;
    }
</style>
<?php 
session_start();
require_once "../php/conexion.php";
$conexion=conexion();

?>
<div class="row">
    <div class="col-sm-12">
        <br>
        <br>
        <br>
        <br>
        <h1>Registro de Eliminaciones </h1><br>
        <div class="container">
            <table class="table table-hover table-condensed table-bordered" id="tablaDinamicaLoad">
                <thead class="thead-black">
                    <tr>
                        <td>Usuario</td>
                        <td>Hora y fecha</td>
                        <td>Información eliminada</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 

                    if(isset($_SESSION['consulta'])){
                        if($_SESSION['consulta'] > 0){
                            $idp=$_SESSION['consulta'];
                            $sql="SELECT idhistorial,usuario_del,fecha_del,info_eliminada 
						from bitacora_del where id='$idp'";
                        }else{
                            $sql="SELECT idhistorial,usuario_del,fecha_del,info_eliminada 
						from bitacora_del";
                        }
                    }else{
                        $sql="SELECT idhistorial,usuario_del,fecha_del,info_eliminada 
						from bitacora_del";
                    }

                    $result=mysqli_query($conexion,$sql);
                    while($ver=mysqli_fetch_row($result)){ 

                        $datos=$ver[0]."||".
                            $ver[1]."||".
                            $ver[2]."||".
                            $ver[3];
                    ?>

                    <tr>
                        <td><?php echo $ver[1] ?></td>
                        <td><?php echo $ver[2] ?></td>
                        <td><?php echo $ver[3] ?></td>
                    </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

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
