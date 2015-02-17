<!-- Modal tipos de pizz-->
<?php 
$id_producto=$_POST['q'];
include '../conexion.php';

 $query2 = mysql_query("SELECT * from producto WHERE id_producto ='".$id_producto."' ");
        while($resultado2=mysql_fetch_assoc($query2)){
            echo'
            <div class="modal fade" id="tproductos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel">Agregar '.$resultado2['nombre_producto'].'</h2>
                         
                        </div>
                        <div class="modal-body">';
                        echo ' 
                                <div class="row show-grid">
                                         <div class="col-md-12">
                                            <input type="number" id="cantidad2" class="form-control" value="1" min="1" required="required">
                                        </div>
                                </div>';
                              
                            echo'
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="comprar_producto('.$resultado2['id_producto'].',2)">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
           <!-- 
            <style>
            #tproductos .modal-dialog { width:45%; margin-top:10%;}
            </style>
            -->

        ';
                                           
        }

?>