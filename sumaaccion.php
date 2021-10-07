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
    	
			echo "La suma es: ".($n1+$n2);	

		?>
	</h1>
</body>
</html>