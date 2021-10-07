<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
		if(file_exists("frutas.txt"))
		{
			$contenido=file_get_contents("frutas.txt");
			$contenido=unserialize($contenido);
		}
		else{
				$contenido=array();
			}
		echo "<pre>";
		foreach($contenido as $valor)
		{
			echo $valor."<br>";
		}	
	?>
</body>
</html>