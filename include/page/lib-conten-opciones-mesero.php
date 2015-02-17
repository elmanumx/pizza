<?php include 'procesos/conexion.php';?>
<div id="page-inner">
            
    <div class="row ">
        <?php
            $query = mysql_query("SELECT pagina.url_pagina FROM privilegio,pagina WHERE privilegio.id_pagina = pagina.id_pagina and privilegio.id_empleado= '".$_SESSION['cve_mesero']."'");
            while($r=mysql_fetch_assoc($query)){
                $url=$r['url_pagina'];
                if($url==1){ ?>
                    <div class="col-md-4 col-sm-12 col-xs-12" accesskey="h" onclick="location.href='<?php echo "mostrar_mesas.php?opc=1";?>'" style="cursor:pointer; ">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="icon-plus-sign icon-5x"></i>
                                <h3>Nueva Orden  </h3>
                            </div>
                            <div class="panel-footer back-footer-red">
                                Acceder
                            </div>
                        </div>
                    </div>
                    <?php }
                     if($url==2){ ?>
                      <div class="col-md-4 col-sm-12 col-xs-12" onclick="location.href='<?php echo "mostrar_mesas.php?opc=2";?>'" style="cursor:pointer;">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="icon-cogs icon-5x"></i>
                                <h3>Modificar Orden  </h3>
                            </div>
                            <div class="panel-footer back-footer-red">
                                Acceder
                            </div>
                        </div>
                    </div>
                    <?php }
                     if($url==3){ ?>
                      <div class="col-md-4 col-sm-12 col-xs-12" onclick="location.href='<?php echo "mostrar_mesas.php?opc=3"; ?>'" style="cursor:pointer;">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="icon-print icon-5x"></i>
                                <h3>Imprimir ticket </h3>
                            </div>
                            <div class="panel-footer back-footer-red">
                                Acceder
                            </div>
                        </div>
                    </div>
                <?php }
                 if($url==4){ ?>
                    
                <div class="col-md-4 col-sm-12 col-xs-12" onclick="location.href='<?php echo "mostrar_mesas.php?opc=4";  ?>'" style="cursor:pointer;">
                    <div class="panel panel-primary text-center no-boder bg-color-red">
                        <div class="panel-body">
                            <i class="icon-remove-sign icon-5x"></i>
                            <h3>Cancelar Orden </h3>
                        </div>
                        <div class="panel-footer back-footer-red">
                            Acceder
                        </div>
                    </div>
                </div>
                <?php }
                 if($url==5){ ?>
                  <div class="col-md-4 col-sm-12 col-xs-12" onclick="location.href='<?php echo "mostrar_mesas.php?opc=5";  ?>'" style="cursor:pointer;">
                    <div class="panel panel-primary text-center no-boder bg-color-red">
                        <div class="panel-body">
                            <i class="icon-money icon-5x"></i>
                            <h3>Pagar Cuenta </h3>
                        </div>
                        <div class="panel-footer back-footer-red">
                            Acceder
                        </div>
                    </div>
                </div>
                <?php }
                } ?> 
        
    </div>


</div>
             <!-- /. PAGE INNER  -->


