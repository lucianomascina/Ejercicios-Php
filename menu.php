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
		$sql="select mensajes.*,date_format(fecha,'%d/%m/%y %H:%i')as fechah, Usuarios.Usuario from mensajes inner join Usuarios on mensajes.de=Usuarios.UsuarioId where para=".$_SESSION["usuarioid"];
		$res=mysqli_query($link,$sql);
		
	?>
    <h3>Bandeja de entrada </h3>
    <hr>
    <table width="100%" border="1" cellspacing="0" cellpadding="7">
      <tbody>
        <tr>
          <th bgcolor="#0DE447" scope="col">&nbsp;</th>
          <th bgcolor="#0DE447" scope="col">Asunto:</th>
          <th bgcolor="#0DE447" scope="col">De:</th>
          <th bgcolor="#0DE447" scope="col">Fecha:</th>
          <th bgcolor="#0DE447" scope="col">&nbsp;</th>
          <th bgcolor="#0DE447" scope="col">&nbsp;</th>
        </tr>
        <?php 
		if(@mysqli_num_rows($res)){
		while($fila=mysqli_fetch_array($res)){ ?>
        <tr>
          <td bgcolor="#0DE447">&nbsp;</td>
          <td bgcolor="#0DE447" align="center"> <?php echo $fila["asunto"]; ?> </td>
	      <td bgcolor="#0DE447" align="center"> <?php echo $fila["Usuario"]; ?> </td>
	      <td bgcolor="#0DE447" align="center" > <?php echo $fila["fechah"]; ?> </td>
          <td align="center" bgcolor="#0DE447" > <a href="mensaje.php?id=<?php echo $fila["idmensaje"]; ?>">Ver</a></td>
          <td align="center" bgcolor="#0DE447"> <a href="borrarmensaje.php?idborrar=<?php echo $fila["idmensaje"]; ?>">x</a></td>
        </tr>
        
        <?php }
		}else{ ?> 
        <tr>
          <td colspan="6" align="center" bgcolor="#0DE447">no hay mensajes</td>
        </tr>
		<?php } ?>
      </tbody>
    </table>
    
</body>
</html>