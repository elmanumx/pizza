<div id="page-inner">
    <div class="row">
        
        <div class="col-md-8 col-sm-12 col-xs-12">         
             <div class="panel panel-primary text-center no-boder bg-color-green">
                <div class="panel-body" style="font-size:20px;">
                     <i class="icon-coffee icon-1x"></i>
                     Productos
                 </div>
             </div>                        
        </div>
    
        <div class="col-md-4 col-sm-12 col-xs-12">
            <button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#add_producto">
            <i class="icon-plus-sign icon-2x">
                Nuevo Producto</i>
            </button>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Producto
                        </div>
                        <div class="panel-body">
                            <?php 
                                include 'include/lista/lista-conten-productos.php';
                             ?>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>           



        </div>

    </div>   
          

    </div>
             <!-- /. PAGE INNER  -->



                   <!-- modal producto-->
             <div class="modal fade" id="add_producto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel">Agregar Producto</h2>
                        </div>
                        <div class="modal-body">
                            <form action="procesos/guardar_producto.php" method="POST" enctype="multipart/form-data">
                            <?php 
                                include 'include/form/lib-form-agregar-producto.php';
                             ?>
                                                      </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" name="img_pro" value="Guardar">Aceptar</button>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
