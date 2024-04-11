document.addEventListener("DOMContentLoaded", function() {
    // Add event listener to all "Add to Cart" buttons
    var addToCartButtons = document.querySelectorAll(".add-to-cart");
    addToCartButtons.forEach(function(button) {
        button.addEventListener("click", function(event) {
            // Prevent default link click behavior
            event.preventDefault();

            // Get product details
            var productName = button.dataset.name;
            var productPrice = parseFloat(button.dataset.price);

            // Send product details to cart.php using AJAX
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Cart updated successfully
                    console.log("Product added to cart");
                }
            };
            xhttp.open("POST", "cart.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("product_name=" + encodeURIComponent(productName) + "&product_price=" + encodeURIComponent(productPrice));
        });
    });

    // Event listener for "Proceed to Checkout" button
    var proceedToCheckoutButton = document.getElementById("proceed-to-checkout");
    proceedToCheckoutButton.addEventListener("click", function() {
        // Redirect to order details page
        window.location.href = "order.php";
    });
});

