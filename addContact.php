<?php

include("usuarios.php");

mysql_query("INSERT INTO contacto (FirstName, LastName, Mail)
VALUES ('$_POST[FirstName]', '$_POST[LastName]', '$_POST[Mail]')")
	or die (mysql_error());

echo "Nuevo contacto agregado";
?>