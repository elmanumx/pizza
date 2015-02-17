<div class="panel panel-default text-center">
                        <div class="panel-body">


<div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <td>NOMBRE DEL INGREDIENTE</td>
                                        <td><input type="text" class="form-control" name="nombre_i" placeholder="Escriba el nombre del ingrediente"/></td>
                                        </tr>

                                        <tr>
                                        <td>UNIDAD DE MEDIDA</td>
                                            <td><select class="form-control" name="medida_i" >
                                        
                                        <?php
                                        $consulta="SELECT * FROM medida_ingrediente where status_medida_ingrediente='1'";
                                        $resultado = mysql_query($consulta);
                                            while ($r=mysql_fetch_assoc($resultado))
                                                {
                                                echo'<option value='.$r['id_medida_ingrediente'].'>'.$r['nombre_medida_ingrediente'].'</option>';
                                                }
                                         ?>
                                                </select></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>CATEGORIA</td>
                                            <td><select class="form-control" name="categoria_i" >
                                        
                                        <?php
                                        $consulta="SELECT * FROM categoria_ingrediente where status_categoria_ingrediente='1'";
                                        $resultado = mysql_query($consulta);
                                            while ($r=mysql_fetch_assoc($resultado))
                                                {
                                                echo'<option value='.$r['id_categoria_ingrediente'].'>'.$r['nombre_categoria_ingrediente'].'</option>';
                                                }
                                         ?>
                                                </select></td>
                                        </tr>

                                        <tr>
                                        <td>CANTIDAD ACTUAL</td>
                                        <td><input type="number" class="form-control" name="cantidad_actual_i" value="1" /></td>
                                        </tr>


                                        <tr>
                                        <td>CANTIDAD MINIMA</td>
                                        <td><input type="number" class="form-control" name="cantidad_minima_i" value="1" /></td>
                                        </tr>

                                    </tbody>
                                </table>

</div>
</div>

