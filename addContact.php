<html>

<head>
<meta http-equiv="Refresh" content="2;url=index.php">
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
</head>

<body>

<?php

include("usuarios.php");

mysql_query("INSERT INTO contacto (FirstName, LastName, Mail, Code)
VALUES ('$_POST[FirstName]', '$_POST[LastName]', '$_POST[Mail]', '$_POST[Code]')")
	or die (mysql_error());

echo "Nuevo contacto agregado";
?>

</body>

</html>