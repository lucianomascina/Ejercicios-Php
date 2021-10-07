<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
		$numero=4.7;
		
		echo "<p>numero: ".$numero."</p>";
		echo "<p>numero: ".floor($numero)."</p>";
		echo "<p>numero: ".ceil($numero)."</p>";
		echo "<p>numero: ".round($numero,0)."</p>";
	?>
</body>
</html>