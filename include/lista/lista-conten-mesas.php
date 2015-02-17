<?php 
    include 'procesos/conexion.php';
    $ejecutar = "select * from mesa where status_mesa='1'";
    $resultado=mysql_query($ejecutar);
 ?>



<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Status</th>
                <th>Operacion</th>
                </tr>
        </thead>
        <tbody>
            <?php 
                while ($r=mysql_fetch_assoc($resultado)) {
            echo'<tr>
                    <td>'.$r['numero_mesa'].'</td>
                    <td>'.$r['descripcion_mesa'].'</td>
                    <td>'.$r['temporal_mesa'].'</td>
                    <td style="text-align: center; ">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12"> 
                                <button type="button" class="btn btn-warning btn-lg btn-block" onclick="load_mesas('.$r['id_mesa'].',1)">
                                    <i class="icon-edit icon-2x"></i>
                                </button>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <button type="button" class="btn btn-danger btn-lg btn-block" onclick="load_mesas('.$r['id_mesa'].',2)">
                                    <i class="icon-trash icon-2x"></i>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>';
                }
            ?> 
        </tbody>
    </table>
</div>