<?php 
$ejecutar = "select * from producto";
$resultado=mysql_query($ejecutar); 
?>


<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Existencia</th>
                                            <th>Operacion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                            while ($r=mysql_fetch_assoc($resultado)) {
                                                echo ' 
                                                <tr>
                                                    <td>'.$r['nombre_producto'].'</td>
                                                     <td>'.$r['descripcion_producto'].'</td>
                                                     <td>'.$r['existencia_actual_producto'].'</td>
                                                    </td>
                                                     <td style="text-align: center; ">
                                                     <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12"> 
                                                             <button type="button" class="btn btn-warning btn-lg btn-block" onclick="load_pro('.$r['id_producto'].',1)">
                                                                <i class="icon-edit icon-2x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <button type="button" class="btn btn-danger btn-lg btn-block" onclick="load_pro('.$r['id_producto'].',2)">
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
                                </div>


<?php 
$ejecutar = "select * from producto";
$resultado=mysql_query($ejecutar); 

while ($r=mysql_fetch_assoc($resultado)) {
/*echo ' 
<!-- modal Modificar Pizza General-->
             <div class="modal fade" id="modificar'.$r['id_producto'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 align="center" class="modal-title" id="myModalLabel">Modificar Pizza "'.$r['nombre_producto'].'"</h4>
                        </div>
                        <div class="modal-body">
                      
                    <form action="procesos/modificar_producto.php" method="POST" enctype="multipart/form-data">
                        ';
                        form_producto($r['id_producto']);
                      
                        echo'
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            
                            <input type="submit" name="img_pro" value="Guardar" class ="btn btn-primary" />
                            </form>    
                        </div>
                    </div>
        </div>
    </div>
</div>


<!-- modal Eliminar pizza-->
             <div class="modal fade" id="baja'.$r['id_producto'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel"></h2>
                        </div>
                        <div class="modal-body" style="text-align: center; ">
                        <h4>Desea Eliminar la Pizza "'.$r['nombre_producto'].'"</h4>
                        <form action="procesos/#" method="POST">
                        <input type="hidden" value="'.$r['id_producto'].'" name="id_p"/>
                        
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            
                            <input type="submit" class ="btn btn-primary" name="enviar" value="Eliminar"/>
                            </form>    
                        
                    </div>
                </div>
            </div>
</div>
<style>
#baja'.$r['id_producto'].' .modal-dialog { width:30%; margin-top:10%;}
</style>

';*/
}
 ?>