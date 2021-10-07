<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<h1>
		<?php
			$importe=$_POST["importe"];
			$desc10=$_POST["checkbox"];
			$desc5=$_POST["checkbox2"];
			
			if($desc5=="si"&&$desc10=="si")
			{
				echo "importe con descuento: $".($importe*0.85);
			}
			else 
			{
				if($desc10=="si")
				{
				echo "importe con descuento: $".($importe*0.9);
				}
				if($desc5=="si")
				{
				echo "importe con descuento: $".($importe*0.95);
				}
			}
	
			
		?>	
	</h1>
</body>
</html>