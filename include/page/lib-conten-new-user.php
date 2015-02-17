<div id="page-inner">
	<div class="row">
	    
	    <div class="col-md-12 col-sm-12 col-xs-12">         
	     	 <div class="panel panel-primary text-center no-boder bg-color-green">
	          	<div class="panel-body" style="font-size:20px;">
	                <i class="icon-user icon-1x"></i>
	             	 Nuevo Usuario
	        	 </div>
	     	 </div>                        
	    </div>
	

		<div class="col-md-12 col-sm-12 col-xs-12">

			<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Agregar usuario
                        </div>
                        <div class="panel-body">
                            <?php 
                                include 'include/form/lib-form-new-user.php';
                             ?>
                             <input type="submit" class ="btn-primary btn-lg btn-block" name="Guardar" value = "Guardar">
                            </form>
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


                     <!-- modal }pages-->
             <div class="modal fade" id="add_pages" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel">Agregar Pagina</h2>
                        </div>
                        <div class="modal-body">
                            <form action="procesos/guardar_pagina.php" method="POST">
                            <?php 
                                include 'include/form/lib-form-agregar-pages.php';
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