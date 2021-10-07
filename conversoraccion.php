<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<h1>
		<?php
			$impo=$_POST["importe"];
			$op=$_POST["radio"];
			
			if($op=="dolar")
			{
				echo "SON ".($impo*15.6)." PESOS";
			}
			if($op=="peso")
			{
				echo "SON ".($impo*15.2)." DOLARES";
			}	
		?>
	</h1>
</body>
</html>