<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
		$n1=$_POST["n1"];
		$n2=$_POST["n2"];
		
		for($n1;$n1<=$n2;$n1++)
		{
			echo "<p>".$n1."</p>";	
		}
	?>
</body>
</html>