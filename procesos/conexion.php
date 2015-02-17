<?php
$conexion=mysql_connect("localhost","root","") or die("No hay conexion");
$conexion_bd=mysql_select_db("db_pizzeria",$conexion) or die("No existe la base de datos");
?>