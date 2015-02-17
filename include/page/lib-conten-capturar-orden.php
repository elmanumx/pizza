
<div id="page-inner">
            
    <div class="row">
           
<div class=" col-md-12 col-sm-12 col-xs-12">
          <div class ="col-md-12 col-sm-12 col-xs-12">
                <a href="mostrar_mesas.php" class="btn bg-color-red btn-lg btn-block">
                <i class="icon-th-large icon-1x"></i>
                    Menu anterior 
                </a>

            </div>  <br><br><br><br>
        
            <div class="col-md-3 col-sm-12 col-xs-12" id="space">
               <button class="btn btn-danger btn-lg btn-block" data-toggle="modal"  data-target="#add_pizza">
                    <i class="icon-inbox icon-5x"></i><br>
                    <label>Agregar Pizza</label>
                </button>
            </div>

            <div class="col-md-3 col-sm-12 col-xs-12" id="space">
             
                <button class="btn btn-danger btn-lg btn-block" data-toggle="modal"  data-target="#add_producto">
                    <i class="icon-coffee icon-5x"></i><br>
                    <label>Agregar Extras</label>
                </button>
            </div>

            <div class="col-md-3 col-sm-12 col-xs-12" id="space">
             
                <button class="btn btn-danger btn-lg btn-block" data-toggle="modal"  data-target="#add_comb">
                    <i class="icon-caret-left icon-5x"></i>
                    <i class="icon-caret-right icon-5x"></i><br>
                    <label>Agregar Pizza Combinada</label><br>
                </button>
            </div>

              <div class="col-md-3 col-sm-12 col-xs-12" id="space">
               <button class="btn btn-danger btn-lg btn-block" data-toggle="modal"  data-target="#add_pizza">
                    <i class="icon-certificate icon-5x"></i><br>
                    <label>Promociones</label>
                </button>
            </div>

</div>
</div>

<div class="row" id="space">
 <div class ="col-md-12 col-sm-12 col-xs-12">


<!--<div id="myDiv"></div>-->

<div id="myDiv2">
<?php print_tabla(); ?>
</div>

</div> <!-- End row-->


 

    </div>
             <!-- /. PAGE INNER  -->

