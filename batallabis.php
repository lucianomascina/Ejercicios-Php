<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php 
	$archivo ="partida.txt";
	if(file_exists($archivo)){
		$base= unserialize(file_get_contents($archivo));
		
	}else{
		$base=array();
	}
?>
<?php
	$letras=array(" ","A","B","C","D","E");
?>
    <table border="1" align="center" cellpadding="5" cellspacing="0" width="190">
         <?php
            for($f=0;$f<6;$f++){?>
                <tr>
             <?php
                for($c=0;$c<6;$c++){ 
                        if($f==0){ ?>
                        	<th align="center"> <?php echo $letras[$c] ?> </th> 
                            <?php if(in_array($f.$c,$base)){ ?> 
                        			<td bgcolor="blue">&nbsp;</td>
                                    <?php } ?>
                        <?php } else { ?> <td> <?php echo ($c==0)?$f:" " ?> </td>
                	<?php } ?>
				<?php } ?>
               </tr>
        <?php } ?>
   	</table>
</body>
</html>