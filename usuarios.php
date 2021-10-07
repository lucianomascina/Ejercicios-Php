<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
		$link=mysqli_connect("localhost","root","");
		mysqli_select_db($link,"base");
		$sql="select * from Usuarios";
		$resultado=mysqli_query($link,$sql);
	?>	
    <table width="300" border="1" cellspacing="0" cellpadding="5">
      <tbody>
        <tr>
          <th scope="col">usuarioid</th>
          <th scope="col">usuario</th>
          <th scope="col">password</th>
          <th scope="col">activo</th>
        </tr>
        <?php if(mysqli_num_rows($resultado)){
			while($fila=mysqli_fetch_array($resultado))
			{ ?>
        <tr>
          <td> <?php echo $fila["UsuarioId"]; ?></td>
          <td> <?php echo $fila["Usuario"]; ?></td>
          <td> <?php echo $fila["Password"]; ?></td>
          <td> <?php echo $fila["Activo"]; ?></td>
        </tr>
        <?php } ?>
        <?php }else{ ?>
        <tr>
        <td colspan="4" align="center" bgcolor="#D2D86B">No Hay usuario!</td>
        </tr>
		<?php }?>
      </tbody>
</table>
</body>
</html>