<?php 
    include 'procesos/conexion.php';
    $query = mysql_query("SELECT * from pizza");


 ?>
        
             <!-- modal pizaa-->
             <div class="modal fade" id="add_pizza" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel">Agregar Pizza</h2>
                         
                        </div>
                        <div class="modal-body">
                             <div class="row show-grid">
           
                                <?php  

                                    while($resultado=mysql_fetch_assoc($query)){ 
                                        echo ' 
                                        <div class="col-md-3 col-sm-12 col-xs-12">

                                        <button id ="boton" class="btn btn-lg bg-color-red all" data-dismiss="modal" onclick="load_tpizzas('.$resultado['id_pizza'].')">
                                            <i class="icon-plus-sign icon-2x"></i><br>
                                            '.$resultado['nombre_pizza'].'
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
             <div class="modal fade" id="add_producto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel">Agregar Mas</h2>
                        </div>
                        <div class="modal-body">
                             <div class="row show-grid">
           
                                <?php  
                                $query2 = mysql_query("SELECT * from producto");
                                     while($resultado2=mysql_fetch_assoc($query2)){
                                      
                                        echo ' 
                                        <div class="col-md-3 col-sm-12 col-xs-12">

                                        <button id ="boton" class="btn btn-lg bg-color-red all" data-dismiss="modal" onclick="load_tproductos('.$resultado2['id_producto'].')">
                                            <i class="icon-plus-sign icon-2x"></i><br>
                                           '.$resultado2['nombre_producto'].'
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
                             <div class="row show-grid"><!---->
                                <div class="col-md-8">
                                    <div class="btn-group" data-toggle="buttons">
                                    <?php
                                        $query = mysql_query("SELECT * from pizza where nombre_pizza='combinada'");
                                        $resultado=mysql_fetch_assoc($query);
                                        $id_pizza=$resultado['id_pizza'];
                                        $query1 = mysql_query("SELECT * from lista_pizza,tamano WHERE lista_pizza.id_tamano=tamano.id_tamano and lista_pizza.id_pizza='".$id_pizza."'");
                                        $cont=0;
                                        while($resultado2=mysql_fetch_assoc($query1)){
                                        if($cont==0){
                                            echo'
                                                <label class="btn active">
                                                    <input type="radio" value="'.$resultado2['id_tamano'].'" name="tamano2" checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i> '.$resultado2['nombre_tamano'].'
                                                </label>
                                            ';
                                            }else{
                                                echo'
                                                    <label class="btn active">
                                                        <input type="radio" value="'.$resultado2['id_tamano'].'" name="tamano2"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i> '.$resultado2['nombre_tamano'].'
                                                    </label>
                                                ';  
                                            }
                                            $cont++;

                                        }
                                     ?>
                                    </div>        
                                </div>
                            <div class="col-md-4">
                                <input type="number" class="form-control input-lg" id="cantidad_pc" min="1" value="1">
                            </div>

                             <?php 

                                $query = mysql_query("SELECT * from pizza where nombre_pizza<>'combinada' ");
                             echo' 
                                <div class="col-md-6">
                                    <select name="pizza1" id="select1" class="form-control input-lg" required="required">';
                                    while($resultado=mysql_fetch_assoc($query)){ 
                                    echo'
                                        <option value="'.$resultado['nombre_pizza'].'">'.$resultado['nombre_pizza'].'</option>
                                    ';
                                    }
                                    echo '</select>
                                    </div>';

                                $query = mysql_query("SELECT * from pizza where nombre_pizza<>'combinada' ");
                            echo' 
                                <div class="col-md-6">
                                    <select name="pizza2" id="select2" class="form-control input-lg" required="required">';
                                    while($resultado=mysql_fetch_assoc($query)){ 
                                    echo'
                                        <option value="'.$resultado['nombre_pizza'].'">'.$resultado['nombre_pizza'].'</option>
                                    ';
                                    }
                                    echo '</select>
                                    </div>';
                             ?>
                                    <div class="col-md-12">
                                        <div class="checkbox checkbox-info checkbox-circle">
                                                <input id ="checkc" type="checkbox" onclick="checar_extrasc(this)">
                                            <label for="checkc">
                                                Extras
                                            </label>
                                        </div>
                                    </div>

                                     <div class="col-md-12" id="div_extrac" style="display:none">
                                           <?php 
                                           $query5 = mysql_query("SELECT * from ingrediente");
                                            while($resultado5=mysql_fetch_assoc($query5)){
                                                $resultado5=mysql_fetch_assoc($query5);
                                                        echo'
                                                            <div class="checkbox checkbox-info checkbox-circle">
                                                                    <input id="check'.$resultado5['id_ingrediente'].'" name="checkedsc" type="checkbox" value="'.$resultado5['nombre_ingrediente'].'">
                                                                <label for="check'.$resultado5['id_ingrediente'].'">
                                                                    '.$resultado5['nombre_ingrediente'].'
                                                                </label>
                                                            </div>
                                                        ';
                                                    }
                                             ?>   
                                        </div>

                            </div><!---->
                         </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="button" id="comprarc"class="btn btn-primary" onclick="combinada(<?php echo $id_pizza; ?>,3)" data-dismiss="modal" >Aceptar</button>
                            <button style="display:none" id="extrac" type="button" class="btn btn-primary" data-dismiss="modal" onclick="enviar_con_extra_combinada(<?php echo $id_pizza; ?>,3)">Agregar Extra</button>

                        </div>
                    </div>
                </div>
            </div>




    <!-- modal de agregar producto-->
    <?php  
    /*
    $query2 = mysql_query("SELECT * from producto");
        while($resultado2=mysql_fetch_assoc($query2)){
            echo'
            <div class="modal fade" id="tproductos'.$resultado2['id_producto'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
            #tproductos'.$resultado2['id_producto'].' .modal-dialog { width:45%; margin-top:10%;}
            </style>
            -->

        ';
                                           
        }



*/

                                
    ?>