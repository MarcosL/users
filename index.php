<?php

include("usuarios.php");
mysql_query("INSERT INTO contacto (FirstName, LastName, Mail)
VALUES ('Marcos', 'Ledezma', 'm.ledezma@esencia.com.py')")
	or die ('No se pudo agregar el nuevo contacto');
	
echo "Nuevo contacto agregado";

?>