<?php 
include 'conexion.php';
/////// funcion para verificar privilegios de operaciones por pagina agregar,modificar, baja
function operaciones($id_usuario,$url){
    $id_usuario = $id_usuario;
    $url = $url;
    $consulta = mysql_query("SELECT FROM privelgio WHERE id_usuario = '".$id_usuario."' ");

}


///////////////////tabla de compra
function print_tabla(){
$convercion="";
$total=0;
$cont=0;
echo '

<div class="panel panel-p-green">
        <div class="panel-heading margen">
                           Orden N° 5 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="30%">Operaciones</th>
                                            <th width="10%">folio</th>
                                            <th width="30%">nombre</th>
                                            <th width="10%">cantidad</th>
                                            <th width="10%">precio</th>
                                            <th width="10%">Sub-total</th>
                                    </thead>';
if(isset($_SESSION['carro'])){
    foreach ($_SESSION['carro'] as $k => $v){
        $total += $_SESSION['carro'][$k]['subtotal'];   
        $convercion="'".$_SESSION['carro'][$k]['tipo']."'";
        
        echo "<tr>";
                echo'<td>
                        <div class="row">
                            <div class=" col-md-12">
                                <div class=" col-md-4">
                                    <button type="button" class="btn btn-danger" onclick="operaciones('.$convercion.',1)">
                                        <i class="icon-remove-sign icon-2x"></i>
                                    </button>
                                </div>
                                <div class=" col-md-4">
                                    <button type="button" class="btn btn-success" onclick="operaciones('.$convercion.',2)" ';if($_SESSION['carro'][$k]['cantidad']==1){echo'disabled="disabled"';}echo'>
                                        <i class="icon-minus-sign icon-2x"></i>
                                        
                                    </button>
                                </div>
                                <div class=" col-md-4">
                                    <button type="button" class="btn btn-primary" onclick="operaciones('.$convercion.',3)">
                                        <i class="icon-plus-sign icon-2x"></i>
                                        
                                    </button>
                                </div>
                            </div>
                        </div>
                    </td>'; 
                    $cont=0;
        foreach($v as $j => $z){
            if($cont!=0){
            echo "<td>".$z."</td>";
            }
            $cont++;
        }
        echo "</tr>";
    } 
}


echo '
<td></td>
<td></td>
<td></td>
<td></td>
<td>Total:</td>

<td>'.$total.'</td>
  </table>
                            </div>
                                    <a href="procesos/generar_venta.php" type="button" class="btn btn-success btn-lg btn-block"';if(!isset($_SESSION['carro'])){echo'disabled="disabled"';}else {if(count($_SESSION['carro'])<1){echo'disabled="disabled"';}}echo'>
                                         <i class="icon-check-sign icon-1x"></i>
                                        <label>Generar Pedido</label>
                                     </a>
                            </div>
                    </div>

    </div>';
} 

function form_mesas($id){

$consulta="SELECT * FROM mesa WHERE id_mesa='".$id."'";
$resultado = mysql_query($consulta);
$r=mysql_fetch_assoc($resultado);
$id_m=$r["id_mesa"];
$desc_m=$r["descripcion_mesa"];

 echo'
    <table class="table table-hover">
        <tr>
            <td>NUMERO DE MESA</td>
            <td><input type="text" class="form-control" name="numero_mesa" placeholder="Escriba el numero de la mesa" value="'.$r['numero_mesa'].'" required /></td>
            </tr>

            <tr>
            <td>DESCRIPCION DE LA MESA</td>
            <td><textarea class="form-control" name="desc_mesa">'.$r['descripcion_mesa'].'</textarea></td>
            </tr>

            <tr>
            <input type="hidden" name="id_mesa" value="'.$r['id_mesa'].'" />
            <input type="hidden" name="numero_actual" value="'.$r['numero_mesa'].'" />
    </table>
   


';
} 

