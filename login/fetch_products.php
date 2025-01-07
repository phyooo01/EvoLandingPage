<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products
$sql = "SELECT id, name, img, price FROM items";
$result = $conn->query($sql);

$items = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $items[] = $row;
    }
} 

$conn->close();

// Return products as JSON
header('Content-Type: application/json');
echo json_encode($products);
?>
