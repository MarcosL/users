<html>
<head>
</head>
<body>

<?php 

$id = $_POST['actualizar'];
$nombre = $_POST['FirstName'];
$apellido = $_POST['LastName'];
$mail = $_POST['Mail'];

if (isset($id)){
   // process form
   $link = mysql_connect('localhost', 'root', '');
   if(!$link) {
	die("Error al intentar conectar: ".mysql_error());
	}
   mysql_select_db('usuarios', $link); 
   $sql = "UPDATE contacto SET FirstName='$nombre', LastName='$apellido',".
      "Mail='$mail' WHERE id=$id";
   $result = mysql_query($sql);
   echo "Archivo actualizado\n";
}else{
   echo "Debe especificar un 'id'.\n";
} 
?>
	<a class="" href="index.php">regresar</a>

</body>
</html>