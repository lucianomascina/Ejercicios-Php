<?php
	include "conexionarticulos.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	$sql="select * from articulos";
	$res=mysqli_query($link,$sql);
?>
<form id="form1" name="form1" method="post" action="guardararticulos.php">
  <p>
    <label for="textfield">Articulo:</label>
    <input type="text" name="articulo" id="textfield">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="textfield2">Importe:$</label>
    <input type="text" name="importe" id="textfield2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="guardar" id="submit" value="+">
  </p>
  <table width="496" border="1">
    <tbody>
     <?php 
		if(@mysqli_num_rows($res)){?>
		
      <tr>
        <td width="367" align="center">Articulo</td>
        <td width="113" align="center">Importe</td>
      </tr>
      <?php 
	  		$total=0;
	  		while($fila=mysqli_fetch_array($res)){ $total+=$fila["importe"];?>
      <tr>
        <td><?php echo $fila["descripcion"];?></td>
        <td><?php echo $fila["importe"];?></td>
      </tr> 
	  <?php } ?>
      <tr>
        <td align="right">Total$</td>
        <td><?php echo $total; ?></td>
      </tr>
     
      <?php } ?>
    </tbody>
  </table>
  <p><a href="vaciarcaja.php">Vaciar caja</a></p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>