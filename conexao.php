<?php
$host = "localhost";
$user = "root"; 
$pass = "1234";
$db = "login_system";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
