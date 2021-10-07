<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
		$array=array();
		
		for($i=1;$i<=20;$i++)
		{
			$array[]=rand(1,10000);	
		}
		file_put_contents("random.txt",serialize($array));
		if(file_exists("random.txt"))
		{
			$contenido=file_get_contents("random.txt");
			$contenido=unserialize($contenido);
		}
		else{
				$contenido=array();
			}
		echo "<pre>";
		foreach($contenido as $valor)
		{
			echo $valor."<br>";
		}	
	
	?>
</body>
</html>