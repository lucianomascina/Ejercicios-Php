<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<form name="form" method="post" action="accion.php">
    	<label for="texto">texto</label>
    	<input type="text" name="texto" value="hola"><br>
        <input type="number" name="numero"><br>
        <input type="date" name="dia"><br>
        <input type="email" name="email"><br>
        <input type="checkbox" name="checkbox" value="si" checked><br>
        <input type="radio" name="op" value="si">
        <input type="radio" name="op" value="no" checked><br>
        <select name="lista">
        	<option value="1">mdp</option>
        	<option value="2" selected> miramar</option><br>
        </select>
        <textarea name="areadetexto" rows=="10" cols="50">
        	HELLO WORLD!
        </textarea>
        
        <input type="submit" value="enviar">
    </form>
</body>
</html>