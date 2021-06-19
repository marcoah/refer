<?php
global $conn;

$bd_host = "localhost";
$bd_usuario = "root";
$bd_password = "master";
$bd_base = "refer";

$conn = new mysqli($bd_host, $bd_usuario, $bd_password, $bd_base);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}