<?php
include 'db.php'; 

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/api/items') {
    
    $sql = "SELECT * FROM items";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $items = [];
        
        while ($row = $result->fetch_assoc()) {
            $items[] = $row;
        }
        
        header('Content-Type: application/json');
        echo json_encode($items);
    } else {
        
        header('Content-Type: application/json');
        echo json_encode([]);
    }
} else {
    
    http_response_code(404);
    echo 'Invalid request';
}

$conn->close();
?>