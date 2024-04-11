<?php
session_start();

// Check if the session variable exists and contains order details
if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
    // Display the order details
    $_SESSION["order_details"] = "<ul>";
    foreach ($_SESSION["cart"] as $item) {
        $_SESSION["order_details"] .= "<li>{$item['name']} - ₱{$item['price']}</li>";
    }
    $_SESSION["order_details"] .= "</ul>";
} else {
    $_SESSION["order_details"] = "<p>No items in the cart.</p>";
}

// Redirect to the order details page
header("Location: order.php");
exit;
?>
