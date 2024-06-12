<?php
$host = 'localhost';
$user = 'root';
$pass = '';


$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected Successfully"
?>
