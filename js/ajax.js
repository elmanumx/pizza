///funcion para dibujar tablas
$(document).ready(function () {
    $('#dataTables-example').dataTable();
});


function validar(e) {
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==13) login();
}


function login(){
	var xmlhttp;
	var usuario = document.getElementById("id_usuario").value;
	var pass = document.getElementById("password").value;
	var opc = document.getElementsByName("user");
	var opcion ="";
	for (var i = 0; i < opc.length; i++){
		if(opc[i].checked){
			 opcion = opc[i].value;
		}
	}
	//alert('user ='+usuario+'pass='+pass+'opcion='+opcion);

	if(usuario.trim()==''){
	   alert("Complete los campos");
	  document.getElementById("id_usuario").focus();
	  return;
	}
	if(pass.trim()==''){
	   alert("Complete los campos");
	  document.getElementById("password").focus();
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
	    alert("alerta no esta en la bd");
	  }
	  else{
	    document.location.href="home.php";
  		}
	}
	}
	xmlhttp.open("POST","procesos/login.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("usuario="+usuario+"&pass="+pass+"&opcion="+opcion);
}

function mostrar_opcion(valor){
	var div="opcion"+valor.value;
	if(valor.checked){
		document.getElementById(div).style.display="";
	}else{
		document.getElementById(div).style.display="none";
	}

}

function enviar_con_extras(id,opcion){
	var xmlhttp;
	id=id;
	var opcion=opcion;
	var tamano=document.getElementsByName("tamano");
	var nomb_ingre=document.getElementsByName("checkeds");
	var cantidad=document.getElementById("cantidad").value;
	var nombre = new Array();
	var count=0;
	//ciclo para obtener el nombre de los extras
	for(var i=0; i<nomb_ingre.length; i++){
		if(nomb_ingre[i].checked){
		 	nombre[count]=nomb_ingre[i].value
			count++;
		}
	}
	for(var i=0; i<tamano.length; i++){
		if(tamano[i].checked){
		var valor=tamano[i].value
		}
	}
	if(id==""){
		document.getElementById("myDiv2").innerHTML="";
		return;
	}
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("myDiv2").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("POST","procesos/proc.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("id="+id+"&tamano="+valor+"&cantidad="+cantidad+"&opcion="+opcion+"&nombre="+nombre);

}

function checar_extrasc(valor){
	//var chek = document.getElementById(extras).value;
	if(valor.checked==true){
		document.getElementById("comprarc").style.display="none";
		document.getElementById("extrac").style.display="";
		document.getElementById("div_extrac").style.display="";
	}else{
		document.getElementById("comprarc").style.display="";
		document.getElementById("extrac").style.display="none";
		document.getElementById("div_extrac").style.display="none";
	}
}

function checar_extras(valor){
	//var chek = document.getElementById(extras).value;
	if(valor.checked==true){
		document.getElementById("comprar").style.display="none";
		document.getElementById("extra").style.display="";
		document.getElementById("div_extra").style.display="";
	}else{
		document.getElementById("comprar").style.display="";
		document.getElementById("extra").style.display="none";
		document.getElementById("div_extra").style.display="none";
	}
}


function enviar_con_extra_combinada(id,opcion){
	var xmlhttp;
	var tamano=document.getElementsByName("tamano2");
	var nomb_ingre=document.getElementsByName("checkedsc");
	var cantidad=document.getElementById("cantidad_pc").value;
	var pizza1 = document.getElementById("select1").value;
	var pizza2 = document.getElementById("select2").value;
	var nombre = new Array();
	var nomb = '('+pizza1+','+pizza2+')';
	var count=0;


	for(var i=0; i<nomb_ingre.length; i++){
		if(nomb_ingre[i].checked){
		 	nombre[count]=nomb_ingre[i].value;
			count++;
		}
	}

	for(var i=0; i<tamano.length; i++){
		if(tamano[i].checked){
		var valor=tamano[i].value
		}
	}
	if(id==""){
		document.getElementById("myDiv2").innerHTML="";
		return;
	}
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}else{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("myDiv2").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("POST","procesos/proc.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("id="+id+"&tamano="+valor+"&cantidad="+cantidad+"&opcion="+opcion+'&nomb='+nomb+'&nombre='+nombre);
	//xmlhttp.send('var1='+a+'&var2='+b);
}

function combinada(id,opcion){
	var xmlhttp;
	var tamano=document.getElementsByName("tamano2");
	var cantidad=document.getElementById("cantidad_pc").value;
	var pizza1 = document.getElementById("select1").value;
	var pizza2 = document.getElementById("select2").value;
	var nomb = '('+pizza1+','+pizza2+')';
	for(var i=0; i<tamano.length; i++){
		if(tamano[i].checked){
		var valor=tamano[i].value
		}
	}
	
	if(id==""){
		document.getElementById("myDiv2").innerHTML="";
		return;
	}
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}else{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("myDiv2").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("POST","procesos/proc.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("id="+id+"&tamano="+valor+"&cantidad="+cantidad+"&opcion="+opcion+'&nomb='+nomb);
	//xmlhttp.send('var1='+a+'&var2='+b);
}



function comprar_pizza(id,opcion){
	var xmlhttp;
	id=id;
	var opcion=opcion;
	var tamano=document.getElementsByName("tamano");
	var cantidad=document.getElementById("cantidad").value;
	for(var i=0; i<tamano.length; i++){
		if(tamano[i].checked){
		var valor=tamano[i].value
		}
	}

	if(id==""){
		document.getElementById("myDiv2").innerHTML="";
		return;
	}
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("myDiv2").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("POST","procesos/proc.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("id="+id+"&tamano="+valor+"&cantidad="+cantidad+"&opcion="+opcion);
	//xmlhttp.send('var1='+a+'&var2='+b);

}


function comprar_producto(id,opcion){
	var xmlhttp;
	id=id;
	var opcion=opcion;
	var cantidad=document.getElementById("cantidad2").value;

	if(id==""){
		document.getElementById("myDiv2").innerHTML="";
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
			document.getElementById("myDiv2").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("POST","procesos/proc.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("id="+id+"&cantidad="+cantidad+"&opcion="+opcion);
	//xmlhttp.send('var1='+a+'&var2='+b);

}

//// Funcion de agregar, eliminar o restar productos del arreglo
function operaciones(id,operacion){
	var xmlhttp;

	if(id==""){
		document.getElementById("myDiv2").innerHTML="";
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
			document.getElementById("myDiv2").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("POST","procesos/proc.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("id="+id+"&operacion="+operacion+"&opcion="+'4'+"&cantidad="+'1');
	//xmlhttp.send('var1='+a+'&var2='+b);

}
