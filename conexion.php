<?php
require('vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

/* Database config */
$db_host = 'localhost';
$db_user = $_ENV['DB_USER'];
$db_pass = $_ENV['DB_PASSWORD'];
$db_database = $_ENV['DB_DATABASE']; 

/* End config */

$conn = new mysqli($db_host, $db_user, $db_pass, $db_database);

// Check connection
if ($conn->connect_error) {

  echo "Lo sentimos, este sitio web está experimentando problemas.";
  echo "Error: Fallo al conectarse a MySQL debido a: \n";
  echo "Errno: " . $conn->connect_errno . "\n";
  echo "Error: " . $conn->connect_error . "\n";
  exit;
}