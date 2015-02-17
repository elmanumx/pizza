<div id="page-inner">
	<div class="row">
	    
	    <div class="col-md-8 col-sm-12 col-xs-12">         
	     	 <div class="panel panel-primary text-center no-boder bg-color-green">
	          	<div class="panel-body" style="font-size:20px;">
	                <i class="icon-file-alt icon-1sx"></i>
	             	 Categorias de puestos
	        	 </div>
	     	 </div>                        
	    </div>
	
		<div class="col-md-4 col-sm-12 col-xs-12">
			<button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#add_cargos">
			<i class="icon-plus-sign icon-2x">
				Nueva Categoria</i>
			</button>
		</div>

		<div class="col-md-12 col-sm-12 col-xs-12">

			<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Categoria de Puestos
                        </div>
                        <div class="panel-body">
                            <?php 
                                include 'include/lista/lista-conten-cargo-empleados.php';
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


                     <!-- modal }pages-->
             <div class="modal fade" id="add_cargos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel">Agregar Pagina</h2>
                        </div>
                        <div class="modal-body">
                            <form action="procesos/guardar_cargo_empleado.php" method="POST">
                            <?php 
                                include 'include/form/lib-form-agregar-cargo-empleados.php';
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