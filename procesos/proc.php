<?php 
session_start();
include 'funciones.php';
include 'conexion.php';
$id=$_POST['id'];
$cantidad=$_POST['cantidad'];
$opcion=$_POST['opcion'];
$total=0;
$nomb="";
$ingredientes="";
$tipo="";
//la opcion uno es para agregar pizzas con o sin extras
if($opcion=="1"){
        //aqui se cacha el arreglo de los nombre de los ingredientes extras
    $tipo="pizza";
    $tamano=$_POST['tamano'];
    $query=mysql_query("SELECT * FROM lista_pizza WHERE id_pizza ='".$id."' and id_tamano='".$tamano."' ");
        $resultado=mysql_fetch_assoc($query);
        $prec=$resultado['precio_lista_pizza'];
        $id_lista=$resultado['id_lista_pizza'].'pizz';
        $aux=$id;
        $id=$resultado['id_lista_pizza'];
        

    $query2=mysql_query("SELECT * FROM pizza WHERE id_pizza ='".$aux."'");
        $resultado2=mysql_fetch_assoc($query2);
        $nombre=$resultado2['nombre_pizza'];

    
    $query3=mysql_query("SELECT * FROM tamano WHERE id_tamano ='".$tamano."'");
        $resultado3=mysql_fetch_assoc($query3);
        $nombre_t=$resultado3['nombre_tamano'];
    
    if( (isset($_POST['nombre'])) ){
        $nombre_ingredientes= explode(",", $_POST['nombre']);   
        if($nombre_ingredientes[0]!=""){
            for ($i=0; $i<count($nombre_ingredientes); $i++) {     
                    if($i==0){
                        $ingredientes=' + extras('.$nombre_ingredientes[$i];
                    }else{
                        $ingredientes=$ingredientes."/".$nombre_ingredientes[$i];
                    }            
            }
           $nombre=$nombre.'('.$nombre_t.')'.$ingredientes.')';
        }
        else{
         $nombre=$nombre.'('.$nombre_t.')';   
        }
    }
    else{
        $nombre=$nombre.'('.$nombre_t.')';
    }
    
}
//la segunda opcion de utiliza para agregar productos
if($opcion=="2"){
    $tipo="producto";
    $query=mysql_query("SELECT * FROM producto WHERE id_producto ='".$id."'");
    $resultado=mysql_fetch_assoc($query);
    $prec=$resultado['precio_venta_producto'];
    $id_lista=$resultado['id_producto'].'pro';
    $nombre=$resultado['nombre_producto'];

}
//la segunda opcion de utiliza para agregar pizzas combinadas
if($opcion=="3"){
   
    $tamano=$_POST['tamano'];
    $nomb=$_POST['nomb'];
    $nombre_ingredientes=$_POST['nombre'];
    $query=mysql_query("SELECT * FROM lista_pizza WHERE id_pizza ='".$id."' and id_tamano='".$tamano."' ");
    $resultado=mysql_fetch_assoc($query);
    $id=$resultado['id_lista_pizza'];
    $nombre='Combinada'.$nomb;
    $prec=$resultado['precio_lista_pizza'];
    $id_lista=$id.'-'.$nomb;
    $query3=mysql_query("SELECT * FROM tamano WHERE id_tamano ='".$tamano."'");
        $resultado3=mysql_fetch_assoc($query3);
        $nombre_t=$resultado3['nombre_tamano'];

        if( (isset($_POST['nombre'])) ){
        $nombre_ingredientes= explode(",", $_POST['nombre']);   
        if($nombre_ingredientes[0]!=""){
            for ($i=0; $i<count($nombre_ingredientes); $i++) {     
                    if($i==0){
                        $ingredientes=' + extras('.$nombre_ingredientes[$i];
                    }else{
                        $ingredientes=$ingredientes."/".$nombre_ingredientes[$i];
                    }            
            }
           $nombre=$nombre.'('.$nombre_t.')'.$ingredientes.')';
        }
        else{
         $nombre=$nombre.'('.$nombre_t.')';   
        }
    }
    else{
        $nombre=$nombre.'('.$nombre_t.')';
    }



}
//operaciones
if($opcion=="4"){   
    if($_POST['operacion']=="1"){
            unset($_SESSION['carro'][$id]);
        }

    if($_POST['operacion']=="2"){
        if($_SESSION['carro'][$id]['cantidad']>1){     
            $_SESSION['carro'][$id]['cantidad']-=1; 
            $cantidad= $_SESSION['carro'][$id]['cantidad'];
            $_SESSION['carro'][$id]['subtotal']=$cantidad*$_SESSION['carro'][$id]['precio'];
        }
    }
       if($_POST['operacion']=="3"){   
            $cantidad+= $_SESSION['carro'][$id]['cantidad'];
            $_SESSION['carro'][$id]['cantidad']=$cantidad;
            $_SESSION['carro'][$id]['subtotal']=$cantidad*$_SESSION['carro'][$id]['precio'];

    }

} else{  
    $subtotal = $prec*$cantidad;
    $_SESSION['carro'][$id_lista] = array('tipo' => $id_lista,'folio' => $id, 'nombre' => $nombre, 'cantidad'=>$cantidad, 'precio' => $prec, 'subtotal' => $subtotal);
}



    print_tabla();


 ?>