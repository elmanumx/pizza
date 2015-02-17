<!DOCTYPE html>
<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'include/lib-head-css.php'; ?>
    
    <script type="text/javascript">
    function validacheck(id){
        var caja = id.toString()+id.toString();
        if(document.getElementById(id).checked){
        document.getElementById(caja).type="number";
        }
        else{
            document.getElementById(caja).type="hidden";
            document.getElementById(caja).value="";
        }
    }

    </script>
<body>
    <div id="wrapper">

    <?php 
    include 'include/lib-navbar.php'; 
    include 'include/lib-navaside.php';
    ?>
         
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >


        <?php include 'include/page/lib-conten-pizza2.php'; ?>
         <!-- /. PAGE WRAPPER  -->
        </div>

        

 <?php 
include 'include/lib-js.php';
     ?>
      
   
</body>
</html>
