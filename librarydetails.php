<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "BookLibrary";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT BookTitle, Author, Reading  FROM BookLibrary";
$result = $conn->query($sql);
$conn->close();
?>
