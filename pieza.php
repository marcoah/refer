<?php

    if (!isset($_GET['npro'])){
        echo "Debe especificar una cadena a buscar y luego pulsar el botón";
        exit;
    }

    $buscar = $_GET['npro'];
    //$buscar = str_pad($buscar, 10, "0", STR_PAD_LEFT);

    include('conexion.php');	
    
    if ($conn->connect_errno) {
        echo "Lo sentimos, este sitio web está experimentando problemas.";
        echo "Error: Fallo al conectarse a MySQL debido a: \n";
        echo "Errno: " . $conn->connect_errno . "\n";
        echo "Error: " . $conn->connect_error . "\n";
        exit;
    }
    
    $sql="SELECT NPRO, DPRO, STOC, BPNC FROM REFER WHERE NPRO='".$buscar."' ORDER BY DPRO";
    
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

    while ($row = $resultado->fetch_assoc()) {
        echo "<label for='npro'>Código: </label><input type='text' id='npro' name='npro' value='".$row["NPRO"]."' disabled></input><br> \n";
        echo "<label for='dpro'>Descripción: </label><input type='text' id='dpro' name='dpro' value='".$row["DPRO"]."'></input><br> \n";
        echo "<label for='stoc'>Cantidad: </label><input type='text' id='stoc' name='stoc' value='".$row["STOC"]."'></input><br> \n";
        echo "<label for='bpnc'>Precio: </label><input type='text' id='bpnc' name='bpnc' value='".$row["BPNC"]."'></input><br> \n";
    }

    $resultado->free();
    $conn->close();

?>