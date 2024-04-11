<?php

$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'order_system'; 


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dishes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        echo "<img src='" . $row['image'] . "' alt='" . $row['name'] . "'>";
        echo "<h3>" . $row['name'] . "</h3>";
        echo "<p>Price: ₱" . $row['price'] . "</p>";
        echo "<button class='add-to-cart' data-name='" . $row['name'] . "' data-price='" . $row['price'] . "'>Add to Cart</button>";
        echo "</div>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
