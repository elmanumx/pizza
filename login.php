<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
session_destroy();
 ?>

<head>

   
    <?php include 'include/lib-head-css.php'; ?>

</head>

<body>

    <div class="container" onkeypress="validar(event)">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class=" panel panel-default" style="margin-top: 25%;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <form>
                    <div class="panel-body">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" id="id_usuario" placeholder="Nombre de usuario" name="user" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="password" placeholder="Password" name="password" type="password">
                                </div>
                                    <input type="radio"  value ="admin" name="user" checked> Admistrador
                                    <input type="radio"  value ="empleado" name="user" > Empleado
                                
                                <a type="submit" class="btn btn-lg btn-success btn-block"  onclick="login()">Entrar</a>
                            </fieldset>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  <?php 
        include 'include/lib-js.php';
     ?>
</body>

</html>
