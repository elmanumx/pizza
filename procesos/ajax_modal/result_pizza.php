<?php 
include '../funciones.php';
$id_pizza=$_POST['q'];
echo '
<!-- modal Modificar tamaño de Pizza-->
             <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 align="center" class="modal-title" id="myModalLabel">Modificar la pizza ####</h4>
                        </div>
                        <div class="modal-body">
                    <form action="modificar_lista_pizza.php" method="POST" enctype="multipart/form-data">
                        ';
                       form_tamanomod($id_pizza);
                      
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


echo '
<!-- modal Modificar Pizza General-->
             <div class="modal fade" id="modalmod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 align="center" class="modal-title" id="myModalLabel">Modificar la pizza ####</h4>
                        </div>
                        <div class="modal-body">
                            
                    <form action="procesos/modificar_pizza.php" method="POST" enctype="multipart/form-data">
                        ';
                        form_pizzas($id_pizza);
                      
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
echo'
<!-- modal Eliminar pizza-->
             <div class="modal fade" id="baja" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel"></h2>
                        </div>
                        <div class="modal-body" style="text-align: center; ">
                        <h4>Desea Eliminar la Pizza ####</h4>
                        <form action="procesos/#" method="POST">
                        <input type="hidden" value="'.$id_pizza.'" name="id_p"/>
                        
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
