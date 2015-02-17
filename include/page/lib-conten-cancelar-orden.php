<div id="page-inner">      
    <div class="row">
        
        <div class="col-md-12 col-sm-12 col-xs-12">                       
                      
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body" style="font-size:20px;">
                                <i class="icon-remove-sign icon-1x"></i>
                                Seleccione una mesa para cancelar una orden
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
                  
                    <div class="panel panel-primary text-center no-boder bg-color-red">
                        <div class="panel-body">
                            
                            <button class="btn btn-danger btn-circle" data-toggle="modal" data-target="#t'.$i.'"><br>
                            <i class="icon-remove-sign icon-5x"></i></i> <h4> Mesa N° '.$i.' </h4>
                            </button>
                                              
                        </div>
                    </div>                        
</div>
';
echo '
             <div class="modal fade" id="t'.$i.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel">Mesa N° '.$i,'</h2>
                        </div>
                        <div class="modal-body">
                             <div class="row show-grid">
             
           
                                      
                                       ';
                                        for ($j=0; $j <= 1; $j++) { 
                                            # code...
                                       

                                                   echo '
                                            <div class="col-sm-6 col-md-6">
                                                   <div class="panel panel-primary" id="myDiv">
                                                        <div class="panel-heading margen">
                                                        Orden N° '.$j.'
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>folio</th>
                                                                                <th>nombre</th>
                                                                                <th>cantidad</th>
                                                                                <th>precio</th>
                                                                                <th>Sub-total</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>2</td>
                                                                        <td>2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Total:</td>
                                                                        <td>4</td>
                                                                    </tr></tbody>
                                                                </table>
                                                            </div>

                                                            <button class="btn btn-danger btn-lg btn-block">
                                                                <i class="icon-remove-sign icon-1x"></i>
                                                                <label>Cancelar</label>
                                                                </button>
                                                        </div>
                                                    </div>

                                                </div>';  
                                       
 }
echo'
                                    
                                           
                                  
                                
                               
                                </div>
                         </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Aceptar</button>
                        </div>
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

<?php 
for ($i=0; $i < 11; $i++) { 
    # code...
}             ?>