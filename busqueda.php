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

    <!-- Menu-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">REFER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-bs-toggle="dropdown" aria-expanded="false">Busquedas</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown05">
                        <li><a class="dropdown-item" href="busqueda.php">Busqueda por nombre de pieza</a></li>
                        <li><a class="dropdown-item" href="tablarefer.php">Lista de Piezas con Stock > 0</a></li>
                        <li><a class="dropdown-item" href="datatables.html">Ver datatables</a></li>
                    </ul>
                </li>
            </ul>
            <form action="buscar.php" method="POST">
                <input class="form-control" type="text" name="search" placeholder="Escriba y presione enter" aria-label="Search">
            </form>
            </div>
        </div>
    </nav>

	<div class="col-lg-8 mx-auto p-3 py-md-5">

	<header class="d-flex align-items-center pb-3 mb-5 border-bottom">
        <h1>Busqueda pieza</h1>
    </header>

	<main>
        <div class="mb-5">
			<form id="form1" name="form1" method="post" action="">
				<label for="txtNpro">Numero de Pieza</label>
				<input name="txtNpro" type="text" id="txtNpro" maxlength="10">
				<input type="submit" name="buscar" id="buscar" value="Enviar">
			</form>
        </div>

        <hr class="col-3 col-md-2 mb-5">

        <div class="row g-5">
            <div class="col-md-12">
                <h2>Resultados</h2>
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

				<table class="table">
					<thead>
						<tr>
							<td><b>Código</b></font></td>
							<td><b>Descripción</b></font></td>
							<td><b>Cantidad</b></font></td>
							<td><b>Precio</b></font></td>
						</tr>
					</thead>

					<?php
					while ($row = $resultado->fetch_assoc()) {
						echo "<tr> \n";
						echo "<td><a href=pieza.php?npro=".$row["NPRO"].">".$row["NPRO"]."</a></td> \n";
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
            </div>
        </div>

	</main>

	<footer class="pt-5 my-5 text-muted border-top">
        Creado por Marco Hernandez &middot; &copy; 2021
    </footer>

	<script src="node_modules\bootstrap\dist\js\bootstrap.bundle.min.js"></script>

</body>
</html>