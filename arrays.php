<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
		$frutas= array();	
		$frutas[]="uva";
		$frutas[]="pera";
		
		echo $frutas[1];
		echo "<hr><pre>";
		print_r($frutas);
		
		foreach($frutas as $f)
		{
			echo $f."<br>";
		}
		foreach($frutas as $i=>$f)
		{
			echo $i."-".$f."<br>";
		}
		file_put_contents("frutas.txt",serialize($frutas));
	
	?>
</body>
</html>