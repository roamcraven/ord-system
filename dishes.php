<?php
// Define the dishes array
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

<div id="category-container">
    <?php
    // Display dishes
    foreach ($dishes as $dish) {
        echo "<div class='product'>";
        echo "<img src='" . $dish['image'] . "' alt='" . $dish['name'] . "'>";
        echo "<h3>" . $dish['name'] . "</h3>";
        echo "<p>Price: ₱" . $dish['price'] . "</p>";
        echo "<button class='add-to-cart' data-name='" . $dish['name'] . "' data-price='" . $dish['price'] . "'>Add to Cart</button>";
        echo "</div>";
    }
    ?>
</div>
