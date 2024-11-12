<?php
$servername = "localhost";  // Adjust as needed
$username = "root";         // MAMP default username
$password = "root";         // MAMP default password
$dbname = "grocerease"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>