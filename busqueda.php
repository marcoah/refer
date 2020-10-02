<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Busqueda de piezas">
	<meta name="keywords" content="Busqueda de piezas">
	<meta name="author" content="MHConsultores">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Busqueda</title>
</head>

<body>
	<p>Busqueda pieza</p>
	<form id="form1" name="form1" method="post" action="">
		<label for="txtNpro">Numero de Pieza</label>
		<input name="txtNpro" type="text" id="txtNpro" maxlength="10">
		<input type="submit" name="buscar" id="buscar" value="Enviar">
	</form>
	
	<p>
	<?php
	if (!isset($_POST['txtNpro'])){ 
		echo "Debe especificar una cadena a buscar y luego pulsar el botón"; 
		echo "</html></body> \n"; 
		exit; 
	}
	$buscar = $_POST['txtNpro'];
	//$buscar = str_pad($buscar, 10, "0", STR_PAD_LEFT);
	
	$mysqli = new mysqli('127.0.0.1', 'root', '', 'refer');
	if ($mysqli->connect_errno) {
		echo "Lo sentimos, este sitio web está experimentando problemas.";
		echo "Error: Fallo al conectarse a MySQL debido a: \n";
		echo "Errno: " . $mysqli->connect_errno . "\n";
		echo "Error: " . $mysqli->connect_error . "\n";
		exit;
	}
	
	$sql="SELECT NPRO, DPRO, STOC, BPNC FROM REFER WHERE DPRO LIKE '%".$buscar."%' ORDER BY DPRO";
	
	if (!$resultado = $mysqli->query($sql)) {
		echo "Lo sentimos, este sitio web está experimentando problemas.";
		echo "Error: La ejecución de la consulta falló debido a: \n";
		echo "Query: " . $sql . "\n";
		echo "Errno: " . $mysqli->errno . "\n";
		echo "Error: " . $mysqli->error . "\n";
		exit;
	}
	
	if ($resultado->num_rows === 0) {
		echo "Lo sentimos. No se pudo encontrar una coincidencia para el ID. Inténtelo de nuevo.";
		exit;
	}
	
	echo "<ul>\n";
	echo "<hr>";
	echo "<table border='1' cellspacing=1 cellpadding=2 style='font-size: 8pt'><tr>";
	echo "<td><b>Código</b></font></td>
		<td><b>Descripción</b></font></td>
		<td><b>Cantidad</b></font></td>
		<td><b>Precio</b></font></td>";
	echo "</tr>";
	
	while ($row = $resultado->fetch_assoc()) {
		echo "<tr> \n";
		echo "<td>".$row["NPRO"]."</td> \n";
		echo "<td>".$row["DPRO"]."</td> \n";
		echo "<td>".$row["STOC"]."</td> \n";
		echo "<td>".$row["BPNC"]."</td> \n";
		echo "</tr> \n";
	}
	
	echo "</table> \n";
	$numero = $resultado->num_rows;
	echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Número: " . $numero . "</b></font></td></tr>";
	echo "</ul>\n";
	
	$resultado->free();
	$mysqli->close();
	
	?>
	</p>
	<p>&nbsp;</p>
</body>
</html>