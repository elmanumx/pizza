<?php 
include 'procesos/conexion.php';

$ejecutar = "select * from ingrediente";
$resultado=mysql_query($ejecutar);

 ?>

<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Unidad de Medida</th>
                                            <th>Cantidad</th>
                                            <th>Operacion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          
                                        <?php 
                                            while ($r=mysql_fetch_assoc($resultado)) {
                                                echo ' 
                                                <tr>
                                                    <td>'.$r['nombre_ingrediente'].'</td>
                                                    <td>';
                                                        $ejecutar2 = "select * from categoria_ingrediente where id_categoria_ingrediente='".$r['id_categoria_ingrediente']."' ";
                                                        $resultado2=mysql_query($ejecutar2);
                                                        $r2=mysql_fetch_assoc($resultado2);
                                                    echo '
                                                    '.$r2['nombre_categoria_ingrediente'].'
                                                    </td>
                                                     <td>'.$r['cantidad_actual_ingrediente'].'</td>
                                                     <td style="text-align: center; ">
                                                     <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12"> 
                                                             <button type="button" class="btn btn-warning btn-lg btn-block" onclick="load_ing('.$r['id_ingrediente'].',1)">
                                                                <i class="icon-edit icon-2x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <button type="button" class="btn btn-danger btn-lg btn-block" onclick="load_ing('.$r['id_ingrediente'].',2)">
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
$ejecutar = "select * from ingrediente";
$resultado=mysql_query($ejecutar);

while ($r=mysql_fetch_assoc($resultado)) {
/*echo ' 
<!-- modal Modificar Ingrediente-->
    <div class="modal fade" id="modificar'.$r['id_ingrediente'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 align ="center" class="modal-title" id="myModalLabel">Modificar el ingrediente "'.$r['nombre_ingrediente'].'"</h4>
                        </div>
                        <div class="modal-body">
                            <form action="procesos/modificar_ingrediente.php" method="POST">
                        ';
                        form_ingrediente($r['id_ingrediente']);
                      
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


';*/
}
?>