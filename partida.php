<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<form method="post" action="batalla.php">
	<?php
        $columnas=5;	
        $filas=5;
    ?>
	<table border="1" align="center" cellpadding="5" cellspacing="0" width="190">
         <?php
            for($f=1;$f<=$filas;$f++){?>
                <tr>
             <?php
                for($c=1;$c<=$columnas;$c++){ ?>
                        <td bgcolor="blue">&nbsp;</td>
                <?php }?>
               </tr>
        <?php } ?>
   	</table>
        <?php
		$base=array();
		for($f=1;$f<=5;$f++)
		{
			$base[]=rand(1,5).rand(1,5);
		}
		file_put_contents("batalla.txt", serialize($base));
		?>
	<input type="submit" name="jugar" value="jugar">
</form>
</body>
</html>