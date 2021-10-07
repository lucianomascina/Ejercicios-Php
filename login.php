<?php
	session_start();
	include "conexion.php";
	$usuario=$_POST["usuario"];
	$password=$_POST["password"];
	$sql=sprintf("select * from usuarios where Usuario='%s' and Password='%s'",$usuario,$password);
	$resultado=mysqli_query($link,$sql);
	if(@mysqli_num_rows($resultado))
	{
		$fila=mysqli_fetch_array($resultado);
		$_SESSION["usuario"]=$fila["Usuario"];
		$_SESSION["usuarioid"]=$fila["UsuarioId"];
		
		
		header("location:menu.php");
	}
	else{
		header("location:index.php");
	}
?>