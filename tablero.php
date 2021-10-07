<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	 
	$archivo ="tiros.txt";
	if(file_exists($archivo)){
		$base= unserialize(file_get_contents($archivo));
		
	}else{
		$base=array();
	}
	
	
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
                    <?php } else { 
                    		if($c==0){ ?>
                        		<td> <?php echo $f; ?> </td>
                            <?php }else{ 
                            	if(in_array($f."-".$c,$base)){?>
                            		<td bgcolor="RED">&nbsp;</td>
                                <?php }else{ ?>
                                	<td>&nbsp;</td>
                                <?php } ?>
                            <?php } ?>
                	<?php } ?>
				<?php } ?>
               </tr>
        <?php } ?>
   	</table>

<form  name="form" action="tirar.php" method="post">
	<p><label for="columna">columna</label> 	
		<select name="columna">
              <option value="1">A</option>
              <option value="2">B</option>
              <option value="3">C</option>
               <option value="4">D</option>
               <option value="5">E</option>
        </select>
     </p>   
	<p><label  for="fila">fila</label>
    	<select name="fila">
        	<option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
       </select></p>  
       <input type="submit" name="Tiro" id="submit" value="Tiro">
</form>
</body>
</html>