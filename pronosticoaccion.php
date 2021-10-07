<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<h1 align="center" style="color:hsla(0,0%,0%,1.00)">
		<?php
        	$temp=$_POST["temperatura"];
			$combo=$_POST["select"];
        	$radio=$_POST["radio"];
			
            if($temp>=13 && $temp<=26)
			{
				if($combo=="1" && $radio=="no")
				{
					echo "el pronostico es tiempo templado";
				}
				if($radio=="si")
				{
					echo "salir con paraguas";
				}
			}
			if($temp>26 && $radio=="si")
			{
				echo "no salir"; 
			}
			if($temp<10 && $combo=="2")
			{
				echo "no salir";
			}
		?>
	</h1>
</body>
</html>