<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	$s=array();
	$s[]="12";
	$s[]="22";
	$s[]="14";
	$s[]="24";
	$s[]="41";
	$s[]="52";
	$s[]="53";
	$s[]="54";
	$s[]="45";
	
	file_put_contents("simbolo.txt",serialize ($s));
	echo "escrito";
?>
</body>
</html>