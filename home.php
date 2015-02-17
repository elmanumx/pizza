<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <?php
    
    session_start(); 
    if (isset($_SESSION['id_mesa'])) {
        unset($_SESSION['id_mesa']);    
      }
    if (isset($_SESSION['cve_mesero'])) {
        unset($_SESSION['cve_mesero']);    
      }
    if (isset($_SESSION['puesto'])) {
        unset($_SESSION['puesto']);    
      }
    if (isset($_SESSION['carro'])) {
        unset($_SESSION['carro']);    
      }
    include 'include/lib-head-css.php';
      ?>
  
 <script type="text/javascript">

  function verificar_mesero(){
var xmlhttp;
var n=document.getElementById('valor').value;
if(n==''){
  document.getElementById("myDiv").innerHTML="";
  return;
}
if (window.XMLHttpRequest){
// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
}else{// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState==4 && xmlhttp.status==200){
  
  if(xmlhttp.responseText=='no'){
   // alert("alerta no esta en la bd");
  $("#idm").modal("show");
  }
  else{
    document.location.href="opciones_mesero.php";
   // $("#123").modal("show");
  }
  
}
}
xmlhttp.open("POST","procesos/login_mesero.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
//
}
</script>

</head>
<body>
    <div id="wrapper">
   
      <?php 
      include 'include/lib-navbar.php'; 
      include 'include/lib-navaside.php';
      ?>
     
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >

        <?php include 'include/page/lib-conten-home.php'; ?>
         <!-- /. PAGE WRAPPER  -->
             


        </div>
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
    
   
</body>
</html>
