<?php
	include "protect.php";
	include "conexion.php";
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
		$sql="select * from Usuarios";
		$res=mysqli_query($link,$sql);
		if(@mysqli_num_rows($res)){
	?>
<table width="600" border="1">
  <tbody>
    <tr>
      <th colspan="2" scope="col">Usuarios</th>
    </tr>
    <tr>
      <td align="center">Nombre </td>
      <td align="center">Id </td>
    </tr>
    <?php while($fila=mysqli_fetch_array($res)){ ?>
    <tr>
      <td bgcolor="#0DE447" align="center"> <?php echo $fila["Usuario"]; ?> </td>
	  <td bgcolor="#0DE447" align="center"> <?php echo $fila["UsuarioId"]; ?> </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
	<?php } ?>
</body>
</html>