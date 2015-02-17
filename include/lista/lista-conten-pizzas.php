<?php 
$ejecutar = "select * from pizza";
$resultado=mysql_query($ejecutar); 
?>

<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Tamaños</th>
                                            <th>Operacion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            while ($r=mysql_fetch_assoc($resultado)) {
                                                echo ' 
                                                <tr>
                                                    <td>'.$r['nombre_pizza'].'</td>
                                                    <td>  <div class="row">
                                                        <div class="col-md-9 col-sm-12 col-xs-12">';
                                                        $ejecutar2 = "select * from lista_pizza where id_pizza='".$r['id_pizza']."'";
                                                        $resultado2=mysql_query($ejecutar2);
                                                        while ($r2=mysql_fetch_assoc($resultado2)) {
                                                             $ejecutar3 = "select * from tamano where id_tamano='".$r2['id_tamano']."'";
                                                                $resultado3=mysql_query($ejecutar3);
                                                                $r3=mysql_fetch_assoc($resultado3);
                                                                echo '('.$r3['nombre_tamano'].')'.' ';
                                                        }
                                                    echo '
                                                    </div>

                                                        <div class="col-md-3 col-sm-12 col-xs-12">
                                                  

                                                             <button type="button" class="btn btn-success" onclick="load_pizza('.$r['id_pizza'].',1)">
                                                                <i class="icon-cog icon-1x"></i>
                                                            </button>
                                                            </div>
                                                    </div>
                                                    
                                                    </td>
                                                     <td style="text-align: center; ">
                                                     <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12"> 
                                                             <button type="button" class="btn btn-warning btn-lg btn-block" onclick="load_pizza('.$r['id_pizza'].',2)">
                                                                <i class="icon-edit icon-2x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <button type="button" class="btn btn-danger btn-lg btn-block" onclick="load_pizza('.$r['id_pizza'].',3)">
                                                            <i class="icon-trash icon-2x"></i>
                                                        </button>
                                                        </div>
                                                    </div>
                                                    </td>
                                             </tr>


     

                                                ';
                                            }
                                         ?>
                                            
                                    </tbody>
</table>

