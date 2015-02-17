<?php 
include 'procesos/conexion.php';
$id_emp=$_SESSION['id_empleado'];
$seccion_pagina2="";
$consulta2="SELECT * FROM categoria_pagina where status_categoria_pagina='1' and nombre_categoria_pagina<>'venta'";
//$consulta2="SELECT * FROM pagina where status_pagina='1' ORDER BY id_categoria_pagina";
$resultado = mysql_query($consulta2);

echo '

<div class="panel panel-default ">
                        <div class="panel-body">


<div class="table-responsive">
                                <table class="table table-hover">
                                    <form action="procesos/guardar_usuario.php" method="POST">				
										<tr>
											<td width="40%">NOMBRE DE USUARIO</td>
											<td width="60%" ><input type="text" class="form-control" name="nombre_us" placeholder="Escriba el nombre de usuario"/>
											</td>
										</tr>
										<tr>
											<td>PASSWORD DE USUARIO</td>
											<td><input type="password" class="form-control" name="pass" id="pass1" placeholder="Escriba la contraseña "/>
											</td>
										</tr>
										<tr>
											<td>CONFIRME EL PASSWORD</td>
											<td><input type="password" id="pass2" class="form-control" placeholder="confirme la contraseña "/>
											</td>
											</tr>
									 	<tr align="center" valign="middle"> 
											 <th colspan="5">SELECCIONE LAS OPCIONES DE ACCESO DEL USUARIO</th>
											 </tr>
											
											<tr>
												<tbody VALIGN=TOP ALIGN=CENTER >
											';
													$count=0;
													while ($r=mysql_fetch_assoc($resultado))
													{
														
														$seccion_pagina=$r['id_categoria_pagina'];
														
														$consulta2="SELECT * FROM pagina where status_pagina='1' and id_categoria_pagina='".$seccion_pagina."'  ORDER BY id_categoria_pagina";
														//$consulta2="SELECT * FROM categoria_pagina where id_categoria_pagina='".$seccion_pagina."' and status_categoria_pagina='1' and nombre_categoria_pagina<>'venta'";
														$resultado2 = mysql_query($consulta2);
														//$r2=mysql_fetch_assoc($resultado2);
														while ($r2=mysql_fetch_assoc($resultado2)){
															# code...
														
														$valor=$r2['nombre_pagina'];
														$id_pagina=$r2['id_pagina'];

														if($seccion_pagina!=$seccion_pagina2)
														{
															if($count>0)
															{
																echo '
																</td>
																</table >';
															}
															$count=0;
																echo '
																<td>
																<table VALIGN=CENTER class="table table-striped table-bordered table-hover">
																<tr ><th colspan="2">'.$r['nombre_categoria_pagina'].'</th></tr>';
														}
														
														$seccion_pagina2=$seccion_pagina;
													  	if($count % 2 == 0){
												    		echo '<tr>
												    					<td>
													    					<div class="checkbox checkbox-info checkbox-circle">
													    						<input id="checkbox'.$id_pagina.'" name="lista_ac[]" value="'.$id_pagina.'" type="checkbox" class="" onclick="mostrar_opcion(this)" >
													    						<label for="checkbox'.$id_pagina.'">
													    							'.$valor.' 
													    						</label>
													    					</div>
													    					<div id="opcion'.$id_pagina.'" style="display:none">
														    					Guardar <input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="guardar">
	                                                            				Modificar <input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="modificar">
	                                                            				Eliminar <input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="baja">
												    						</div>
												    					</td>';
												  		} 
												  		else{
												  			echo '<td>
													    				<div class="checkbox checkbox-info checkbox-circle">
													    					<input id="checkbox'.$id_pagina.'" name="lista_ac[]" value="'.$id_pagina.'" type="checkbox" class="" onclick="mostrar_opcion(this)">
													    					<label for="checkbox'.$id_pagina.'">
													    						as'.$valor.' 
													    					</label>
													    				</div>
													    				<div id="opcion'.$id_pagina.'" style="display:none">
													    					Guardar <input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="guardar">
                                                            				Modificar <input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="modificar">
                                                           					Eliminar <input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="baja">
												    					</div>
												    				</td>';
												 		}
												 		$count++;

													}
												}
										echo '
							</tbody>
				</table>
		
            </table>
                               <input type="hidden" name="id_emp" value="'.$id_emp.'" />
				
</div>
</div>
';

 ?>