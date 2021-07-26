<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
<title>Ver tabla REFER</title>
</head>
<body>
<h1>Lista de Piezas con Stock > 0</h1>
<hr>
<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
<td><b>Código</b></font></td>
<td><b>Descripción</b></font></td>
<td><b>Cantidad</b></font></td>
<td><b>Precio</b></font></td>
</tr>

<?php
include('conexion.php');

if ($conn->connect_errno) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $conn->connect_errno . "\n";
    echo "Error: " . $conn->connect_error . "\n";
    exit;
}

$sql = "SELECT refer.NPRO, refer.DPRO, refer.STOC, refer.BPNC FROM refer WHERE refer.STOC > 0 ";
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

echo "<ul>\n";
while ($row = $resultado->fetch_assoc()) {

    echo "<tr><td width=\"25%\"><font face=\"verdana\">" .$row["NPRO"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" .$row["DPRO"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" .$row["STOC"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" .$row["BPNC"]. "</font></td></tr>";
}
$numero = $resultado->num_rows;
echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Número: " . $numero . "</b></font></td></tr>";
echo "</ul>\n";

$resultado->free();
$conn->close();
?>

</table>

</body>
</html>