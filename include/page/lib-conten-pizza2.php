

<div id="page-inner">
    <div class="row">
        
        <div class="col-md-8 col-sm-12 col-xs-12">         
             <div class="panel panel-primary text-center no-boder bg-color-green">
                <div class="panel-body" style="font-size:20px;">
                     <i class="icon-inbox icon-1x"></i>
                     Pizzas
                 </div>
             </div>                        
        </div>
    
        <div class="col-md-4 col-sm-12 col-xs-12">
            <button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#add_pizza">
            <i class="icon-plus-sign icon-2x">
                Nueva Pizza </i>
            </button>
         
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Pizzas
                        </div>
                        <div class="panel-body">
                            <?php 
                               include 'include/lista/lista-conten-pizzas.php';
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
             <div class="modal fade" id="add_pizza" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel">Agregar pizza</h2>
                        </div>
                        <div class="modal-body">
                                <form action="procesos/guardar_pizza.php" method="POST" enctype="multipart/form-data">
                            <?php 
                                include 'include/form/lib-form-agregar-pizza.php';
                             ?>
                         </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <input type="submit" name="enviar" class = "btn btn-primary" value="Guardar"/>
                             </form>
                        
                        </div>
                    </div>
                </div>
            </div>



   <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel">Agregar pizza</h2>
                        </div>
                        <div class="modal-body">
                                <form action="procesos/guardar_pizza.php" method="POST" enctype="multipart/form-data">
                            <?php
                          for($i=0;$i<count($_SESSION['arrayv']);$i++)
                       {
                        $lista_tam[$count]= $_SESSION['arrayv'][$i];

                       }
                                dibujar_form($lista_tam);
                             ?>
                         </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <input type="submit" name="enviar" class = "btn btn-primary" value="Guardar"/>
                             </form>
                        
                        </div>
                    </div>
                </div>
            </div>
  