<?php

include('conexion.php');

//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $buscar = $_POST['keywords'];

    $sql = "SELECT NPRO, DPRO, STOC, BPNC FROM REFER WHERE DPRO LIKE '%".$buscar."%' ORDER BY DPRO";

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
    $conn->close();

}