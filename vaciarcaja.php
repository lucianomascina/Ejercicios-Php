<?php
	include "conexionarticulos.php";
	
	$sql="delete from articulos";
	mysqli_query($link,$sql);
	header("location:mostrararticulos.php");
?>