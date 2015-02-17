function load_tproductos(id_producto){
		var xmlhttp;

		var n=id_producto;
		if(n==''){
			document.getElementById("myDiv").innerHTML="";
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
				document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
				$("#tproductos").modal("show");
			}
		}
		xmlhttp.open("POST","procesos/ajax_modal/result_tproductos.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("q="+n);
}


function load_productos(id_p){
	var xmlhttp;

	var id_p=id_p;
	if(n==''){
		document.getElementById("result_productos").innerHTML="";
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
			document.getElementById("result_productos").innerHTML=xmlhttp.responseText;
			$("#tproductos").modal("show");
		}

	}
	xmlhttp.open("POST","procesos/ajax_modal/result_tproductos.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("id_p="+id_p);
}



	function load_tpizzas(id_pizza){
		var xmlhttp;

		var n=id_pizza;
		if(n==''){
			document.getElementById("myDiv").innerHTML="";
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
				document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
				$("#tpizza").modal("show");
			}
		}
		xmlhttp.open("POST","procesos/ajax_modal/result_tpizzas.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("q="+n);
}




function load_pizza(id_pizza,modals)
	{
	var xmlhttp;

	var n=id_pizza;
	var modal=modals;
	if(n==''){
	document.getElementById("myDiv").innerHTML="";
	return;
	}

	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
	{
	document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
	          
	if(modal=="1"){
	$("#modal").modal("show");
	}
	if(modal=="2"){
	$("#modalmod").modal("show");
	}
	if(modal=="3"){
	$("#baja").modal("show");
	}


	}
	}
	xmlhttp.open("POST","procesos/ajax_modal/result_pizza.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("q="+n);
}

///////////////////////////////////////// CATEGORIA DE PAGINAS
function load_mesas(id_mesa,modals)
{
var xmlhttp;

var n=id_mesa;
var modal=modals;
if(n==''){
document.getElementById("myDiv").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
          
if(modal=="1"){
$("#modificar").modal("show");
}
if(modal=="2"){
$("#baja").modal("show");
}

}
}
xmlhttp.open("POST","procesos/ajax_modal/result_mesas.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}



////////////////////////////////////////// CATEGORIA DE PAGINAS
function load_catpage(id_catpage,modals)
{
var xmlhttp;

var n=id_catpage;
var modal=modals;
if(n==''){
document.getElementById("myDiv").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
          
if(modal=="1"){
$("#modificar").modal("show");
}
if(modal=="2"){
$("#baja").modal("show");
}

}
}
xmlhttp.open("POST","procesos/ajax_modal/result_categoria_page.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}

///////////////////////////////PAGINAS
function load_page(id_page,modals)
{
var xmlhttp;

var n=id_page;
var modal=modals;
if(n==''){
document.getElementById("myDiv").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
          
if(modal=="1"){
$("#modificar").modal("show");
}
if(modal=="2"){
$("#baja").modal("show");
}

}
}
xmlhttp.open("POST","procesos/ajax_modal/result_page.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}


///////////////////////////////CARGO DE EMPLEADOS
function load_cemp(id_cemp,modals)
{
var xmlhttp;

var n=id_cemp;
var modal=modals;
if(n==''){
document.getElementById("myDiv").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
          
if(modal=="1"){
$("#modificar").modal("show");
}
if(modal=="2"){
$("#baja").modal("show");
}

}
}
xmlhttp.open("POST","procesos/ajax_modal/result_cargo_empleados.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}

/////////////////////////////// EMPLEADOS
function load_emp(id_emp,modals)
{
var xmlhttp;

var n=id_emp;
var modal=modals;
if(n==''){
document.getElementById("myDiv").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
          
if(modal=="1"){
$("#modificar").modal("show");
}
if(modal=="2"){
$("#baja").modal("show");
}
if(modal=="3"){
$("#new_user").modal("show");
}


}
}
xmlhttp.open("POST","procesos/ajax_modal/result_empleados.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}


/////////////////////////////// USUARIOS
function load_user(id_user,modals)
{
var xmlhttp;

var n=id_user;
var modal=modals;
if(n==''){
document.getElementById("myDiv").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
          
if(modal=="1"){
$("#modificar").modal("show");
}
if(modal=="2"){
$("#baja").modal("show");
}



}
}
xmlhttp.open("POST","procesos/ajax_modal/result_usuarios.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}


/////////////////////////////// CATEGORIA DE INGREDIENTES
function load_cing(id_cing,modals)
{
var xmlhttp;

var n=id_cing;
var modal=modals;
if(n==''){
document.getElementById("myDiv").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
          
if(modal=="1"){
$("#modificar").modal("show");
}
if(modal=="2"){
$("#baja").modal("show");
}



}
}
xmlhttp.open("POST","procesos/ajax_modal/result_categoria_ingrediente.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}

/////////////////////////////// INGREDIENTES
function load_ing(id_ing,modals)
{
var xmlhttp;

var n=id_ing;
var modal=modals;
if(n==''){
document.getElementById("myDiv").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
          
if(modal=="1"){
$("#modificar").modal("show");
}
if(modal=="2"){
$("#baja").modal("show");
}



}
}
xmlhttp.open("POST","procesos/ajax_modal/result_ingredientes.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}



/////////////////////////////// INGREDIENTES
function load_tamano(id_tamano,modals)
{
var xmlhttp;

var n=id_tamano;
var modal=modals;
if(n==''){
document.getElementById("myDiv").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
          
if(modal=="1"){
$("#modificar").modal("show");
}
if(modal=="2"){
$("#baja").modal("show");
}



}
}
xmlhttp.open("POST","procesos/ajax_modal/result_tamano.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}

/////////////////////////////// PRODUCTOS
function load_pro(id_pro,modals)
{
var xmlhttp;

var n=id_pro;
var modal=modals;
if(n==''){
document.getElementById("myDiv").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
          
if(modal=="1"){
$("#modificar").modal("show");
}
if(modal=="2"){
$("#baja").modal("show");
}



}
}
xmlhttp.open("POST","procesos/ajax_modal/result_productos.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}