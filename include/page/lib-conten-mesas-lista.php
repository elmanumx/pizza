<?php 
	$opc = $_REQUEST['opc'];
	include 'procesos/conexion.php';
	if($opc=='1'){
	$query =mysql_query("SELECT * FROM mesa WHERE temporal_mesa='disponible' ");
	
	}
	if($opc=='2' || $opc=='3'){
	$query=mysql_query("SELECT	mesa.*,venta.id_mesa FROM mesa,venta WHERE mesa.id_mesa = venta.id_mesa and venta.id_empleado = '".$_SESSION['cve_mesero']."' ");
	}
	if($opc=='4' || $opc=='5'){
		$query =mysql_query("SELECT * FROM mesa WHERE temporal_mesa='ocupada' ");
	}
 ?>

<div id="page-inner">
	<div class="row">
	    
	    <div class="col-md-12 col-sm-12 col-xs-12">                       
	                  
	                    <div class="panel panel-primary text-center no-boder bg-color-green">
	                        <div class="panel-body" style="font-size:20px;">
	                            <i class="icon-edit icon-1x"></i>
	                            Seleccione una mesa
	                        </div>
	                    </div>                        
	    </div>
	</div> 
<div class="row">       
<?php 
$disponible=false;
while ($r=mysql_fetch_assoc($query)){
	$disponible=true;
	$link='capturar_orden.php?id_mesa='.$r['id_mesa'].'&opc='.$opc;
    echo '
		 <div class="col-md-3 col-sm-12 col-xs-12">                       
            <div class="panel panel-primary text-center no-boder bg-color-green">
                <div class="panel-body">
                <a href = "'.$link.'" type="button" class="btn btn-success btn-circle"><i class="icon-edit icon-5x"></i> <h3>Mesa N° '.$r['numero_mesa'].' </h3></a>';
                echo'</div>
            </div>                        
		</div>
	';
	}
	if($disponible==false){
		echo'
		<div class="col-md-12 col-sm-12 col-xs-12">                       
	        <div class="panel panel-primary text-center no-boder bg-color-red">
	            <div class="panel-body" style="font-size:20px;">
	                <h3 style="color:white;">No se encontraron mesas disponibles</h3>
	             </div>
	        </div>                        
	    </div>';
}
?>

 </div>


          

    </div>
             <!-- /. PAGE INNER  -->