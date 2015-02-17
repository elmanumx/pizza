<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php session_start();  ?>

    <?php 
    include 'include/lib-head-css.php';
    include 'procesos/conexion.php';  
    
$_SESSION['id_mesa'] = $_REQUEST['id_mesa'];
$opc=$_REQUEST['opc'];
$_SESSION['opc']=$opc;
if($opc=='2'){

        $query=mysql_query("SELECT  * FROM venta WHERE id_mesa ='".$_SESSION['id_mesa']."'  and id_empleado = '".$_SESSION['cve_mesero']."'");
        $r=mysql_fetch_assoc($query);
        $id_venta=$r['id_venta'];
        $_SESSION['id_venta']=$id_venta;
        $query2=mysql_query("SELECT  * FROM lista_venta WHERE id_venta = '".$id_venta."' ");
        while ($r2=mysql_fetch_array($query2)) {
            $id_lista_venta=$r2['id_lista_venta'];
            $cantidad=$r2['cantidad_lista_venta'];
            $subtotal=$r2['monto_lista_venta'];
            $id_producto=$r2['id_producto'];
            $id_venta=$r2['id_venta'];
            $id_lista_pizza=$r2['id_lista_pizza'];
            $nombre=$r2['nombre_lista_venta']; 
            $id="";
            if($id_producto != "" || $id_producto != null){
                 $id=$id_producto;
                $id_lista=$id_producto."pro";
            }else{
                 $id=$id_lista_pizza;
                $id_lista=$id_lista_pizza."pizz";
            }

            $query_p=mysql_query("SELECT * FROM lista_pizza WHERE id_lista_pizza='".$id."'");
            $resultado=mysql_fetch_assoc($query_p);
            $prec=$resultado['precio_lista_pizza'];

         $_SESSION['carro'][$id_lista] = array('tipo' => $id_lista,'folio' => $id, 'nombre' => $nombre,'cantidad'=>$cantidad,'precio' => $prec,'subtotal' => $subtotal);
           

        }

        }


?>

</head>
<body>
<script type="text/javascript">
    $(window).load(function(){
        $('#mesero').modal('show');
    });
</script>
    <div id="wrapper">

    <?php 
    include 'include/lib-navbar.php'; 
    include 'include/lib-navaside.php';
    ?>

   
         
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >


        <?php include 'include/page/lib-conten-capturar-orden.php'; ?>
         <!-- /. PAGE WRAPPER  -->
   
         
        </div><div id="myDiv"></div>
        <div id="result_productos"></div>

     
   <?php 
include 'include/lib-js.php';
     ?>
   
</body>
</html>
