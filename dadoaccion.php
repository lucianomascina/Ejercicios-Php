<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
		$i;
		for($i=1;$i<=6;$i++)
		{
			echo "Dado ".$i.": ".rand(1,6)."<br>"; 
		}
	?>
</body>
</html>