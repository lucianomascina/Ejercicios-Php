<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
		$contenido="hola mundo \n \r";
		file_put_contents("datos.txt",$contenido);
		file_put_contents("datos.txt",$contenido,FILE_APPEND);
		echo "escrito!";
	?>		
</body>
</html>