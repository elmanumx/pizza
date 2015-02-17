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
                                          <td>TAMAÑO</td>
                                            <td><input type="text" class="form-control" name="tamaño_p"></td>
                                        </tr>   
                                     </table>

</div>
</div>

