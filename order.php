<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Order Details</h1>
    <?php
    session_start();
    // Check if the session variable exists and contains order details
    if (isset($_SESSION["order_details"])) {
        // Display the order details
        echo $_SESSION["order_details"];
    } else {
        echo "<p>No order details found.</p>";
    }
    ?>
</div>

</body>
</html>
