<html>
<head>
	<title>listado</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
</head>
<body>

<?php

$link = mysql_connect('localhost', 'root', '');
if(!$link) {
die("Error al intentar conectar: ".mysql_error());
}

$db_link = mysql_select_db('usuarios', $link);
if(!$db_link) {
die("Error al intentar seleccionar la base de datos". mysql_error());
}

$id_eliminar = $_POST['eliminar'];
$sqlEliminar = mysql_query("DELETE FROM contacto
WHERE Code = $id_eliminar", $link)
or die(mysql_error());
echo  "El registro a sido eliminado";
?>

<a class="return" href="index.php">Regresar</a>

</body>
</html>