function form_categoria_paginas($id){

$consulta="SELECT * FROM categoria_pagina WHERE id_categoria_pagina= '".$id."'";
$resultado = mysql_query($consulta);
$r=mysql_fetch_assoc($resultado);
$id_c=$r["id_categoria_pagina"];
$nombre_c=$r["nombre_categoria_pagina"];
$icono = $r["icono_categoria_pagina"];

 echo'


        <table class="table table-hover">
        
            <tr>
            <td width="30%">NOMBRE DE LA CATEGORIA</td>
            <td width"70%"><input type="text" class="form-control" name="nombre_c" value="'.$nombre_c.'" /></td>
            </tr>
            <tr>
            <input type="hidden" name="id_categoria" value="'.$id_c.'" />
            </tr>
             <tr>
                <td>ICONO</td>
                <td>
                    <button type="button" onclick="modal()" class="btn btn-default" data-dismiss="modal">Seleccionar</button>
                    <input type="text" id="icono2" name="icono" value="'.$icono.'" class="form-control" placeholder="Seleccione icono"/></td>
            </tr>
            
            </table>
   


';
} 

function form_paginas($id){
$consulta="SELECT * FROM pagina where id_pagina='".$id."'";
$resultado = mysql_query($consulta);
$r=mysql_fetch_assoc($resultado);
$id_p=$r["id_pagina"];
$nombre_p=$r["nombre_pagina"];
$url_p=$r["url_pagina"];
$icono=$r["icono_pagina"];

 echo'


        <table class="table table-hover">
        
            <tr>
            <td width="30%">NOMBRE DE LA PAGINA</td>
            <td width"70%"><input type="text" class="form-control" name="nombre_p" value="'.$nombre_p.'" /></td>
            </tr>

            <tr>
            <td>URL DE LA PAGINA</td>
            <td><input type="text"  class="form-control" name="url_p"  value="'.$url_p.'" placeholder="Escriba la url de la pagina"/></td>
            </tr>

            <tr>
            <input type="hidden" name="id_p" value="'.$id_p.'" />
            </tr><tr>
            <td>SECCION</td>
            <td><select class="form-control" name="seccion_p" >
          ';
            $consulta="SELECT * FROM categoria_pagina";
            $resultado = mysql_query($consulta);
                
                
                while ($r=mysql_fetch_assoc($resultado))
                    {
                        if($r['id_categoria_pagina']==$ejecutar['id_categoria_pagina']){
                                echo'<option value='.$r['id_categoria_pagina'].' selected>'.$r['nombre_categoria_pagina'].'</option>';
                        }
                        else
                        {
                                echo'<option value='.$r['id_categoria_pagina'].'>'.$r['nombre_categoria_pagina'].'</option>';
                        }
                    }
                
            echo'
                    </select>
                    </td>
            </tr>
             <tr>
                <td>ICONO</td>
                <td>
                    <button type="button" onclick="modal()" class="btn btn-default" data-dismiss="modal">Seleccionar</button>
                    <input type="text" id="icono2" name="icono" value="'.$icono.'" class="form-control" placeholder="Seleccione icono"/>
                </td>
            </tr>

            
            </table>
';
} 

function form_cargo_emp($id){

$consulta="SELECT * FROM cargo_empleado where id_cargo_empleado = '".$id."'";
$resultado = mysql_query($consulta);
$r=mysql_fetch_assoc($resultado);
$nombre_ce=$r["nombre_cargo_empleado"];
$id_ce=$r["id_cargo_empleado"];

 echo'


        <table class="table table-hover">
        
            <tr>
            <td width="30%">NOMBRE DEL CARGO</td>
            <td width"70%"><input type="text" class="form-control" name="nombre_c_e" value="'.$nombre_ce.'" /></td>
            </tr>
            <tr>
            <input type="hidden" name="id_cargo_empleado" value="'.$id_ce.'" />
            </tr>
            
            </table>
   


';
} 

