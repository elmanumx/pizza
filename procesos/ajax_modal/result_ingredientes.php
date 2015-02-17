<?php
include '../funciones.php';
$id_ing=$_POST['q']; 
echo ' 
<!-- modal Modificar Ingrediente-->
    <div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 align ="center" class="modal-title" id="myModalLabel">Modificar el ingrediente ###</h4>
                        </div>
                        <div class="modal-body">
                            <form action="procesos/modificar_ingrediente.php" method="POST">
                        ';
                        form_ingrediente($id_ing);
                      
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


';
 ?>