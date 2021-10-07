<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
		if(file_exists("datos.txt"))
		{
			$contenido=file_get_contents("datos.txt");
		}
		else{
				$contenido="";
			}
		echo "<pre>";
		echo $contenido;	
	?>
</body>
</html>