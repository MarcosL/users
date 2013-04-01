<?php

$connect = mysql_connect("localhost", "root","")
	or die ('Conexion al servidor ha fallado');
	
mysql_select_db("usuarios", $connect)
	or die ('Conexion a la base de datos ha fallado');
	
	
	
	
	
mysql_close($connect);

?>