<?php
	include "protect.php";
	include "conexion.php";
	
	$idmensaje=$_GET["id"];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style type="text/css">
</style>
</head>

<body>
	<p>
	  <?php
		include "barra.php";
		
		$sql="select mensajes.*,Usuarios.Usuario from mensajes inner join Usuarios on mensajes.de=Usuarios.UsuarioId  where idmensaje=".$idmensaje;
		$res=mysqli_query($link,$sql);
		if(@mysqli_num_rows($res)){

	?>
    <h3 align="center" style="color:#EC1F23">&nbsp;</h3>
    <h3 align="center" style="color:#EC1F23">Mensaje</h3> 
    <hr>
        <p>
          <?php while($fila=mysqli_fetch_array($res)){ ?>
</p>
        <p style="text-align: center">
          <label for="textfield" >De:</label>
          
          <input type="text" name="textfield" id="textfield" value="<?php echo $fila["Usuario"]; ?>">
        </p>
        <p style="text-align: center">
          <label for="textfield2" style="text-align: center">Asunto:</label>
          <input type="text" name="textfield2" id="textfield2"   value="<?php echo $fila["asunto"]; ?>">
        </p>

        <p style="text-align: center">
          <label for="textfield3">Fecha:</label>
          <input type="text" name="textfield3" id="textfield3" value="<?php echo $fila["fecha"]; ?>">
        </p>
        <p style="text-align: center"> 
          <span style="text-align: center"></span>
          <textarea name="textarea" id="textarea" > <?php echo $fila["texto"]; ?></textarea>
       </p>
          <?php } ?>
          <?php } ?>
        </p>
</body>
</html>