<?php
require_once('estudiantes.php');
$Estudiantes=new Estudiantes();//INSTANCIAR
$consulta=$Estudiantes->listar_estudiantes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de estudiantes</title>
	<style>
		th{
			padding:5px;
			background:#b5838d;
			color:#000000;
		}
		th{
			padding:5px;
			border:solid 1px black;
		}
		table{
			width:80%;
			border-collapse:collapse;
		}
		a{
			background:#ffcad4;
		color:#000000;
		text-decoration:none;
		font-family:Arial;
		padding:5px;
		border-radius:10px;
		}
	</style>

	<style>
		h1{
		background:#b298dc;/*Color de fondo*/
		color:#000000;/*Color del texto*/
		border:solid 1px black;
		border-radius:5px;
		text-align:center;
	    font-family:Arial;
		box-shadow:2px 2px 8px black;
		}
        img{
        	width:50px;
        }
		}
	</style>
</head>
<body>
	<H1>lista estudiantes</H1>
	<table border="1" align="center"> 
		 <tr> 
			<th>nombres</th>
			<th>apellidos</th>
			<th>cedula</th>
			<th>edad</th>
			<th>cuidad</th>
			<th>acciones</th>

		</tr>
  	<?php
  	$x=0;
  	foreach($consulta as $c){
  		$x++;
  	echo "<tr>
  			<td>{$c['est_nombres']}</td>
  			<td>{$c['est_apellidos']}</td>
  			<td>{$c['est_cedula']}</td>
  			<td>{$c['est_edad']}</td>
  			<td>{$c['est_ciudad']}</td>
  			<td> 
  			<a href='' >
  			<img src='libro.png' />
  			</a>
  			<a href='' >
  			<img src='lapiz.png' />
  			</a>
  		    </td>
  		</tr>";	
  }
   ?>	
	</table>
</body>
</html>