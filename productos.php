<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php session_start();  ?>
    <?php include 'include/lib-head-css.php'; ?>
        <script type="text/javascript">
        function validar(id){
            document.getElementById(id).oncontextmenu=function(){return false;} // omitir el menu contextual
            document.getElementById(id).oncopy=function(){return false;} // omitir el copiar
            document.getElementById(id).onpaste=function(){return false;} // omitir el pegar
            document.getElementById(id).oncut=function(){return false;} // omitir el cortar
        }
        function numero() {
             if ((event.keyCode < 45) || (event.keyCode > 57)) 
                event.returnValue = false;
        }
    </script>
</head>
<body>
    <div id="wrapper">

    <?php 
    include 'include/lib-navbar.php'; 
    include 'include/lib-navaside.php';
    ?>

   
         
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >


        <?php include 'include/page/lib-conten-producto.php'; ?>
         <!-- /. PAGE WRAPPER  -->
        </div>
        <div id="myDiv"></div>
    
    <?php 
include 'include/lib-js.php';
     ?>
   
</body>
</html>
