<?php
	include_once "Persona.php";
	
	$lista = [
		new Persona("Fulano","1969-01-29","5546546554"),
		new Persona("Mengano","1968-02-28","5546546551"),
		new Persona("Perengano","1967-03-27","5546546552"),
		new Persona("Sutano","1966-04-26","5546546553"),
		new Persona("Goku","1989-05-25","5546546555"),
		new Persona("Vegeta","1990-06-24","5546546556"),
		new Persona("Gohan","1991-07-23","5546546557"),
		new Persona("Picollo","1989-08-22","5546546558"),
		new Persona("Krillin","1990-09-21","5546546559"),
		new Persona("Freezer","1900-11-20","5546546560")

	];
		$fechaActual = new DateTime('now'); 
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset= "utf-8">
		<title>Lista de personas</title>
		<style>
			td{
			background-color:cyan;
			}
		</style>
	</head>
	<body>
		<h1>Lista de personas</h1>
		<table border>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Fecha Nacimiento</th>
					<th>Edad Actual</th>
					<th>Telefono</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($lista as $p): 
				$fecha = $p->getFecNac();
				$Nac= date_create($fecha); 
				$dif = date_diff($fechaActual, $Nac);

				?>
					<tr>
						<td><?php echo $p->getNombre()?></td>
						<td><?php echo $p->getFecNac()?></td> 
						<td><?php echo $dif->y?></td> 
						<td><?php echo $p->getTel()?></td>
					</tr>

				<?php endforeach?>
			</tbody>
		</table>
	</body>
</html>
