<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<form method="post" action="cargacaja.php">
    	<p>
    	  <label for="importe">importe</label> 
    	  <input type="number" name="importe" value="1">
    	  <input type="submit"  name="boton" value="+">
  	  </p>
      <?php
      if(file_exists("cuenta.txt"))
		{
			$contenido=file_get_contents("cuenta.txt");
			$contenido=unserialize($contenido);
		}
		else
		{
			$contenido=array();
		}
		echo "<pre>";
		foreach($contenido as $valor)
		{
			echo $valor."<br>";
		}	
      ?>
	</form>
</body>
</html>