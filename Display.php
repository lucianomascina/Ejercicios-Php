<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php 
	$archivo ="archivo.txt";
	if(file_exists($archivo)){
		$base= unserialize(file_get_contents($archivo));
		
	}else{
		$base=array();
	}
?>
<?php
	$columnas=5;	
	$filas=5;
?>
    <table border="1" align="center" cellpadding="5" cellspacing="0" width="190">
		 <?php
            for($f=1;$f<=5;$f++){?>
                <tr>
             <?php
                for($c=1;$c<=5;$c++){ 
                    if(in_array($f.$c,$base)){ ?> 
                        <td bgcolor="#DB0F12">&nbsp;</td>
                <?php } else { ?>
                        <td>&nbsp;</td>
              <?php }?>
                <?php }?>
               </tr>
        <?php } ?>
    </table>
</body>
</html>