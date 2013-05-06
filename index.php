
<html>

<head>
<title>Admin Usuario</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
</head>

<body>

	<div class="content">
		<div class="h1container">
			<h1>Administracion de Usuarios</h1>
		</div>
		
		<div class="box">
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
				
				<div class="inputContent">
					<label class="title" for="codigo">Codigo:</label>
					<input type="text" name="Code" id="codigo">
				</div>
				
				<input class="send" type="submit" value="Agregar">

				<a class="tableList" href="listar.php">Listar tabla</a>
				
			</form>
		
		</div>
		
		<div class="boxx">
		
			<form action="delete.php" method="post">
				<label class="title" for="nombre">Codigo a eliminar:</label>
				<input type="text" name="eliminar"  id="nombre">
				<input class="send" type="submit" value="eliminar">
			</form>
		
		</div>
		
		<div class="boxx">
		
			<form action="update.php" method="post">
				<label class="title" for="nombre">Codigo de la persona a modificar:</label>
				<input type="text" name="actualizar"  id="nombre">
				
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
				
				<input class="send" type="submit" value="actualizar">
			</form>
		
		</div>
		
		
	</div>

</body>
</html>


