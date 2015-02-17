<?php 

include'procesos/conexion.php';
$query=mysql_query("SELECT * FROM cargo_empleado WHERE status_cargo_empleado='1'");

 ?>
<div class="panel panel-default ">
                        <div class="panel-body">


<div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="30%"></th>
                                            <th width="70%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <tr>
                                            <td>NOMBRE</td>
                                            <td><input type="text" class="form-control" name="nombre_emp" placeholder="Escriba el nombre del emplado" value="<?php if(isset($_POST['nombre_emp'])) echo $_POST['nombre_emp'];?>"/>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>APELLIDO PATERNO</td>
                                            <td><input type="text" class="form-control" name="app_emp" placeholder="Escriba el apellido paterno"/></td>
                                        </tr>

                                        <tr>
                                            <td>APELLIDO MATERNO</td>
                                            <td><input type="text" class="form-control" name="apm_emp" placeholder="Escriba el apellido materno"/></td>
                                        </tr>

                                        <tr>
                                            <td>FECHA DE NACIMIENTO</td>
                                            <td><input type="date" class="form-control" name="fecha_nac" /></td>
                                        </tr>

                                        <tr>
                                            <td>DIRECCION</td>
                                            <td><textarea rows="4" cols="35" placeholder="Escriba direccion del empleado " class="form-control" name="direccion_emp"></textarea></td>
                                        </tr>           

                                        <tr>
                                            <td>RFC</td>
                                            <td><input type="text" class="form-control" name="rfc_emp" placeholder="Escriba el rfc del empleado"  /></td>
                                        </tr>

                                        <tr>
                                            <td>NUMERO DE TELEFONO</td>
                                            <td><input type="tel" class="form-control" name="telefono_emp" placeholder="Escriba el telefono del empleado" /></td>
                                        </tr>

                                        <tr>
                                            <td>PUESTO</td>
                                            <td><select class="form-control" name="cargo_emp" >
                                            <?php 
                                            while($ejecutar=mysql_fetch_assoc($query)){
                                                echo '<option value='.$ejecutar['id_cargo_empleado'].' >'.$ejecutar['nombre_cargo_empleado'].'</option>';
                                            }
                                             ?>
                                                </select></td>
                                        </tr>

                                        <tr>
                                            <td>OPCIONES DE VENTAS</td>
                                            <td>
                                                        <?php 
                                                    $query2=mysql_query("SELECT pagina.* FROM pagina,categoria_pagina WHERE categoria_pagina.id_categoria_pagina=pagina.id_categoria_pagina and categoria_pagina.nombre_categoria_pagina = 'venta'");
                                                    while($r=mysql_fetch_assoc($query2)){?>
                                                        <?php echo $r['nombre_pagina']; ?><input type="checkbox" name="grupo_venta[]" value='<?php echo $r['id_pagina']; ?>'>                                                    
                                                <?php }?>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>EL EMPLEADO TENDRA ACCESO AL SISTEMA</td>
                                            <td>
                                            <label>
                                                    Si<input type="radio" name="acceso_emp" value="si"/>
                                            </label>
                                            <label>
                                                    NO<input type="radio" name="acceso_emp" value="no" checked/>
                                            </label>
                                            </td>
                                        </tr>   
                                     </table>

</div>
</div>

