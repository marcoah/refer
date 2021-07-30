<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Marco Hernandez">

    <title>Tabla Refer</title>

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

    <main>
        <div class="container">
            <div class="row">
                <h1>Lista de Piezas con Stock > 0</h1>
            </div>

            <!-- -->
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
            ?>

            <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody>    
                        <?php
                        while ($row = $resultado->fetch_assoc()) {
                            echo "<tr><th scope='row'>" .$row["NPRO"]. "</th>";
                            echo "<td>" .$row["DPRO"]. "</td>";

                            if($row["STOC"]<10){
                                echo "<td class='table-danger'>" .$row["STOC"]. "</td>";
                            } else {
                                echo "<td>" .$row["STOC"]. "</td>";
                            };                
                            echo "<td>" .number_format($row["BPNC"],2). "</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col">
                    <?php
                    $numero = $resultado->num_rows;
                    echo "Resultados: " . $numero . " registros";

                    $resultado->free();
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </main>
    
    <footer class="pt-5 my-5 text-muted border-top">
        Creado por Marco Hernandez &middot; &copy; 2021
    </footer>

    <script src="node_modules\bootstrap\dist\js\bootstrap.bundle.min.js"></script>
</body>
</html>