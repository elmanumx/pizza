<?php 
include '../funciones.php';
$id_cemp=$_POST['q'];

echo '
<!-- modal Modificar Cargo Empleados-->
             <div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 align="center" class="modal-title" id="myModalLabel">Modificar puesto ###</h4>
                        </div>
                        <div class="modal-body">
                            <form action="procesos/modificar_cargo_empleado.php" method="POST">
                        ';
                        form_cargo_emp($id_cemp);
                      
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
             <div class="modal fade" id="baja" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel"><h2>
                        </div>
                        <div class="modal-body" style="text-align: center; ">
                        <h3>Desea Eliminar el puesto ###</h3>
                        <form action="procesos/baja_cargo_empleado.php" method="POST">
                        <input type="hidden" value="'.$id_cemp.'" name="id_cargo_empleado"/>
                        <input type="hidden" value="###" name="nombre_c_e"/>
                        
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            
                            <input type="submit" class ="btn btn-primary" name="enviar" value="Eliminar"/>
                            </form>    
                        
                    </div>
                </div>
            </div>
</div>
<style>
#baja .modal-dialog { width:30%; margin-top:10%;}
</style>

';

?>

