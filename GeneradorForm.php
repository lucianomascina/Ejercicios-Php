<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
    <form method="post" action="generasimbolo.php" >
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
                        <td><input type="checkbox" name="<?php echo $f.$c ?>" value="1"></td>
                <?php }?>
               </tr>
        <?php } ?>
        </table>
        <input type="submit" name="grabar" value="grabar">
    </form>
</body>
</html>