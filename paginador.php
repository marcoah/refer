<?php
/**
 * Created by PhpStorm.
 * User: Marco Antonio
 * Date: 7/1/2017
 * Time: 11:14 PM
 */

require('conexion.php');
$RegistrosAMostrar=10;

//estos valores los recibo por GET
if(isset($_GET['pag'])){
    $RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
    $PagAct=$_GET['pag'];
    //caso contrario los iniciamos
}else{
    $RegistrosAEmpezar=0;
    $PagAct=1;
}

$query = "SELECT NPRO, DPRO, BPNC, DATE_FORMAT(FUSA, '%d-%m-%Y') as fechasalida
                FROM refer1
                ORDER BY fechasalida desc
                LIMIT $RegistrosAEmpezar, $RegistrosAMostrar";

$Resultado = $conn->query($query);

echo "<table border='1px'>";

if ($Resultado->num_rows > 0) {

    while($row = $Resultado->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['NPRO']."</td>";
        /*if ($PagAct == 1)
        echo "<td>".$MostrarFila['post_title']."</td>";
            else*/
        echo "<td>".utf8_encode($row['DPRO'])."</td>";
        echo "<td>".$row['BPNC']."</td>";
        echo "<td>".$row['fechasalida']."</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

echo "</table>";


$sql = "SELECT * FROM refer1";
$result = $conn->query($sql);
$NroRegistros=$result->num_rows;
$conn->close();

$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$NroRegistros/$RegistrosAMostrar;

//verificamos residuo para ver si llevará decimales
$Res=$NroRegistros%$RegistrosAMostrar;
// si hay residuo usamos funcion floor para que me
// devuelva la parte entera, SIN REDONDEAR, y le sumamos
// una unidad para obtener la ultima pagina
if($Res>0) $PagUlt=floor($PagUlt)+1;

//desplazamiento
echo "<a onclick=\"Pagina('1')\">Primero</a> ";
if($PagAct>1) echo "<a onclick=\"Pagina('$PagAnt')\">Anterior</a> ";
echo "<strong>Pagina ".$PagAct."/".$PagUlt."</strong>";
if($PagAct<$PagUlt)  echo " <a onclick=\"Pagina('$PagSig')\">Siguiente</a> ";
echo "<a onclick=\"Pagina('$PagUlt')\">Ultimo</a>";
?>
