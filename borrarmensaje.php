<?php
	include "protect.php";
	include "conexion.php";
	
	$idmensaje=$_GET["idborrar"];
	$sql="delete from mensajes where idmensaje=".$idmensaje;
	mysqli_query($link,$sql);
	header("location:menu.php");
	
?>