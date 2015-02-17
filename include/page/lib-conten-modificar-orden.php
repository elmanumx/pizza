

<div id="page-inner">
     <h1>Mesa 1</h1>       
    <div class="row show-grid">
           
    <div class=" col-md-6">

          <div class ="col-md-12">
                <a href="index2.php">
                <button type="button" class="btn bg-color-red btn-lg btn-block">
                <i class="icon-th-large icon-1x"></i>
                    Menu anterior
                </button>
                </a>

            </div>  <br><br><br><br>

            <div class="col-md-6">
             
                <button class="btn btn-lg bg-color-red" data-toggle="modal" data-target="#add_pizza">
                    <i class="icon-inbox icon-5x"></i><br>
                    <label>Agregar Pizza</label>
                </button>
            </div>

            <div class="col-md-6">
             
                <button class="btn btn-lg bg-color-red" data-toggle="modal" data-target="#add_extra">
                    <i class="icon-coffee icon-5x"></i><br>
                    <label>Agregar Extras</label>
                </button>
            </div>

            <div class="col-md-6" style="margin-top:20px;">
             
                <button class="btn btn-lg bg-color-red" data-toggle="modal" data-target="#add_comb">
                    <i class="icon-caret-left icon-5x"></i>
                    <i class="icon-caret-right icon-5x"></i><br>
                    <label>Agregar Pizza <br>Combinada</label>
                </button>
            </div>
</div>
            <div class ="col-md-6">


<!--<div id="myDiv"></div>-->

<div class="panel panel-primary" id="myDiv">
<?php
$total=0;
echo '<div class="panel-heading margen">
                           Orden N° 5
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>
                                            </th>
                                            <th>folio</th>
                                            <th>nombre</th>
                                            <th>cantidad</th>
                                            <th>precio</th>
                                            <th>Sub-total</th>
                                    </thead>';

foreach ($_SESSION['carro'] as $k => $v)
{
    $total += $_SESSION['carro'][$k]['subtotal'];
      
    echo "<tr>";
    echo '<td>
             <button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span>
             </button>
        </td>';    
    foreach($v as $j => $z)
    {
        if($z==$_SESSION['carro'][$k]['folio']) {

          
            
        }
        echo "<td>".$z."</td>";
    }       
    echo "</tr>";
}

echo '
<td></td>
<td></td>
<td></td>
<td>Total:</td>

<td>'.$total.'</td>
  </table>
                            </div>

                                    <button class="btn btn-success btn-lg btn-block" onclick="loadXMLDoc(7,55,55)">
                                         <i class="icon-check-sign icon-1x"></i>
                                        <label>Aceptar</label>
                                     </button>
                            </div>
                    </div>';
  ?>
  
   </div> <!-- End row-->


 

    </div>
             <!-- /. PAGE INNER  -->


            
             <!-- modal pizaa-->
             <div class="modal fade" id="add_pizza" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel">Agregar Pizza</h2>
                            
                            <div class="row show-grid">
                                <div class="col-md-6">
                                    <div class="btn-group" data-toggle="buttons">              
                                        <label class="btn active">
                                            <input type="radio" name='gender2' checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i> Chica
                                        </label>
                                        <label class="btn">
                                            <input type="radio" name='gender2'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i> Mediana
                                        </label>
                                        <label class="btn">
                                            <input type="radio" name='gender2'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i> Familiar
                                        </label>
                                    </div>  
                                </div> 
                                <div class="col-md-6">   
                                    <div class=" form-group input-group input-group-lg">
                                      <span class="input-group-addon"></span>
                                      <input type="text" class="form-control" placeholder="Cantidad">
                                    </div>    
                                </div>
                            </div>

                        </div>
                        <div class="modal-body">
                             <div class="row show-grid">
           
                                <?php  
                                    for ($i=1; $i < 11; $i++) { 
                                      
                                        echo ' <div class="col-xs-6 col-md-2">

                                        <button id ="boton" class="btn btn-lg bg-color-red" onclick="loadXMLDoc('.$i.',1,2)"  data-toggle="modal" data-dismiss="modal">
                                            <i class="icon-plus-sign icon-2x"></i><br>
                                            Agregar Pizza
                                        </button>
                                        </div>';
                                           
                                    }
                                
                                ?>
                                </div>
                         </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>





            <!-- modal producto-->
             <div class="modal fade" id="add_extra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel">Agregar Mas</h2>
                        </div>
                        <div class="modal-body">
                             <div class="row show-grid">
           
                                <?php  
                                    for ($i=1; $i < 11; $i++) { 
                                      
                                        echo ' <div class="col-xs-6 col-md-2">

                                        <button id ="boton" class="btn btn-lg bg-color-red" data-toggle="modal"data-dismiss="modal">
                                            <i class="icon-plus-sign icon-2x"></i><br>
                                           Producto'.$i.'
                                        </button>
                                        </div>';
                                           
                                    }
                                
                                ?>
                                </div>
                         </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>







<!-- modal pizaa combinada-->
             <div class="modal fade" id="add_comb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel">Agregar Mitad</h2>
                        </div>
                        <div class="modal-body">
                             <div class="row show-grid">
           
                                <?php  
                                    for ($i=1; $i < 11; $i++) { 
                                      
                                        echo ' <div class="col-xs-6 col-md-2">

                                        <button id ="boton" class="btn btn-lg bg-color-red" data-toggle="modal"data-dismiss="modal">
                                            <i class="icon-plus-sign icon-2x"></i><br>
                                           1/2 Mexicana'.$i.'
                                        </button>
                                        </div>';
                                           
                                    }
                                
                                ?>
                                </div>
                         </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>



