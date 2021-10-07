<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	$partida=array();
	$barcos=0;
	while($barcos<5)
	{
		$c=rand(1,5);
		$f=rand(1,5);
		$coordenada=$f."-".$c;
		if(!in_array($coordenada,$partida))
		{
			$partida[]=$coordenada;
			$barcos++;	
		}
				
	}
	file_put_contents("partida.txt",serialize($partida));
?>
</body>
</html>