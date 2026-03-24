<?php
// Include configuration
require_once 'config.php';

// Create connection using constants from config.php
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Read SQL file
$sql = file_get_contents('create_products_table.sql');

// Execute SQL
if ($conn->multi_query($sql)) {
    echo "Products table created successfully!";
} else {
    echo "Error creating products table: " . $conn->error;
}

$conn->close();
?> 