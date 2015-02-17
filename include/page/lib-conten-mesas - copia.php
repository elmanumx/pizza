<div id="page-inner">
	<div class="row">
	    
	    <div class="col-md-12 col-sm-12 col-xs-12">                       
	                  
	                    <div class="panel panel-primary text-center no-boder bg-color-green">
	                        <div class="panel-body" style="font-size:20px;">
	                            Selecionar Mesa
	                        </div>
	                    </div>                        
	    </div>
	</div>        
<?php 
echo '
<div class="row">
';
for ($i=0; $i < 11; $i++) { 
    echo '


  
 <div class="col-md-3 col-sm-12 col-xs-12">                       
                  
                    <div class="panel panel-primary text-center no-boder bg-color-green">
                        <div class="panel-body">
                            <a href = "modificar_orden.php" type="button" class="btn btn-success btn-circle"><i class="icon-edit icon-5x"></i> <h3>Mesa N° '.$i.' </h3>
                            </a>
                           
                        </div>
                    </div>                        
</div>


';
}
echo '
</div>';



 ?>


          

    </div>
             <!-- /. PAGE INNER  -->