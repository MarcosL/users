<html>
<head>
	<title>listado</title>
	<link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
</head>
<body>
<?php

$connect = mysql_connect("localhost","root","");

if (!$connect) {
echo( "<h1>La base de datos no está disponible</h1> " .
"<p>Por si acaso, comprueba que tienes bien los datos de la dirección, el nombre de usuario y la contraseña.</p>" );
exit();
}

$base = mysql_select_db("usuarios");
$result = mysql_query("select * from contacto",$connect);

if (!$result) {
echo ("<p> Me temo que te has colado en la query:" . mysql_error() . "</p>");
exit();
}
?>

<div class="listeado">
<div><span class="title">nombre</span><span class="title">apellido</span><span class="title">mail</span></div><?php 
while ($row=mysql_fetch_array($result)){
echo '<div><span>'.$row["FirstName"].'</span>';
echo '<span>'.$row["LastName"].'</span>';
echo '<span>'.$row["Mail"].'</span>';}
mysql_free_result($result)?>
</div>
</body>
</html>