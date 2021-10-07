<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<form action="sumaaccion.php" method="post" name="form1" id="form1">
  <p>
    <label for="n1">n1:</label>
    <input name="n1" type="number" id="n1">
  </p>
  <p>
    <label for="n2">n2:</label>
    <input type="number" name="n2" id="n2">
  </p>
  <p>
    <input name="submit" type="submit" id="submit" form="form1" value="sumar">
  </p>
</form>
</body>
</html>