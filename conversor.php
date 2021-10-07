<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<form action="conversoraccion.php" method="post" name="form1" id="form1">
  <p>
    <label for="importe">Importe:</label>
    <input type="number" name="importe" id="importe">
  </p>
  <p>
    <input type="radio" name="radio" id="radio1" value="dolar" checked>
    <label for="radio1">DOLAR -> PESO<br>
    </label>
    <input type="radio" name="radio" id="radio2" value="peso">
    <label for="radio2">PESO ->DOLAR </label>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="CALCULAR">
  </p>
</form>
</body>
</html>