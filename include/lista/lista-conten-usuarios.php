<?php 
include 'procesos/conexion.php';

$ejecutar = "select * from usuario where status_usuario='1'";
$resultado=mysql_query($ejecutar);

 ?>



<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Password</th>
                                            <th>Operacion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            while ($r=mysql_fetch_assoc($resultado)) {
                                                echo ' 
                                                <tr>
                                                    <td>'.$r['nombre_usuario'].'</td>
                                                    <td>'.$r['pass_usuario'].'</td>                                                   
                                                     <td style="text-align: center; ">
                                                     <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12"> 
                                                             <button type="button" class="btn btn-warning btn-lg btn-block" onclick="load_user('.$r['id_usuario'].',1)">
                                                                <i class="icon-edit icon-2x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <button type="button" class="btn btn-danger btn-lg btn-block" onclick="load_user('.$r['id_usuario'].',2)">
                                                            <i class="icon-trash icon-2x"></i>
                                                        </button>
                                                        </div>
                                                    </div>
                                                    </td>
                                             </tr>
                                                ';
                                            }
                                         ?>
                                            
                                    </tbody>
                                    </table>

<?php 
$ejecutar = "select * from usuario where status_usuario='1'";
$resultado=mysql_query($ejecutar);

while ($r=mysql_fetch_assoc($resultado)) {
/*echo ' 
<!-- modal Modificar empleados-->
    <div class="modal fade" id="modificar'.$r['id_usuario'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
                <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 align ="center" class="modal-title" id="myModalLabel">Modificar el Usuario "'.$r['nombre_usuario'].'"</h4>
                        </div>
                        <div class="modal-body">
                            <form action="procesos/guardar_usuario.php" method="POST">
                        ';
                        form_usuario($r['id_usuario']);
                        echo'
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            
                            <input type="submit" class ="btn btn-primary" name="Modificar" value="Modificar"/>
                            </form> 
                    </div>
                </div>
        </div>
</div>


<!-- modal Eliminar empleado-->
    <div class="modal fade" id="baja'.$r['id_usuario'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel"></h2>
                        </div>
                        <div class="modal-body" style="text-align: center; ">
                        <h3>Desea Eliminar El Usuario "'.$r['nombre_usuario'].'"</h3>
                        <form action="procesos/baja_empleado.php" method="POST">
                        <input type="hidden" value="'.$r['id_empleado'].'" name="id_emp"/>
                        <input type="hidden" value="'.$r['nombre_usuario'].'" name="nombre_user"/>
                         </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            
                            <input type="submit" class ="btn btn-primary" name="enviar" value="Eliminar"/>
                            </form>
                        </div> 
        </div>
    </div>
</div>



<style>
#baja'.$r['id_usuario'].' .modal-dialog { width:30%; margin-top:10%;}
</style>

';*/
}
 ?>