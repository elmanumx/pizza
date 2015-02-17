

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="30%"></th>
                                            <th width="70%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>NOMBRE DE LA PIZZA</td>
                                            <td><input type="text" class="form-control" name="nombre_pizza" placeholder="Escriba el nombre de la pizza"/>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>DESCRIPCION</td>
                                            <td><textarea class="form-control" name="desc_pizza" rows="4" cols="35" placeholder="Escriba una pequeña descripcion" ></textarea></td>
                                        </tr>           

                                        <tr>
                                            <td>IMAGEN DE LA PIZZA</td>
                                             <td><input type="file" class="btn btn-success form-control" name="imagen_pizza" size="30"  /></td>
                                        </tr>           
                                        
                                        <tr>
                                            <th colspan="2">TAMAÑO Y PRECIO DE LA PIZZA</th>
                                            <tr>        
                                            <?php
                                            include 'procesos/conexion.php';
                                            echo '<table VALIGN=CENTER class="table table-striped table-bordered table-hover">';
                                            $query=mysql_query("SELECT * FROM tamano where status_tamano='1'");
                                            $count=0;
                                            while ($ejecutar=mysql_fetch_assoc($query)) {
                                                if($count%2==0){
                                                  echo '<tr><td><input id="'.$count.'" type="checkbox" class="form-control" name="lista_p['.$count.'][1]" value='.$ejecutar['id_tamano'].' onclick="validacheck(this.id)"> '.$ejecutar['nombre_tamano'].'<br>
                                                    <input id="'.$count.''.''.$count.'" type="hidden" class="form-control" name="lista_p['.$count.'][2]" placeholder="precio" min="1" step="0.01" required onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/></td>
                                                ';
                                                }
                                                else{
                                                  echo '<td><input id="'.$count.'" type="checkbox" class="form-control" name="lista_p['.$count.'][1]" value='.$ejecutar['id_tamano'].' onclick="validacheck(this.id)"> '.$ejecutar['nombre_tamano'].'<br>
                                                    <input id="'.$count.''.''.$count.'" type="hidden" class="form-control" name="lista_p['.$count.'][2]" placeholder="precio" min="1" step="0.01" required onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/></td>
                                                ';  
                                                }   
                                                $count++;
                                             }  
                                             echo '</table';    
                                             ?>
                                        </tr>
                                    </tbody>
                                </table>
