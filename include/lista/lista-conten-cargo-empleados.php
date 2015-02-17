<?php 
include 'procesos/conexion.php';
include 'procesos/funciones.php';



$ejecutar = "select * from cargo_empleado where status_cargo_empleado='1'";
$resultado=mysql_query($ejecutar);

 ?>


<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="25%">Nombre </th>
                                            <th width="30%">Operacion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <?php 
                                            while ($r=mysql_fetch_assoc($resultado)) {
                                                echo ' 
                                                <tr>
                                                    <td>'.$r['nombre_cargo_empleado'].'</td>
                                                     <td style="text-align: center; ">
                                                     <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12"> 
                                                             <button type="button" class="btn btn-warning btn-lg btn-block" onclick="load_cemp('.$r['id_cargo_empleado'].',1)">
                                                                <i class="icon-edit icon-2x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <button type="button" class="btn btn-danger btn-lg btn-block" onclick="load_cemp('.$r['id_cargo_empleado'].',2)">
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
$ejecutar = "select * from cargo_empleado where status_cargo_empleado='1'";
$resultado=mysql_query($ejecutar);

while ($r=mysql_fetch_assoc($resultado)) {
/*echo ' 
<!-- modal Modificar Cargo Empleados-->
             <div class="modal fade" id="modificar'.$r['id_cargo_empleado'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 align="center" class="modal-title" id="myModalLabel">Modificar puesto "'.$r['nombre_cargo_empleado'].'"</h4>
                        </div>
                        <div class="modal-body">
                            <form action="procesos/modificar_cargo_empleado.php" method="POST">
                        ';
                        form_cargo_emp($r['id_cargo_empleado']);
                      
                        echo'
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            
                            <input type="submit" class ="btn btn-primary" name="enviar" value="Modificar"/>
                            </form>    
                        </div>
                    </div>
                </div>
            </div>
</div>


<!-- modal Eliminar Cargo Empleados-->
             <div class="modal fade" id="baja'.$r['id_cargo_empleado'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel"><h2>
                        </div>
                        <div class="modal-body" style="text-align: center; ">
                        <h3>Desea Eliminar el puesto "'.$r['nombre_cargo_empleado'].'"</h3>
                        <form action="procesos/baja_cargo_empleado.php" method="POST">
                        <input type="hidden" value="'.$r['id_cargo_empleado'].'" name="id_cargo_empleado"/>
                        <input type="hidden" value="'.$r['nombre_cargo_empleado'].'" name="nombre_c_e"/>
                        
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            
                            <input type="submit" class ="btn btn-primary" name="enviar" value="Eliminar"/>
                            </form>    
                        
                    </div>
                </div>
            </div>
</div>
<style>
#baja'.$r['id_cargo_empleado'].' .modal-dialog { width:30%; margin-top:10%;}
</style>

';*/
}
 ?>