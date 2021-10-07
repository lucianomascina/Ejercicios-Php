<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php 
	$archivo ="batalla.txt";
	if(file_exists($archivo)){
		$base= unserialize(file_get_contents($archivo));
		
	}else{
		$base=array();
	}
?>
<form method="post" action="batalla.php">
	<p>
	  <?php
		$f=$_POST["select2"];
		$c=$_POST["select"];
		if(in_array($f.$c,$base))
		{
			echo "HUNDIDO";	
		}
		else
		{
			echo "AGUA";
		}
	?>
  </p>
	<p>
	  <input type="submit" name="Volver" value="Volver">
  </p>
	<p>
  <table border="1" align="left" cellpadding="5" cellspacing="0" width="190">
		 <?php
            for($f=1;$f<=5;$f++){?>
                <tr>
             <?php
                for($c=1;$c<=5;$c++){ 
                    if(in_array($f.$c,$base)){ ?> 
                        <td bgcolor="red">&nbsp;</td>
                <?php } else { ?>
                        <td bgcolor="blue">&nbsp;</td>
              <?php }?>
                <?php }?>
               </tr>
        <?php } ?>
  </table>
    </p>
</form>
</body>
</html>