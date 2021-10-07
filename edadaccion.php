<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<h1>
		<?php
			$edad=$_POST["edad"];
				    
    		if($edad>=18)
			{
				echo "es mayor";	
			}
			else
			{
				echo "es menor";
			}
		?>
	</h1>
</body>
</html>