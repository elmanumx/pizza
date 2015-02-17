<!-- Modal tipos de pizz-->
<?php 
$id_pizza=$_POST['q'];
include '../conexion.php';

        echo'
            <div class="modal fade" id="tpizza" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="myModalLabel">Agregar Pizza</h2>
                         
                        </div>
                        <div class="modal-body">';
                             $query2 = mysql_query("SELECT * from lista_pizza,tamano WHERE lista_pizza.id_tamano=tamano.id_tamano and lista_pizza.id_pizza='".$id_pizza."'");
                                echo ' 
                                <div class="row show-grid">
                                    <div class="col-md-12">
                                        <div class="btn-group" data-toggle="buttons"> ';    
                                        $cont=0;
                                        while($resultado2=mysql_fetch_assoc($query2)){ 
                                            if($cont==0){
                                            echo'
                                                <label class="btn active">
                                                    <input type="radio" value="'.$resultado2['id_tamano'].'" name="tamano" checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i> '.$resultado2['nombre_tamano'].'
                                                </label>
                                            ';
                                            }else{
                                                echo'
                                                    <label class="btn active">
                                                        <input type="radio" value="'.$resultado2['id_tamano'].'" name="tamano"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i> '.$resultado2['nombre_tamano'].'
                                                    </label>
                                                ';  
                                            }
                                            $cont++;


                                        }
                                echo'
                                </div>
                                    </div>
                                         <div class="col-md-12">
                                            <input type="number" id="cantidad" class="form-control" value="1" min="1" required="required">
                                        </div>
                                         <div class="col-md-12">
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="checkbox2" type="checkbox" onclick="checar_extras(this)">
                                                <label for="checkbox2">
                                                    Extras
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="div_extra" style="display:none">';
                                            $ingrediente= array();
                                            $query2 = mysql_query("SELECT DISTINCT lista_ingrediente.id_lista_ingrediente FROM lista_ingrediente,lista_pizza WHERE lista_pizza.id_lista_pizza = lista_ingrediente.id_lista_pizza AND lista_pizza.id_pizza = '".$id_pizza."'");
                                    
                                            while($resultado2=mysql_fetch_assoc($query2)){
                                                $query13 = mysql_query("SELECT DISTINCT ingrediente.id_ingrediente,ingrediente.nombre_ingrediente FROM ingrediente,lista_ingrediente WHERE lista_ingrediente.id_ingrediente = ingrediente.id_ingrediente AND lista_ingrediente.id_lista_ingrediente ='".$resultado2['id_lista_ingrediente']."'");
                                                $resultado13=mysql_fetch_assoc($query13);

                                                    if(!in_array($resultado13['nombre_ingrediente'], $ingrediente)){
                                                        $ingrediente[]=$resultado13['nombre_ingrediente'];

                                                    }
                                             }
                                           for($i=0; $i<count($ingrediente); $i++){
                                                        echo'
                                                            <div class="checkbox checkbox-info checkbox-circle">
                                                                <input id="check2'.$ingrediente[$i].'" name="checkeds" type="checkbox" value="'.$ingrediente[$i].'">
                                                                <label for="check2'.$ingrediente[$i].'">
                                                                    '.$ingrediente[$i].'
                                                                </label>
                                                            </div>
                                                        ';
                                                    }
                                             
                                             echo'   
                                        </div>
                                </div>';
                              
                            echo'
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button id="comprar" type="button" class="btn btn-primary" data-dismiss="modal" onclick="comprar_pizza('.$id_pizza.',1)">Agregar</button>
                            <button style="display:none" id="extra" type="button" class="btn btn-primary" data-dismiss="modal" onclick="enviar_con_extras('.$id_pizza.',1)">Agregar Extra</button>
                        </div>
                    </div>
                </div>
            </div>
           <!-- 
            <style>
            #pizza'.$id_pizza.' .modal-dialog { width:60%; margin-top:10%;}
            </style>
            -->

        ';

    


 ?>