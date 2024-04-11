<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atecles Grill</title>
    <link rel="stylesheet" href="style.css"> <!-- Correct the CSS file name if necessary -->
</head>
<body>
<?php
$dishes = array(
    array("name" => "Shrimp Sinigang", "price" => 218, "image" => "./images/img/dishes/Shrimp_sinigang.jpg"),
    array("name" => "Chopsuey", "price" => 218, "image" => "./images/img/dishes/chopsuey.jpg"),
    array("name" => "Tinolang manok", "price" => 185, "image" => "./images/img/dishes/tinolang-manok.jpg"),
    array("name" => "Sotanghon", "price" => 210, "image" => "./images/img/dishes/sotanghon.jpg"),
    array("name" => "Pancit guisado", "price" => 175, "image" => "./images/img/dishes/pancit_guisado.jpg"),
    array("name" => "Ginataang gulay", "price" => 135, "image" => "./images/img/dishes/ginataang-gulay.jpg"),
    array("name" => "Special lomi", "price" => 185, "image" => "./images/img/dishes/special-lomi.jpg"),
    array("name" => "Sizzling bulalo", "price" => 210, "image" => "./images/img/dishes/sizzling-bulalo.jpg"),
    array("name" => "Crispy pata", "price" => 580, "image" => "./images/img/dishes/crispy-pata.jpg"),
    array("name" => "Grilled tuna panga", "price" => 240, "image" => "./images/img/dishes/tuna-panga.jpg"),
);
?>

<div class="container">
    <h1>Atecles Grill</h1>
    <section class="customer">
        <h2>Choose your preferred food</h2>
        <p>Just click it and add it to your cart!</p>
    </section>
    <div class="category-navigation">
        <button id="dishes-btn">Dishes</button>
        <button id="fruit-shakes-btn">Fruit Shakes</button>
        <button id="sweets-btn">Sweets</button>
    </div>
    
    <div class="product-list">
        <?php foreach ($dishes as $dish): ?>
            <div class="product">
                <img src="<?php echo $dish['image']; ?>" alt="<?php echo $dish['name']; ?>">
                <h2 class="product-name"><?php echo $dish['name']; ?></h2>
                <p class="product-price">₱<?php echo $dish['price']; ?></p>
                <form class="add-to-cart-form">
                    <input type="hidden" name="product-name" value="<?php echo $dish['name']; ?>">
                    <input type="hidden" name="product-price" value="<?php echo $dish['price']; ?>">
                    <button type="button" onclick="addToCart('<?php echo $dish['name']; ?>', <?php echo $dish['price']; ?>)">Add to Cart</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="cart-container">
    <h2 class="cart-header">Cart</h2>
    <ul id="cart-items" class="cart-items">
        <!-- Cart items will be loaded here -->
    </ul>
    <div class="total-container">
        <p class="cart-total">Total: ₱0.00</p>
    </div>
    <div class="cart-buttons">
        <button onclick="cancelOrder()">Cancel Order</button>
        <button onclick="confirmOrder()">Confirm Order</button>
    </div>
</div>

<script>
    function cancelOrder() {
        sessionStorage.removeItem('cart');
        window.location.href = "add.php";
    }

    function confirmOrder() {
        window.location.href = "thank.php";
    }

    function addToCart(name, price) {
        if (!sessionStorage.getItem('cart')) {
            sessionStorage.setItem('cart', '[]');
        }
        var cart = JSON.parse(sessionStorage.getItem('cart'));
        cart.push({ name: name, price: price });
        sessionStorage.setItem('cart', JSON.stringify(cart));
        updateCartDisplay();
    }

    function updateCartDisplay() {
        var cartItems = document.getElementById("cart-items");
        cartItems.innerHTML = "";
        var cart = JSON.parse(sessionStorage.getItem('cart'));
        if (cart) {
            cart.forEach(function(item) {
                var newItem = document.createElement("li");
                newItem.textContent = item.name + " - ₱" + item.price.toFixed(2);
                cartItems.appendChild(newItem);
            });
        }
        var totalContainer = document.querySelector(".cart-total");
        if (totalContainer) {
            var totalAmount = cart.reduce(function(acc, curr) {
                return acc + curr.price;
            }, 0);
            totalContainer.textContent = "Total: ₱" + totalAmount.toFixed(2);
        }
    }

    window.onload = function() {
        updateCartDisplay();
    };
</script>

</body>
</html>
