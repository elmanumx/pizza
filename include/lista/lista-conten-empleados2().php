<?php 
include 'procesos/conexion.php';

$ejecutar = "select * from empleados where status_empleado='1'";
$resultado=mysql_query($ejecutar);

 ?>






<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="40$">Nombre Completo</th>
                                            <th width="20%">Telefono</th>
                                            <th width="10%">Cargo</th>
                                            <th width="30">Operacion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                         <?php 
                                            while ($r=mysql_fetch_assoc($resultado)) {
                                                $nc=$r['nombre_empleado'].' '.$r['apellidop_empleado'].' '.$r['apellidom_empleado'];
                                                echo ' 
                                                <tr>
                                                    <td>'.$nc.'</td>
                                                    <td>'.$r['tel_empleado'].'</td>
                                                    <td>';
                                                        $ejecutar2 = "select * from cargo_empleado where id_cargo_empleado='".$r['id_cargo_empleado']."' ";
                                                        $resultado2=mysql_query($ejecutar2);
                                                        $r2=mysql_fetch_assoc($resultado2);
                                                    echo '
                                                    '.$r2['nombre_cargo_empleado'].'
                                                    </td>
                                                     <td style="text-align: center; ">
                                                     <div class="row">
                                                        <div class="col-md-3 col-sm-12 col-xs-12"> 
                                                             <button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#modificar'.$r['id_empleado'].'">
                                                                <i class="icon-edit icon-2x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-3 col-sm-12 col-xs-12">
                                                        <button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#baja'.$r['id_empleado'].'">
                                                            <i class="icon-trash icon-2x"></i>
                                                        </button>
                                                        </div> 
                                                        <div class="col-md-3 col-sm-12 col-xs-12">
                                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#user'.$r['id_empleado'].'">
                                                            <i class="icon-user icon-2x"></i>
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
</div>



<?php 
$ejecutar = "select * from empleados where status_empleado='1'";
$resultado=mysql_query($ejecutar);

while ($r=mysql_fetch_assoc($resultado)) {
echo ' 
    <!-- modal Modificar page-->
             <div class="modal fade" id="modificar'.$r['id_empleado'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel">Modificar '.$r['nombre_empleado'].'</h2>
                        </div>
                        <div class="modal-body">
                            <form action="procesos/modificar_pagina.php" method="POST">
                        ';
                        
                      
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



 <!-- modal Modificar page-->
             <div class="modal fade" id="baja'.$r['id_empleado'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel">baja '.$r['nombre_empleado'].'</h2>
                        </div>
                        <div class="modal-body">
                            <form action="procesos/modificar_pagina.php" method="POST">
                        ';
                        
                      
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


<!-- modal Modificar page-->
             <div class="modal fade" id="user'.$r['id_empleado'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel">Nuevo User '.$r['nombre_empleado'].'</h2>
                        </div>
                        <div class="modal-body">
                            <form action="procesos/modificar_pagina.php" method="POST">
                        ';
                        
                      
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




';
}
 ?>