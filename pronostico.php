<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<form action="pronosticoaccion.php" method="post" name="form1" id="form1">
  <p>
    <label for="temperatura">Temperatura:</label>
    <input type="number" name="temperatura" id="temperatura">
  </p>
  <p>
    <label for="select"></label>
    <select name="select" id="select">
      <option value="1" selected="selected">DIA</option>
      <option value="2">NOCHE</option>
    </select>
  </p>
  <p>Llueve: 
    <input name="radio" type="radio" id="radio" value="si" checked="checked">
    <label for="radio">SI</label>
    <input type="radio" name="radio" id="radio2" value="no" >
    <label for="radio2">NO</label>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="PRONOSTICAR">
  </p>
</form>
</body>
</html>