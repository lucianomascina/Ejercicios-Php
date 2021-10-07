<?php
	include "conexion.php";
	include "protect.php";
	
	$para=$_POST["para"];
	$asunto=$_POST["asunto"];
	$texto=$_POST["texto"];
	$de=$_SESSION["UsuarioId"];

	$sql=sprintf("insert into mensajes(texto,asunto,fecha,de,para,estado) values('%s','%s',now(),%d,%d,0)",$texto,$asunto,$de,$para);
	mysqli_query($link,$sql);
	header("location:menu.php");
?>