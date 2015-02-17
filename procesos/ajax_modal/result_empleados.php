<?php 
include '../funciones.php';
$id_empleado=$_POST['q'];
echo ' 
<!-- modal Modificar empleados-->
    <div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 align ="center" class="modal-title" id="myModalLabel">Modificar Empleado ###</h4>
                        </div>
                        <div class="modal-body">
                            <form action="procesos/modificar_empleado.php" method="POST">
                        ';
                        form_empleados($id_empleado);
                      
                        echo'
                       
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            
                            <input type="submit" class ="btn btn-primary" name="enviar" value="Guardar"/>
                            </form> 
                        </div>
                </div> 
            </div>
        </div>
    </div>


<!-- modal Eliminar empleado-->
    <div class="modal fade" id="baja" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel"></h2>
                        </div>
                        <div class="modal-body" style="text-align: center; ">
                        <h3>Desea Eliminar El empleado ###</h3>
                            <form action="procesos/baja_empleado.php" method="POST">
                            <input type="hidden" value="'.$id_empleado.'" name="id_emp"/>
                            <input type="hidden" value="### name="nombre"/>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            
                            <input type="submit" class ="btn btn-primary" name="enviar" value="Eliminar"/>
                            </form>
                        </div>   
                </div> 
            </div>
        </div>
    </div>

<!-- modal new user empleados-->
             <div class="modal fade" id="new_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 align ="center" class="modal-title" id="myModalLabel">Agregar ### como usuario </h4>
                        </div>
                        <div class="modal-body">
                            <form action="procesos/guardar_usuario.php" method="POST">
                        ';
                       
                        form_user_new($id_empleado);
                        echo'
                      
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            
                            <input type="submit" class ="btn btn-primary" name="Guardar" value="Guardar"/>
                            </form>    
                        </div>
                    </div>
                </div>
            </div>
        </div>



<style>
#baja .modal-dialog { width:30%; margin-top:10%;}
</style>

'; ?>