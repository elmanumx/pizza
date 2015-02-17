<?php 

if(isset($_SESSION['cve_mesero'])){
    $query=mysql_query("SELECT * FROM empleados WHERE id_empleado ='".$_SESSION['cve_mesero']."' ");
    $result=mysql_fetch_assoc($query);
    if(!$result){
echo'no hay nada';

}
else {
    $nombre=$result['nombre_empleado'];
}
}
 ?>

      <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="opciones_mesero.php">Pizza admin</a> 
            </div>
        <div style="color: white;
            padding: 15px 0px 5px 0px;
            float: center;
            font-size: 16px;">
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 navb" style="float: right;">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <?php if(isset($_SESSION['id_mesa'])){echo 'Mesa N°: '.$_SESSION['id_mesa']; } ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <?php if(isset($_SESSION['cve_mesero'])){echo 'Mesero: '.$nombre; }?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <?php
                        date_default_timezone_set('America/Mexico_City'); //puedes cambiar Guayaquil por tu Ciudad
                        setlocale(LC_TIME, 'spanish');
                        $fecha=strftime("%A, %d de %B de %Y");
                        echo utf8_encode($fecha);
                        //Salida: Viernes 24 de Febrero del 2012
                    ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">
                    <?php 
                            if(isset($_SESSION['cve_mesero'])){
                                echo '<a href="clave_mesero.php" class="btn btn-danger square-btn-adjust">Cerrar Sesion</a>';
                               }else{
                                    echo '<a href="login.php" class="btn btn-danger square-btn-adjust">Salir</a>'; 
                                   }  
                    ?>
                    </div>
                </div>
            
            </div>
        </div>
           
        </nav>