<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
		$num=$_POST["tablas"];
		$i;
		
		for($i=0;$i<=9;$i++)
		{
			echo $num." x ".$i." = ".($num*$i)."<br>";	
		}
	?>
</body>
</html>