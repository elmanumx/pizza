<?php 
include 'procesos/conexion.php';

$ejecutar = "select * from empleados where status_empleado='1'";
$resultado=mysql_query($ejecutar);

 ?>






<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="5%">Cve.</th>
                                            <th width="35$">Nombre Completo</th>
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
                                                    <td>'.$r['id_empleado'].'</td>
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
                                                             <button type="button" class="btn btn-warning btn-lg btn-block" onclick="load_emp('.$r['id_empleado'].',1)">
                                                                <i class="icon-edit icon-2x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-3 col-sm-12 col-xs-12">
                                                        <button type="button" class="btn btn-danger btn-lg btn-block" onclick="load_emp('.$r['id_empleado'].',2)">
                                                            <i class="icon-trash icon-2x"></i>
                                                        </button>
                                                        </div> 
                                                        <div class="col-md-3 col-sm-12 col-xs-12">
                                                        <button type="button" class="btn btn-primary btn-lg btn-block ';
                                                           $ejecutar2 = 'select * from usuario where status_usuario="1" and id_empleado="'.$r['id_empleado'].'"';
                                                            $resultado2=mysql_query($ejecutar2);
                                                            if($r2=mysql_fetch_assoc($resultado2)) {
                                                                 echo 'disabled"';   
                                                            }
                                                            else{
                                                                echo '"';
                                                            }
                                                           echo'
                                                            onclick="load_emp('.$r['id_empleado'].',3)">
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
