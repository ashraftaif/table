<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "taif";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE bird_orders (
  order_id INT AUTO_INCREMENT PRIMARY KEY,
  scientific_name VARCHAR(255) UNIQUE,
  brief_description VARCHAR(255),
  order_image BLOB
) DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci";

if (mysqli_query($conn, $sql)) {
    echo "Table birds created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 