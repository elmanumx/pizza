<?php 
include '../funciones.php';
$id_cating=$_POST['q'];
echo ' 
<!-- modal Modificar empleados-->
    <div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 align ="center" class="modal-title" id="myModalLabel">Modificar Categoria ###</h4>
                        </div>
                        <div class="modal-body">
                            <form action="procesos/modificar_categoria_ingrediente.php" method="POST">
                        ';
                        form_categoria_ingrediente($id_cating);
                      
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
                        <h3>Desea Eliminar la categoria ###</h3>
                            <form action="procesos/baja_categoria_ingrediente.php" method="POST">
                            <input type="hidden" value="'.$id_cating.'" name="id_categoria_ingrediente"/>
                            <input type="hidden" value="###" name="nombre"/>
                         
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            
                            <input type="submit" class ="btn btn-primary" name="enviar" value="Eliminar"/>
                            </form>
                        </div>  
                </div>  
            </div>
        </div>
    </div>

<style>
#baja .modal-dialog { width:30%; margin-top:10%;}
</style>

';
 ?>