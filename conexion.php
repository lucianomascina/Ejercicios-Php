<?php
	$link=@mysqli_connect("localhost","root","") or die("error db");
	@mysqli_select_db($link,"base") or die ("error db2");


?>