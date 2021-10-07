<?php
	include "conexionarticulos.php";
	$descripcion=$_POST["articulo"];
	$importe=$_POST["importe"];
	
	$sql="insert into articulos(descripcion,importe) values('".$descripcion."',".$importe.")";
	mysqli_query($link,$sql) or die(mysqli_error());
	header("location:mostrararticulos.php");
?>
