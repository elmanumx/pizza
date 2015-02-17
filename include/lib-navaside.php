    <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="img/find_user.png" class="user-image img-responsive"/>
                    <h3 style="color:white;">
                        <?php 
                            if (isset($_SESSION['puesto'])) {
                                echo $_SESSION['puesto']; 
                            }
                        ?>
                    </h3>
					</li>
                    <li>
                        <a class="active-menu"  href="home.php"><i class="icon-home icon-3x"></i> Inicio</a>
                    </li>
                    <?php
                        if($_SESSION['opcion'] == "admin"){
                        $consulta_categoria=mysql_query("SELECT * FROM categoria_pagina WHERE status_categoria_pagina ='1' and nombre_categoria_pagina <> 'venta' ");
                        while($result_categoria =mysql_fetch_assoc($consulta_categoria)){
                            $icono_categoria = $result_categoria['icono_categoria_pagina'];
                            $nombre_categoria_pagina = $result_categoria['nombre_categoria_pagina'];
                            $print = true;
                           
                            $consulta_pagina=mysql_query("SELECT * FROM pagina WHERE status_pagina ='1' and id_categoria_pagina='".$result_categoria['id_categoria_pagina']."' ");
                             while($result_pagina =mysql_fetch_assoc($consulta_pagina)){
                                $nombre_pagina=$result_pagina['nombre_pagina'];
                                $id_pagina=$result_pagina['id_pagina'];
                                $icono_pagina = $result_pagina['icono_pagina'];
                                $url=$result_pagina['url_pagina'];
                                $consulta_privilegio=mysql_query("SELECT * FROM privilegio WHERE id_usuario ='".$_SESSION['id_usuario']."' ");
                                while($result_privilegio=mysql_fetch_assoc($consulta_privilegio)){
                                    $id_pagina_privilegio = $result_privilegio['id_pagina'];
                                    if($id_pagina_privilegio == $id_pagina){
                                       if($print==true){
                                        $_SESSION[$id_pagina]=$id_pagina;
                                         echo '
                                            <li>
                                                <a href="#"><i class="'.$icono_categoria.'"></i> '.$nombre_categoria_pagina.'<span class="fa arrow"></span></a>
                                                <ul class="nav nav-second-level">
                                            ';
                                            $print =false; 
                                        }
                                        echo '
                                            <li >
                                                <a  href="'.$url.'"><i class="'.$icono_pagina.'"></i>'.$nombre_pagina.'</a>
                                            </li>
                                        ';
                                    }
                                }
                            }
                                        echo '
                                            </ul>
                                         </li>'; 
                        }
                    }
                     ?>
                    
<!--
                     <li>
                       <a href="#"><i class="fa fa-sitemap fa-3x"></i> Administrador<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li >
                                <a  href="empleados.php"><i class="icon-group icon-2x"></i> Empleados</a>
                            </li>
                    		<li>
                                <a href="usuarios.php"><i class="icon-user icon-2x"></i>Usuarios</a>
                            </li>
                    		<li>
                                <a href="mesas.php"><i class="icon-ticket icon-2x"></i>Mesas</a>
                            </li>
                            <li>
                                <a href="categoria_ingredientes.php"><i class="icon-list-ol icon-2x"></i>Categoria de ingredientes</a>
                            </li>
                            <li>
                                <a href="ingredientes.php"><i class="icon-list-ul icon-2x"></i>Ingredientes</a>
                            </li>
                            <li>
                                <a href="tamano.php"><i class="icon-indent-right icon-2x"></i>Tamaño de Pizza</a>
                            </li>
                             <li>
                                <a href="pizza.php">Pizza</a>
                            </li>
                            <li>
                                <a href="productos.php">Otros</a>
                            </li>
                            <li>
                                <a  href="inventario.php"><i class="fa fa-qrcode fa-3x"></i> Inventario</a>
                            </li>

                            <li  >
                                <a   href="reportes.php"><i class="fa fa-bar-chart-o fa-3x"></i> Reportes</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                       <a href="#"><i class="icon-gears icon-3x"></i>Root<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="categorias_pages.php"><i class="icon-chevron-sign-right icon-1x"></i>Categoria Pages</a>
                            </li>
                            <li>
                                <a href="pages.php"><i class="icon-chevron-sign-right icon-1x"></i>Pages</a>
                            </li>
                            <li>
                                <a href="cargo_empleados.php"><i class="icon-chevron-sign-right icon-1x"></i>Cargo Empleados</a>
                            </li>
                        </ul>

                   -->     
                </ul>
            </div>
        </nav>