function form_empleados($id){
$id_emp=$id;
$query=mysql_query("SELECT * FROM empleados where id_empleado=".$id_emp."");
$resul=mysql_fetch_assoc($query);

echo '

<div class="panel panel-default ">
                        <div class="panel-body">


<div class="table-responsive">
                                <table class="table table-hover">
                                        <tr>
                                    <td>NOMBRE</td>
                                    <td><input type="text" class = "form-control" name="nombre_emp" placeholder="Escriba el nombre del emplado" value="'.$resul['nombre_empleado'].'"/>
                                    </td>
                                </tr>

                                <tr>
                                    <td>APELLIDO PATERNO</td>
                                    <td><input type="text" class = "form-control" name="app_emp" placeholder="Escriba el apellido paterno" value="'.$resul['apellidop_empleado'].'"/></td>
                                </tr>

                                <tr>
                                    <td>APELLIDO MATERNO</td>
                                    <td><input type="text" class = "form-control" name="apm_emp" placeholder="Escriba el apellido materno" value="'.$resul['apellidom_empleado'].'"/></td>
                                </tr>

                                <tr>
                                    <td>FECHA DE NACIMIENTO</td>
                                    <td><input type="date" class = "form-control" name="fecha_nac" value="'.$resul['fecha_nac_empleado'].'" /></td>
                                </tr>

                                <tr>
                                    <td>DIRECCION</td>
                                    <td><textarea rows="4" cols="35" placeholder="Escriba direccion del empleado " class = "form-control" name="direccion_emp">'. $resul['direccion_empleado'].'</textarea></td>
                                </tr>           

                                <tr>
                                    <td>RFC</td>
                                    <td><input type="text" class = "form-control" name="rfc_emp" placeholder="Escriba el rfc del empleado"  value="'.$resul['rfc_empleado'].'"/></td>
                                </tr>

                                <tr>
                                    <td>NUMERO DE TELEFONO</td>
                                    <td><input type="tel" class = "form-control" name="telefono_emp" placeholder="Escriba el telefono del empleado" value="'.$resul['tel_empleado'].'"/></td>
                                </tr>
                                <tr>
                                    <td>PUESTO</td>
                                    <td><select class = "form-control" name="cargo_emp" >
                                        ';
                                        $consul=mysql_query("SELECT * FROM cargo_empleado where status_cargo_empleado='1'");
                                        while ($ejecutar=mysql_fetch_assoc($consul)) {
                                            $mesero=$cajero=$admin="";
                                            if($resul['id_cargo_empleado']==$ejecutar['id_cargo_empleado']){
                                                echo '<option value='.$ejecutar['id_cargo_empleado'].' selected>'.$ejecutar['nombre_cargo_empleado'].'</option>';
                                            }
                                            else
                                            {
                                                echo '<option value='.$ejecutar['id_cargo_empleado'].'>'.$ejecutar['nombre_cargo_empleado'].'</option>';
                                            }
                                            
                                        }
                                        echo'
                                       </select></td>
                                </tr>

                                <tr>
                                <input type="hidden" class = "form-control" name="id_emp" value="'.$id_emp.'" />
                           
                                </tr>
                            </tbody>
                </table>

        </div>        
    </div>
</div>
';

}


function form_user_new($id){

    echo '
<div class="panel panel-default ">
                        <div class="panel-body">


<div class="table-responsive">
                                <table class="table table-hover">             
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
                                            $seccion_pagina2="";

                                            $consulta= mysql_query("SELECT * FROM categoria_pagina where status_categoria_pagina='1' and nombre_categoria_pagina<>'venta'");

                                           // $resultado = mysql_query($consulta);
                                                    $count=0;
                                                    while ($r=mysql_fetch_assoc($consulta))
                                                    {
                                                        $seccion_pagina=$r['id_categoria_pagina'];
                                                        $consulta2=mysql_query("SELECT * FROM pagina where status_pagina='1' and id_categoria_pagina='".$seccion_pagina."'");
            //                                            $consulta2="SELECT * FROM categoria_pagina where id_categoria_pagina='".$seccion_pagina."' and status_categoria_pagina='1'";
                                                        $resultado2 = mysql_fetch_assoc($consulta2);
                                                         $valor=$resultado2['nombre_pagina'];
                                                        $id_pagina=$resultado2['id_pagina'];
                                                        
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
                                                                <table class="table table-striped table-bordered table-hover">
                                                                <tr ><th colspan="2">'.$r['nombre_categoria_pagina'].'</th></tr>';
                                                        }
                                                
                                                        $seccion_pagina2=$seccion_pagina;
                                                        if($count % 2 == 0){
                                                            echo '<tr>
                                                                    <td>
                                                                        <label>
                                                                            <input type="checkbox" class="form-control" name="lista_ac[]" value="'.$id_pagina.'" onclick="mostrar_opcion(this)"> '.$valor.'
                                                                        </label>
                                                                           <div id="opcion'.$id_pagina.'" style="display:none">
                                                                               Guardar  <input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="guardar">
                                                                               Modificar <input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="modificar">
                                                                               Eliminar <input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="baja">
                                                                            </div>
                                                                    </td>';
                                                        } 
                                                        else{
                                                            echo '<td>
                                                                    <label>
                                                                        <input type="checkbox" class="form-control" name="lista_ac[]" value="'.$id_pagina.'" onclick="mostrar_opcion(this)"> '.$valor.'
                                                                    </label>
                                                                            <div id="opcion'.$id_pagina.'" style="display:none">
                                                                                Guardar  <input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="guardar">
                                                                                Modificar <input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="modificar">
                                                                                Eliminar <input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="baja">
                                                                            </div>
                                                                </td>';
                                                        }
                                                        $count++;
                                                    }
                                        echo '
                            </tbody>
                </table>
        
                                </table>
                               <input type="hidden" name="id_emp" value="'.$id.'" />
                
        </div>
    </div>
