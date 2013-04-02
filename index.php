<?/*php

include("usuarios.php");
mysql_query("INSERT INTO contacto (FirstName, LastName, Mail)
VALUES ('Marcos', 'Ledezma', 'm.ledezma@esencia.com.py')")
	or die ('No se pudo agregar el nuevo contacto');
	
echo "Nuevo contacto agregado";

*/?>
<html>

<head>
<link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
</head>

<body>

	<div class="content">
		<div class="h1container">
			<h1>Administracion de Usuarios</h1>
		</div>
		<a class="" href="listar.php">Listar tabla</a>
		<form action="addContact.php" method="post">
			
			<div class="inputContent">
				<label class="title" for="name">Nombre:</label>
				<input type="text" name="FirstName" id="name">
			</div>
			
			<div class="inputContent">
				<label class="title" for="lastname">Apellido:</label>
				<input type="text" name="LastName" id="lastname">
			</div>
			
			<div class="inputContent">
				<label class="title" for="mail">Mail:</label>
				<input type="text" name="Mail" id="mail">
			</div>
			
			<!--div class="inputContent">
				<label class="title" for="Code">Codigo:</label>
				<input type="text" name="Code" id="Code">
			</div-->
			
			<input class="send" type="submit" value="Agregar">


		</form>
	</div>

</body>
</html>