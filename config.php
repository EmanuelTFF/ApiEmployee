<?php
// Database configuracao
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'employee_management';

// estabilizar conxecao
$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>