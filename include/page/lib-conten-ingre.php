<div id="page-inner">
	<div class="row">
	    
	    <div class="col-md-12 col-sm-12 col-xs-12">         
	     	 <div class="panel panel-primary text-center no-boder bg-color-green">
	          	<div class="panel-body" style="font-size:20px;">
	                 <i class="icon-list-ul icon-1x"></i>
	             	 Ingredientes
	        	 </div>
	     	 </div>                        
	    </div>
	
		

		<div class="col-md-12 col-sm-12 col-xs-12">

			<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Ingredientes
                        </div>
                        <div class="panel-body">

                        <div class="table-responsive">
                           <?php 

                            echo'
                <form action="procesos/guardar_lista_ingrediente.php" method="POST">
                    <table class="table table-striped table-bordered table-hover">
                        <tr align="center" valign="middle">
                            <th colspan="5">LISTA DE INGREDIENTES</th>
                        </tr>

                        <tr>
                            <tbody VALIGN=TOP ALIGN=CENTER >
                            ';
                                    $count=0;
                                    $valorj=0;
                                    while ($r=mysql_fetch_assoc($resultado)){
                                        $valor=$r['nombre_ingrediente'];
                                        $id_ingrediente=$r['id_ingrediente'];
                                        $seccion_ingrediente=$r['id_categoria_ingrediente'];

                                        $consulta2="SELECT * FROM categoria_ingrediente where id_categoria_ingrediente='".$seccion_ingrediente."' and status_categoria_ingrediente='1'";
                                        $resultado2 = mysql_query($consulta2);
                                        $r2=mysql_fetch_assoc($resultado2);

                                        if($seccion_ingrediente!=$seccion_ingrediente2){
                                            if($count>0){
                                                echo '
                                                </tr>
                                                </table >';
                                            }
                                                echo '
                                                <tr>
                                                <table class="table table-striped table-bordered table-hover>
                                                <tr ><th colspan="'.count($lista_tam).'">'.$r2['nombre_categoria_ingrediente'].'</th></tr>';
                                        }       
                                        $seccion_ingrediente2=$seccion_ingrediente;
                                            echo '<tr>
                                                        <th colspan="5">
                                                            <div class="checkbox checkbox-info checkbox-circle"> 
                                                                <input id="'.$count.'" type="checkbox" name="check" value='.$id_ingrediente.' onclick="valida(this.id,'.count($lista_tam).')">   
                                                                <label for="'.$count.'"> 
                                                                    '.$valor.'
                                                                </label>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>';
                
                                                for ($i=0,$j=$valorj; $i <count($lista_tam) ; $i++,$j++) { 
                                                    $id_lista_p=$lista_tam[$i];
                                                    echo '<br><input class="form-control" type="hidden" name="grupo_cantidad['.$j.'][0]" value='.$id_ingrediente.'>';
                                                    echo '<input class="form-control" type="hidden" name="grupo_cantidad['.$j.'][1]" value='.$id_lista_p.'>';
                                                    $query=mysql_query("SELECT tamano.* FROM tamano,lista_pizza
                                                     where tamano.id_tamano=lista_pizza.id_tamano and id_lista_pizza='".$id_lista_p."'");
                                                    $ejecutar =mysql_fetch_array($query);
                                                    $nombre_tamano=$ejecutar['nombre_tamano'];
                                                    echo '<input class="form-control" id="'.$count.$count.$i.'" type="hidden" name="grupo_cantidad['.$j.'][2]" placeholder="cantidad para '.$nombre_tamano.'" min="1" step="0.01" required onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">';
                                                }
                                                echo '</td></tr>';
                                                $valorj=$j;
                                                $count++;
                                    }
                        echo '
                                </tbody>
                    </table>
                    <tr><td><input  type="submit" class="btn-primary btn-lg btn-block" name="Guardar" value = "Guardar"></td></tr>
                </form>
                    '; 

                            ?>
                            </div> <!-- div table-->
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


   