<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atecles Grill</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Atecles Grill</h1>
    <section class="customer">
        <h1>Choose your preferred food</h1>
        <p>Just click it and add it to your cart!</p>
    </section>
    <div class="category-navigation">
        <button id="dishes-btn">Dishes</button>
        <button id="fruit-shakes-btn">Fruit Shakes</button>
        <button id="sweets-btn">Sweets</button>
    </div>
    
    <div id="category-container">
    </div>
</div>

<div class="cart-container">
    <h2>Cart</h2>
    <ul id="cart-items">
    </ul>
</div>

<button id="place-order-btn">Place Order</button>

<script>
    function loadCategory(category) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("category-container").innerHTML = this.responseText;
                addAddToCartListeners();
            }
        };
        xhttp.open("GET", category + ".php", true);
        xhttp.send();
    }

    document.getElementById("dishes-btn").addEventListener("click", function() {
        loadCategory("dishes");
    });

    document.getElementById("fruit-shakes-btn").addEventListener("click", function() {
        loadCategory("fruit_shakes");
    });

    document.getElementById("sweets-btn").addEventListener("click", function() {
        loadCategory("sweets");
    });

    document.getElementById("place-order-btn").addEventListener("click", function() {
        window.location.href = "cart.php";
    });

    function addAddToCartListeners() {
        var addToCartForms = document.querySelectorAll(".add-to-cart-form");
        addToCartForms.forEach(function(form) {
            form.addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent form submission

                var productName = form.querySelector(".product-name").textContent;
                var productPrice = parseFloat(form.querySelector(".product-price").textContent);

                addToCart(productName, productPrice);
            });
        });
    }

    function addToCart(name, price) {
        var cartItems = document.getElementById("cart-items");
        var newItem = document.createElement("li");
        newItem.textContent = name + " - ₱" + price.toFixed(2);
        cartItems.insertBefore(newItem, cartItems.firstChild); // Insert at the beginning
    }
</script>

</body>
</html>
