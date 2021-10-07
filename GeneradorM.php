<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	$s=array();
	$s[]="11";
	$s[]="21";
	$s[]="31";
	$s[]="41";
	$s[]="51";
	$s[]="22";
	$s[]="33";
	$s[]="24";
	$s[]="15";
	$s[]="25";
	$s[]="35";
	$s[]="45";
	$s[]="55";
	
	file_put_contents("archivo.txt",serialize ($s));
	echo "escrito";
?>
</body>
</html>