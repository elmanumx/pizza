<div class="panel panel-default text-center">
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
                                        <td>NOMBRE DE LA PAGINA</td>
                                        <td><input type="text" class="form-control" name="nombre_p" placeholder="Escriba el nombre de la pagina"/></td>
                                        </tr>

                                        <tr>
                                        <td>URL DE LA PAGINA</td>
                                        <td><input type="text" class= "form-control" name="url_p" placeholder="Escriba la url de la pagina"/></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>SECCION</td>
                                            <td><select class="form-control" name="seccion_p" >
                                        
                                        <?php

                                        include'procesos/conexion.php';
                                        $consulta="SELECT * FROM categoria_pagina where status_categoria_pagina='1'";
                                        $resultado = mysql_query($consulta);
                                            while ($r=mysql_fetch_assoc($resultado))
                                                {
                                                echo'<option value='.$r['id_categoria_pagina'].'>'.$r['nombre_categoria_pagina'].'</option>';
                                                }
                                         ?>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td>ICONO</td>
                                            <td>
                                                <button type="button" onclick="modal()" class="btn btn-default" data-dismiss="modal">Seleccionar</button>
                                                <input type="text" id="icono" name="icono" value="" class="form-control" placeholder="Seleccione icono"/>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                    </div>

                    
</div>

