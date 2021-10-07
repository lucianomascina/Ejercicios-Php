<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	$f=$_POST["fila"];
	$c=$_POST["columna"];
	
	if(!file_exists("partida.txt")){
		echo "no hay partida";
	}else{
		$partida=unserialize(file_get_contents("partida.txt"));
		if(file_exists("tiros.txt")){
			$tiros=unserialize(file_get_contents("tiros.txt"));
		}else{
			$tiros=array();	
		}
		$tiros[]=$f."-".$c;
		file_put_contents("tiros.txt",serialize($tiros));
		if(in_array($f."-".$c,$partida)){
			echo "hundido";
		}else{
			echo "agua";
		}
	}	
?>
</body>
</html>