<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

    <?php
		//bucle for
		
		for($cont=1;$cont<=10;$cont++)
		{
			echo $cont."&nbsp;";	
		}	
		echo "<br>";
		for($cont=10;$cont>=1;$cont--)
		{
			echo "<p>".$cont."</p>";	
		}	
		echo "<br>";
		for($cont=10;$cont<=50;$cont=$cont+10)
		{
			echo $cont."&nbsp;";	
		}	
		
	?>
</body>
</html>