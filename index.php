<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		h1{
			background:#efcefa;/*Color de fondo*/
			color:#000000;/*Color del texto*/
			border:solid 1px black;
			border-radius:5px;
			text-align:center;
			font-family:Arial;
			box-shadow:2px 2px 8px black;
		}
		.menu{
		background:#ffcad4;
		color:#000000;
		text-decoration:none;
		font-family:Arial;
		padding:5px;
		border-radius:10px;
		}
      .menu:hover{
		background:#ffcad4;
		color:#000000;
		transition:0.2s;
		border:solid;
		}
	</style>
</head>
<body>
   <h1>Menu principal</h1>
   <center><img src="foto.png"></center>
   <a class="menu" href="lista_estudiantes.php">Estudiantes</a>
   <a class="menu" href="lista_usuarios.php">Usuarios</a>
</body>
</html>