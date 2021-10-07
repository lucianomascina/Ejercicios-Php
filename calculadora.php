<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<form action="calculadoraaccion.php" method="post" name="form1" id="form1">
  <p>
    <label for="n1">:</label>n1:
    <input type="number" name="n1" id="n1">
  </p>
  <p>n2:
    <input type="number" name="n2" id="n2">
  </p>
  <p>operación:
    <select name="select" id="select">
      <option value="1" selected="selected">sumar</option>
      <option value="2">restar</option>
      <option value="3">multiplicar</option>
      <option value="4">dividir</option>
    </select>
  </p>
  <p>
    <input name="submit" type="submit" id="submit" form="form1" value="CALCULAR">
  </p>
</form>
</body>
</html>