<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
		$columnas=5;	
		$filas=5;
	?>
	<table border="1" width="190"  cellpadding="5" cellspacing="0" align="center">
		<?php
		for($f=1;$f<=$filas;$f++){
		?>	
        <tr>
        	<?php
			for($c=1;$c<=$columnas;$c++){
			?>
            <?php if($f==3 && $c==3){?>
            <td bgcolor="red">&nbsp;<?php echo $f."-".$c ?></td>
            <?php }else{ ?>
        	<td>&nbsp;<?php echo $f."-".$c ?></td>
            <?php } ?>
			<?php } ?>
        </tr>
        <?php } ?>
	</table>
</body>
</html>