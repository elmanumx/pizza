<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php session_start();  ?>

    <?php include 'include/lib-head-css.php'; 
    
session_start();

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


        <?php include 'include/page/lib-conten-modificar-orden2.php'; ?>
         <!-- /. PAGE WRAPPER  -->

         
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="js/morris/raphael-2.1.0.min.js"></script>
    <script src="js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>
    
    <script type="text/javascript" src="js/ajax.js"></script>
   
</body>
</html>
