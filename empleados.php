<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php session_start();  ?>

    <?php include 'include/lib-head-css.php'; ?>
    <script type="text/javascript">
            $(function () {
                $('#datetimepicker5').datetimepicker({
                    pickTime: false
                });
            });
        </script>
    
</head>
<body>
    <div id="wrapper">

    <?php 
    include 'include/lib-navbar.php'; 
    include 'include/lib-navaside.php';
    ?>

   
         
        </div>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >


        <?php include 'include/page/lib-conten-empleados.php'; ?>
         <!-- /. PAGE WRAPPER  -->

        
        </div>
        <div id="myDiv"></div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
     <?php 
        include 'include/lib-js.php';
     ?>
    
   
</body>
</html>
