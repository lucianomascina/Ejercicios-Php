<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	$base=array();
	for($f=1;$f<=5;$f++)
	{
		for($c=1;$c<=5;$c++)
		{
			if(isset($_POST[$f.$c]))
			{
				$base[]=$f.$c;
			}
		}
	}
	file_put_contents("archivo.txt", serialize($base));
	echo "escrito";
?>
</body>
</html>