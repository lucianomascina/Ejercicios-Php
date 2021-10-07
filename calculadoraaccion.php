<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<h1>
		<?php
			$n1=$_POST["n1"];
			$n2=$_POST["n2"];	
			$op=$_POST["select"];
			
			switch($op)
			{
				case "1":echo "La suma es: ".($n1+$n2);
					break;
				case "2":echo "La resta es: ".($n1-$n2);
					break;
				case "3":echo "La multiplicacion es: ".($n1*$n2);
					break;
				case "4":echo "La division es: ".($n1/$n2);
					break;	
				default:
				break;	
			}
		?>
	</h1>
</body>
</html>