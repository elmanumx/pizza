<?php 
include 'procesos/conexion.php';

$ejecutar = "select * from categoria_pagina where status_categoria_pagina='1'";
$resultado=mysql_query($ejecutar);

 ?>


<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="35%">id </th>
                                            <th width="35%">Nombre</th>
                                            <th width="30%">Operacion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <?php 
                                            while ($r=mysql_fetch_assoc($resultado)) {
                                                echo ' 
                                                <tr>
                                                    <td>'.$r['id_categoria_pagina'].'</td>
                                                    <td>'.$r['nombre_categoria_pagina'].'</td>
                                                     <td style="text-align: center; ">
                                                     <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12"> 
                                                             <button type="button" class="btn btn-warning btn-lg btn-block" onclick="load_catpage('.$r['id_categoria_pagina'].',1)">
                                                                <i class="icon-edit icon-2x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <button type="button" class="btn btn-danger btn-lg btn-block" onclick="load_catpage('.$r['id_categoria_pagina'].',2)">
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
$ejecutar = "select * from categoria_pagina where status_categoria_pagina='1'";
$resultado=mysql_query($ejecutar);

while ($r=mysql_fetch_assoc($resultado)) {
/*echo ' 
<!-- modal Modificar categoria page-->
             <div class="modal fade" id="modificar'.$r['id_categoria_pagina'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 align="center"class="modal-title" id="myModalLabel">Modificar Categoria "'.$r['nombre_categoria_pagina'].'"</h4>
                        </div>
                        <div class="modal-body">
                            <form action="procesos/modificar_categoria_pagina.php" method="POST">
                        ';
                        form_categoria_paginas($r['id_categoria_pagina']);
                      
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


<!-- modal Eliminar categoria page-->
             <div class="modal fade" id="baja'.$r['id_categoria_pagina'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <h2 class="modal-title" id="myModalLabel"></h2>
                        </div>
                        <div class="modal-body" style="text-align: center; ">
                        <h4>Desea Eliminar la categoria "'.$r['nombre_categoria_pagina'].'"</h4>
                        <form action="procesos/baja_categoria_pagina.php" method="POST">
                        <input type="hidden" value="'.$r['id_categoria_pagina'].'" name="id_categoria"/>
                        
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            
                            <input type="submit" class ="btn btn-primary" name="enviar" value="Eliminar"/>
                            </form>    
                        
                    </div>
                </div>
            </div>
</div>
<style>
#baja'.$r['id_categoria_pagina'].' .modal-dialog { width:30%; margin-top:10%;}
</style>

';*/
}
 ?>