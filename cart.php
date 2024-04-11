<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Atecles Grill</title>
    <link rel="stylesheet" href="cart.css"> 
</head> 
<body>
    <div class="cart-container">
        <h2 class="cart-header">Cart</h2>
        <ul class="cart-items">
            <?php
            session_start();
            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $item) {
                    echo "<li>" . $item['name'] . " - ₱" . $item['price'] . "</li>";
                }
            } else {
                echo "<p>No items in the cart</p>";
            }
            ?>
        </ul>
        <div class='total-container'>
            <p class='cart-total'>
                Total:
                <?php
                // Calculate and display total amount
                $totalAmount = 0;
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $item) {
                        $totalAmount += $item['price'];
                    }
                    echo "₱" . number_format($totalAmount, 2);
                } else {
                    echo "₱0.00";
                }
                ?>
            </p>
        </div>
        <div class='cart-buttons'>
            <button onclick='addMoreItems()'>Add More Items</button>
            <button onclick='cancelOrder()'>Cancel Order</button>
            <button onclick='confirmOrder()'>Confirm Order</button>
        </div>
    </div>

    <script>
        function addMoreItems() {
            window.location.href = "add.php";
        }

        function cancelOrder() {
            // Clear session data
            window.location.href = "add.php";
        }

        function confirmOrder() {
            window.location.href = "thank.php";
        }
    </script>
</body>
</html>
