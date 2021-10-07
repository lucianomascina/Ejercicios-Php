<?php
	if(file_exists("cuenta.txt"))
	{
		$cuenta=unserialize(file_get_contents("cuenta.txt"));
		
	}
	else
	{
		$cuenta=array();	
		
	}
	$cuenta[]=$_POST["importe"];
	file_put_contents("cuenta.txt",serialize($cuenta));
	header("location:caja.php");
?>