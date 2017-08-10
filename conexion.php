<?php
/**
 * Created by PhpStorm.
 * User: Marco Antonio
 * Date: 7/1/2017
 * Time: 11:13 PM
 *Configuracion de la conexion a base de datos
*/
$bd_host = "localhost";
$bd_usuario = "root";
$bd_password = "";
$bd_base = "refer";

$conn = new mysqli($bd_host, $bd_usuario, $bd_password, $bd_base);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>