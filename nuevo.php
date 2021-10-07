<?php
	include "conexion.php";
	include "protect.php";
	$sql="select UsuarioId,Usuario from usuarios";
	$resultado=mysqli_query($link,$sql);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
	
<body>
<?php
	include "barra.php";
?>
<form action="enviar.php" method="post" name="form1" id="form1">
    <tbody>
      <tr>
        <td width="203"><label for="para">Para:</label></td>
        <td width="177"><p>
          <select name="para" id="para">
            <?php 
          while($fila=mysqli_fetch_array($resultado))          
                    echo "<option value=".$fila['UsuarioId'].">".$fila['Usuario']."</option>";?>
            
          </select>
        </p>
        <p>&nbsp; </p></td>
      </tr>
      <tr>
        <td><label for="asunto">Asunto:
          <input type="text" name="asunto" id="asunto">
          <br>
          <br>
        </label></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><p>
          <label for="texto">Mensaje:</label>
          <textarea name="texto" cols="60" rows="5" id="texto"></textarea>
        </p>
        <p>&nbsp; </p></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name="submit" type="submit" id="submit" formaction="enviar.php" value="Enviar"></td>
      </tr>
    </tbody>
</body>
</html>