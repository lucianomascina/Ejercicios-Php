<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	$diametro=10;
	$radio=$diametro/2;
	$altura=5;
	$volumen=3.14*($radio*$radio)*$altura;
	$capacidad=$volumen*1000;
	
	echo "El tanque tiene un volumen de ".$volumen." m3, por lo tanto tiene capacidad para ".$capacidad." litros";
	?>
</body>
</html>