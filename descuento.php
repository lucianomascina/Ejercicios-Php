<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<form action="descuentoaccion.php" method="post" name="form1" id="form1">
  <p>
    <label for="importe">Importe:</label>
    <input type="number" name="importe" id="importe">
  </p>
  <p>
    <input name="checkbox" type="checkbox" id="checkbox" value="si" >
    <label for="checkbox">Descuento de 10 </label>
  </p>
  <p>
    <input name="checkbox2" type="checkbox" id="checkbox2" value="si">
    <label for="checkbox2">Descuento de 5</label>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Calcular">
  </p>
</form>
	


</body>
</html>