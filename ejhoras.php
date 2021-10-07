<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
		$horasanuales=1200;	
		$semanas=52;
		$dias=5;
		$horasxdia=$horasanuales/($semanas*$dias);
		
		echo "usted trabaja ".$horasxdia." hs al dia";
	?>
</body>
</html>