</div>
    ';     

}





function form_usuario($id){
$id_emp=$id;////////////////////////////////////////////////////////////////////////NOTA:MODIFICAR USUARIO
$seccion_pagina2="";

$query=mysql_query("SELECT * FROM usuario where id_usuario=".$id_emp."");
$resul=mysql_fetch_assoc($query);
$id_usuario=$resul['id_usuario'];

echo '
<div class="table-responsive">
                                <table class="table table-hover"> 
                    <tr>
                        <td>NOMBRE DE USUARIO</td>
                        <td><input type="text" class="form-control" name="nombre_us" value="'.$resul['nombre_usuario'].'" placeholder="Escriba el nombre de usuario"/>
                        </td>
                    </tr>
                    <tr>
                        <td>PASSWORD DE USUARIO</td>
                        <td><input type="password" class="form-control" name="pass" value="'.$resul['pass_usuario'].'" placeholder="Escriba la contraseña "/>
                        </td>
                    </tr>
                    <tr>
                        <td>CONFIRME EL PASSWORD</td>
                        <td><input type="password" class="form-control" value="'.$resul['pass_usuario'].'" placeholder="confirme la contraseña "/>
                        </td>
                        </tr>
                    <tr align="center" valign="middle"> 
                         <th colspan="5">SELECCIONE LAS OPCIONES DE ACCESO DEL USUARIO</th>
                         </tr>
                        
                        <tr>
                            <tbody VALIGN=TOP ALIGN=CENTER >
                        ';
                                //$consulta="SELECT * FROM pagina ORDER BY id_categoria_pagina";
                                $consulta=mysql_query("SELECT * FROM categoria_pagina where status_categoria_pagina='1' and nombre_categoria_pagina<>'venta'");
                                //$resultado = mysql_query($consulta);
                                $count=0;
                            while ($r=mysql_fetch_assoc($consulta))
                            {
                                    
                                    $seccion_pagina=$r['id_categoria_pagina'];
                                   // $consulta2="SELECT * FROM categoria_pagina where id_categoria_pagina='".$seccion_pagina."'";
                                    $consulta2=mysql_query("SELECT * FROM pagina where status_pagina='1' and id_categoria_pagina='".$seccion_pagina."'  ORDER BY id_categoria_pagina");
                                   // $resultado2 = mysql_query($consulta2);
                                    while ($r2=mysql_fetch_assoc($consulta2))
                                    {
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
                                                <table class="table table-striped table-bordered table-hover">
                                                <tr ><th colspan="2">'.$r['nombre_categoria_pagina'].'</th></tr>';
                                        }
                                
                                        $seccion_pagina2=$seccion_pagina;
                                        $check="";
                                        $estilo="style='display:none'";
                                        $consulta3="SELECT * FROM privilegio where id_usuario='".$id_usuario."'";
                                        $resultado3 = mysql_query($consulta3);
                                        while($r3=mysql_fetch_assoc($resultado3)){

                                            if($r3['id_pagina']==$id_pagina){
                                                $check="checked";
                                        
                                            }
                                        }
                                        $guardar="";
                                        $modificar="";
                                        $baja="";
                                        if($check=="checked"){
                                           $estilo="";
                                           $guardar="";
                                           $modificar="";
                                           $baja="";
                                           $cons_pri=mysql_query("SELECT * FROM privilegio WHERE id_usuario='".$id."' and id_pagina='".$id_pagina."'");
                                           $res_pri=mysql_fetch_assoc($cons_pri);
                                           if($res_pri['guardar_privilegio']==1){
                                                $guardar="checked";
                                           }
                                           if($res_pri['modificar_privilegio']==1){
                                                $modificar="checked";
                                           }
                                           if($res_pri['baja_privilegio']==1){
                                                $baja="checked";
                                           }

                                        }

                                        if($count % 2 == 0){
                                            echo '<tr>
                                                        <td>
                                                            <div class="checkbox checkbox-info checkbox-circle">
                                                                <input id="checkbox'.$id_pagina.'" type="checkbox" class="" name="lista_ac[]" value="'.$id_pagina.'" '.$check.' onclick="mostrar_opcion(this)" >
                                                                <label for="checkbox'.$id_pagina.'" >
                                                                    '.$valor.'
                                                                </label>
                                                            </div>

                                                            <div id="opcion'.$id_pagina.'" '.$estilo.'>
                                                                Guardar <input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="guardar" '.$guardar.'>
                                                                Modificar<input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="modificar" '.$modificar.'>
                                                                Eliminar<input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="baja" '.$baja.'>
                                                            </div>
                                                        </td>';
                                        } 
                                        else{
                                            echo '<td>
                                                        <div class="checkbox checkbox-info checkbox-circle">
                                                            <input id="checkbox'.$id_pagina.'" type="checkbox" class="" name="lista_ac[]" value="'.$id_pagina.'" '.$check.' onclick="mostrar_opcion(this)" >
                                                            <label for="checkbox'.$id_pagina.'" >
                                                                '.$valor.'
                                                            </label>
                                                        </div>
                                                            <div id="opcion'.$id_pagina.'" '.$estilo.'>
                                                                Guardar <input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="guardar" '.$guardar.'>
                                                                Modificar <input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="modificar" '.$modificar.'>
                                                                Eliminar <input  type="checkbox" class="" name="arreglo'.$id_pagina.'[]" value="baja" '.$baja.'>
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
                <input type="hidden" name="id_usuario" value="'.$id_usuario.'" />
          </div>  '; 

}







function form_categoria_ingrediente($id){
$id_categoria_ingrediente=$id;
$query=mysql_query("SELECT * FROM categoria_ingrediente where id_categoria_ingrediente='".$id_categoria_ingrediente."'");
$ejecutar=mysql_fetch_assoc($query);

echo '<div class="table-responsive">
            <table class="table table-hover">
                <tr>
                <td>NOMBRE DE LA CATEGORIA</td>
                <td><input type="text" class="form-control" name="nombre_c_i" placeholder="Escriba el nombre de la categoria" value='.$ejecutar['nombre_categoria_ingrediente'].'></td>
                </tr><input type="hidden" name="id_categoria_ingrediente" value="'.$id_categoria_ingrediente.'"/>
                </table>
        </div>


                                ';



}


function form_ingrediente($id){
    $id_ingrediente=$id;
$query=mysql_query("SELECT * FROM ingrediente WHERE id_ingrediente='".$id_ingrediente."'");
$ejecutar=mysql_fetch_assoc($query);

echo '<div class="table-responsive">
            <table class="table table-hover">
                    <td>NOMBRE DEL INGREDIENTE</td>
                    <td><input type="text" class="form-control" name="nombre_i" placeholder="Escriba el nombre del ingrediente" value="'.$ejecutar['nombre_ingrediente'].'"/></td>
                    </tr>

                    <tr>
                    <td>UNIDAD DE MEDIDA</td>
                        <td><select class="form-control" name="medida_i" >';

                    $consulta="SELECT * FROM medida_ingrediente where status_medida_ingrediente='1'";
                    $resultado = mysql_query($consulta);
                        while ($r=mysql_fetch_assoc($resultado))
                            {
                                if($ejecutar['id_medida_ingrediente']==$r['id_medida_ingrediente'])
                                {
                            echo'<option value='.$r['id_medida_ingrediente'].' selected>'.$r['nombre_medida_ingrediente'].'</option>';
                                }
                                else
                                {
                            echo'<option value='.$r['id_medida_ingrediente'].'>'.$r['nombre_medida_ingrediente'].'</option>';
                                }
                            }
                    echo' 
                            </select></td>
                    </tr>
                    
                    <tr>
                        <td>CATEGORIA</td>
                        <td><select class="form-control" name="categoria_i" >';
                    
                    
                    $consulta="SELECT * FROM categoria_ingrediente where status_categoria_ingrediente='1'";
                    $resultado = mysql_query($consulta);
                        while ($r=mysql_fetch_assoc($resultado))
                            {
                                if($ejecutar['id_categoria_ingrediente']==$r['id_categoria_ingrediente'])
                                {
                            echo'<option value='.$r['id_categoria_ingrediente'].' selected>'.$r['nombre_categoria_ingrediente'].'</option>';
                                }
                                else
                                {
                            echo'<option value='.$r['id_categoria_ingrediente'].'>'.$r['nombre_categoria_ingrediente'].'</option>';
                                }
                            
                            }
                     echo'
                            </select></td>
                    </tr>

                    <tr>
                    <td>CANTIDAD ACTUAL</td>
                    <td><input type="number" class="form-control" name="cantidad_actual_i" value="'.$ejecutar['cantidad_actual_ingrediente'].'" min="0" /></td>
                    </tr>


                    <tr>
                    <td>CANTIDAD MINIMA</td>
                    <td><input type="number" class="form-control" name="cantidad_minima_i" value="'.$ejecutar['cantidad_minima_ingrediente'].'" min="0" /></td>
                    </tr>
                    <input type="hidden" name="id_ingrediente" value="'.$id_ingrediente.'">
            </table>
        </div>


                                ';


    
}
function form_tamano($id){
$id_tamano=$id;
$query=mysql_query("SELECT * FROM tamano WHERE id_tamano='".$id_tamano."'");
$ejecutar=mysql_fetch_assoc($query);
echo '<div class="table-responsive">
            <table class="table table-hover">
            <td width="30%">TAMAÑO</td>
            <td><input type="text" class="form-control" name="tamaño_p" value="'.$ejecutar['nombre_tamano'].'"></td>
            </tr>
            <input type="hidden" name="id_tamano" value="'.$id_tamano.'">
            </table>
        </div>

    ';        
    
}

function form_pizzas($id){

$id_pizza=$id;
$query=mysql_query("SELECT * FROM pizza WHERE id_pizza='".$id_pizza."'");
$resultado=mysql_fetch_assoc($query);
 

echo '<div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <td width="30%" >NOMBRE DE LA PIZZA</td>
                <td><input type="text" class= "form-control" name="nombre_pizza" placeholder="Escriba el nombre de la pizza" value="'.$resultado['nombre_pizza'].'" />
                </td>
            </tr>

            <tr>
                <td>DESCRIPCION</td>
                <td><textarea class= "form-control" name="desc_pizza" rows="4" cols="35" placeholder="Escriba una pequeña descripcion" >'.$resultado['descripcion_pizza'].'</textarea></td>
            </tr>

            <tr>
            <td></td>
            <td></td>
            </tr>           

            <tr>
                <td>IMAGEN DE LA PIZZA</td>
                 <td align="center"> 
                     <img src="img/pizza/'.$resultado['img_pizza'].'" class="img-rounded" id="imagen" width="120" height="120" > 
                     <input type="file" class="btn btn-success form-control" name="imagen_pizza" size="30"  />
                </td>
            </tr>           

            <tr>
            <td><input type="hidden" name="picture" value="'.$resultado['img_pizza'].'"/></td>
            <td><input type="hidden" name="id_pizza" value="'.$id_pizza.'"/></td>
            </tr>
            
            </table>
        </div>
       ';   
    
}

function form_tamanomod($id){

$id_pizza=$id;
$query=mysql_query("SELECT * FROM pizza WHERE id_pizza='".$id_pizza."'");
$resultado=mysql_fetch_assoc($query);

echo'
      <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th colspan="2">TAMAÑOS Y PRECIOS DE LA PIZZA '.$resultado['nombre_pizza'].'</th>
                </tr>       
              ';
                
                $query=mysql_query("SELECT * FROM tamano where status_tamano='1'");

                $count=0;

                while ($ejecutar=mysql_fetch_assoc($query)) {
                    $consulta=mysql_query("SELECT * FROM lista_pizza where id_pizza='".$id_pizza."' and id_tamano='".$ejecutar['id_tamano']."'");
                    $resul=mysql_fetch_assoc($consulta);
                    $id_tamano=$resul['id_tamano'];
                    $precio=$resul['precio_lista_pizza'];

                    if($id_tamano==$ejecutar['id_tamano']){
                            $checked="checked";
                            $tipo="number";
                            $value="value=".$resul['precio_lista_pizza'];
                        }
                        else{
                        $checked="";    
                        $tipo="hidden";
                        $value="";
                        }
                        echo'<div class="form-group">';
                    if($count%2==0){

                      echo '<tr width ="50%">
                                <td>
                                    <div class="checkbox checkbox-info checkbox-circle">
                                        <input id="tamano'.$id_pizza.''.$count.'q" type="checkbox" name="lista_p['.$count.'][1]" value='.$ejecutar['id_tamano'].' onclick="modificar(this.id)" '.$checked.'> 
                                        <label for="tamano'.$id_pizza.''.$count.'q">
                                            '.$ejecutar['nombre_tamano'].'
                                        </label>
                                    </div>
                        <input id="tamano'.$id_pizza.''.$count.'qq" class="form-control" type="'.$tipo.'" name="lista_p['.$count.'][2]" '.$value.' placeholder="precio" min="1" step="0.01" required onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/></td>
                        <input type="hidden" name="lista_p['.$count.'][3]" value='.$resul['id_lista_pizza'].'/>
                    ';
                    }
                    else{
                      echo '<td width="50%">
                                <div class="checkbox checkbox-info checkbox-circle">
                                    <input id="tamano'.$id_pizza.''.$count.'q" type="checkbox" name="lista_p['.$count.'][1]" value='.$ejecutar['id_tamano'].' onclick="modificar(this.id)" '.$checked.'> 
                                        <label for="tamano'.$id_pizza.''.$count.'q">
                                            '.$ejecutar['nombre_tamano'].'
                                        </label>
                                </div>
                        <input id="tamano'.$id_pizza.''.$count.'qq" type="'.$tipo.'" class="form-control" name="lista_p['.$count.'][2]" '.$value.' placeholder="precio" min="1" step="0.01" required onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/></td>
                        <input type="hidden" name="lista_p['.$count.'][3]" value='.$resul['id_lista_pizza'].'/>                 
                    ';  
                    }   
                    echo '</div>';
                    $count++;

                 }   
                 echo '
            </tr>
            <input type="hidden" name="id_pizza" value="'.$id_pizza.'"/></td>
            
            
            </table>
        </div>
   

';

}

function form_producto($id){
    $id_producto=$id;
$query=mysql_query("SELECT * FROM producto WHERE id_producto='".$id_producto."'");
$result=mysql_fetch_assoc($query);
 
 echo '<div class="table-responsive">
        <table class="table table-hover">
                <tr>
                    <td>NOMBRE DEL PRODUCTO</td>
                    <td><input type="text" class="form-control" name="nombre_pro" placeholder="Escriba el nombre del producto" value="'.$result['nombre_producto'].'" />
                    </td>
                </tr>
                <tr>
                    <td>DESCRIPCION DEL PRODUCTO</td>
                    <td><input type="text" class="form-control" name="descripcion_pro" id="descripcion_pro"  placeholder="escriba una descripcion del producto" value="'.$result['descripcion_producto'].'"/>
                    </td>
                </tr>
                <tr>
                    <td>PRECIO DE COMPRA</td>
                    <td><input type="number" min="1" step="0.01" class="form-control" name="precio_compra" id="precio_compra" placeholder="precio de compra" value="'.$result['precio_compra_producto'].'" onfocus="validar(this.id)" onkeypress="numero()"/>
                    </td>
                </tr>
                <tr>
                    <td>PRECIO DE VENTA</td>
                    <td><input type="number" min="1" step="0.01" class="form-control" name="precio_venta" id="precio_venta"  placeholder="precio de venta" value="'.$result['precio_venta_producto'].'" onfocus="validar(this.id)" onkeypress="numero()"/>
                    </td>
                </tr>
                <tr>
                    <td>EXISTENCIA ACTUAL</td>
                    <td><input type="number" min="1"  class="form-control" name="existencia_act" id="existencia"  placeholder="cantidad actual" value="'.$result['existencia_actual_producto'].'" onfocus="validar(this.id)" onkeypress="numero()"/>
                    </td>
                </tr>
                <tr>
                    <td>EXISTENCIA MINIMA</td>
                    <td><input type="number" min="1" class="form-control" name="existencia_min"  placeholder="cantidad minima" id="cantidad minima" value="'.$result['existencia_min_producto'].'"  onfocus="validar(this.id)" onkeypress="numero()"/>
                    </td>
                </tr>
                <tr>
                    <td>IMAGEN DEL PRODUCTO</td>
                    <td  align="center">
                        <img src="img/producto/'.$result['img_producto'].'" width="100" height="100">
                    <input type="file" class="form-control" name="img_pro"/>
                    </td>
                </tr>
                <tr>
                    <input type="hidden" class="form-control" name="id_producto" value="'.$id_producto.'">
                    <input type="hidden" class="form-control" name="img_producto" value="'.$result['img_producto'].'">    
                    </td>
                </tr>
            </table>
        </div>
   
';
}


//////////////////////////////////////////////////////////////////////////////

function form_empleados2($id){
$consulta="SELECT * FROM empleados where id_empleado='".$id."'";
$resultado = mysql_query($consulta);
$r=mysql_fetch_assoc($resultado);

echo '
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
                <td><input type="text" class="form-control "name="nombre_emp" value="'.$r['nombre_empleado'].'" placeholder="Escriba el nombre del emplado" />
                </td>
            </tr>

            <tr>
                <td>APELLIDO PATERNO</td>
                <td><input type="text" class="form-control "name="app_emp" value="'.$r['apellidop_empleado'].'" placeholder="Escriba el apellido paterno"/></td>
            </tr>

            <tr>
                <td>APELLIDO MATERNO</td>
                <td><input type="text" class="form-control "name="apm_emp" value="'.$r['apellidom_empleado'].'" placeholder="Escriba el apellido materno"/></td>
            </tr>

            <tr>
                <td>FECHA DE NACIMIENTO</td>
                <td><input type="date" class="form-control value="'.$r['fecha_nac_empleado'].'" "name="fecha_nac" /></td>
            </tr>

            <tr>
                <td>DIRECCION</td>
                <td><textarea rows="4" cols="35" placeholder="Escriba direccion del empleado " class="form-control "name="direccion_emp">'.$r['direccion_empleado'].'</textarea></td>
            </tr>           

            <tr>
                <td>RFC</td>
                <td><input type="text" class="form-control "name="rfc_emp" value="'.$r['rfc_empleado'].'" placeholder="Escriba el rfc del empleado"  /></td>
            </tr>

            <tr>
                <td>NUMERO DE TELEFONO</td>
                <td><input type="tel" class="form-control "name="telefono_emp" value="'.$r['tel_empleado'].'" placeholder="Escriba el telefono del empleado" /></td>
            </tr>

            <tr>
                <td>PUESTO</td>
                <td><select class="form-control "name="cargo_emp" value="'.$r['cargo_empleado'].'" >';
                    if($r['cargo_empleado']=="MESERO"){
                        $mesero="selected";
                        }
                        elseif($r['cargo_empleado']=="CAJERO"){
                               $cajero="selected";
                        }
                         elseif($r['cargo_empleado']=="ADMINISTADOR"){
                               $administrador="selected";
                        }
                        echo '<option '.$mesero.'>MESERO</option>';
                        echo '<option '.$cajero.'>CAJERO</option>';
                        echo '<option '.$administrador.'>ADMINISTADOR</option>';
                        echo'
                        </select></td>
                        </tr>       

            
                  </table>

';

}

 ?>

