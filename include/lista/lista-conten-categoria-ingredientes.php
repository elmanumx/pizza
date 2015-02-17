
<?php 
include 'procesos/conexion.php';

$ejecutar = "select * from categoria_ingrediente where status_categoria_ingrediente='1'";
$resultado=mysql_query($ejecutar);

 ?>






<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="50%">Nombre </th>
                                            <th width="50%">Operacion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            while ($r=mysql_fetch_assoc($resultado)) {
                                                echo ' 
                                                <tr>
                                                    <td>'.$r['nombre_categoria_ingrediente'].'</td>
                                                    </td>
                                                     <td style="text-align: center; ">
                                                     <div class="row">
                                                        <div class="col-md-3 col-sm-12 col-xs-12"> 
                                                             <button type="button" class="btn btn-warning btn-lg btn-block" onclick="load_cing('.$r['id_categoria_ingrediente'].',1)">
                                                                <i class="icon-edit icon-2x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-3 col-sm-12 col-xs-12">
                                                        <button type="button" class="btn btn-danger btn-lg btn-block" onclick="load_cing('.$r['id_categoria_ingrediente'].',2)">
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
$ejecutar = "select * from categoria_ingrediente where status_categoria_ingrediente='1'";
$resultado=mysql_query($ejecutar);

while ($r=mysql_fetch_assoc($resultado)) {
/*echo ' 
<!-- modal Modificar empleados-->
    <div class="modal fade" id="modificar'.$r['id_categoria_ingrediente'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 align ="center" class="modal-title" id="myModalLabel">Modificar Categoria "'.$r['nombre_categoria_ingrediente'].'"</h4>
                        </div>
                        <div class="modal-body">
                            <form action="procesos/modificar_categoria_ingrediente.php" method="POST">
                        ';
                        form_categoria_ingrediente($r['id_categoria_ingrediente']);
                      
                        echo'
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            
                            <input type="submit" class ="btn btn-primary" name="enviar" value="Guardar"/>
                            </form> 
                        </div>
            </div>
        </div>
    </div>


<!-- modal Eliminar empleado-->
    <div class="modal fade" id="baja'.$r['id_categoria_ingrediente'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel"></h2>
                        </div>
                        <div class="modal-body" style="text-align: center; ">
                        <h3>Desea Eliminar la categoria "'.$r['nombre_categoria_ingrediente'].'"</h3>
                            <form action="procesos/baja_categoria_ingrediente.php" method="POST">
                            <input type="hidden" value="'.$r['id_categoria_ingrediente'].'" name="id_categoria_ingrediente"/>
                            <input type="hidden" value="'.$r['nombre_categoria_ingrediente'].'" name="nombre"/>
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
#baja'.$r['id_categoria_ingrediente'].' .modal-dialog { width:30%; margin-top:10%;}
</style>

';*/
}
 ?>