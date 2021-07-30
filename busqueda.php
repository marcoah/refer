<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Marco Hernandez">

	<title>Busqueda</title>

	<!-- Bootstrap core CSS -->    
	<link href="node_modules\bootstrap\dist\css\bootstrap.min.css" rel="stylesheet">
</head>

<body>

	<main>
		<div class="container">
			<div class="row">
				<h1>Busqueda pieza</h1>
				<form id="form1" name="form1" method="post" action="">
					<label for="txtNpro">Numero de Pieza</label>
					<input name="txtNpro" type="text" id="txtNpro" maxlength="10">
					<input type="submit" name="buscar" id="buscar" value="Enviar">
				</form>
			</div>
		</div>
	</main>

	
	<p>
	<?php
	if (!isset($_POST['txtNpro'])){ 
		echo "Debe especificar una cadena a buscar y luego pulsar el botón"; 
		echo "</html></body> \n"; 
		exit; 
	}
	$buscar = $_POST['txtNpro'];
	//$buscar = str_pad($buscar, 10, "0", STR_PAD_LEFT);

	include('conexion.php');	
	
	if ($conn->connect_errno) {
		echo "Lo sentimos, este sitio web está experimentando problemas.";
		echo "Error: Fallo al conectarse a MySQL debido a: \n";
		echo "Errno: " . $conn->connect_errno . "\n";
		echo "Error: " . $conn->connect_error . "\n";
		exit;
	}
	
	$sql="SELECT NPRO, DPRO, STOC, BPNC FROM REFER WHERE DPRO LIKE '%".$buscar."%' ORDER BY DPRO";
	
	if (!$resultado = $conn->query($sql)) {
		echo "Lo sentimos, este sitio web está experimentando problemas.";
		echo "Error: La ejecución de la consulta falló debido a: \n";
		echo "Query: " . $sql . "\n";
		echo "Errno: " . $conn->errno . "\n";
		echo "Error: " . $conn->error . "\n";
		exit;
	}
	
	if ($resultado->num_rows === 0) {
		echo "Lo sentimos. No se pudo encontrar una coincidencia para el ID. Inténtelo de nuevo.";
		exit;
	}
	?>
	
	<table border='1' cellspacing=1 cellpadding=2 style='font-size: 8pt'><tr>";
	<td><b>Código</b></font></td>
		<td><b>Descripción</b></font></td>
		<td><b>Cantidad</b></font></td>
		<td><b>Precio</b></font></td>
	</tr>

	<?php
	
	while ($row = $resultado->fetch_assoc()) {
		echo "<tr> \n";
		echo "<td>".$row["NPRO"]."</td> \n";
		echo "<td>".$row["DPRO"]."</td> \n";
		echo "<td>".$row["STOC"]."</td> \n";
		echo "<td>".$row["BPNC"]."</td> \n";
		echo "</tr> \n";
	}
	?>
	
	</table>

	<?php
	$numero = $resultado->num_rows;
	echo "<p>Número: " . $numero . "</p>";
	
	$resultado->free();
	$conn->close();
	
	?>

</body>
</html>