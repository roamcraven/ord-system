<?php
// Sample data for fruit shakes
$fruit_shakes = array(
    array("name" => "Avocado Shake", "price" => 5.99),
    array("name" => "Strawberry Shake", "price" => 6.99),
    array("name" => "Mango Shake", "price" => 5.49)
);
?>

<div class="category">
    <h2>Fruit Shakes</h2>
    <div class="product-list">
        <?php foreach ($fruit_shakes as $shake): ?>
            <div class="product">
                <h3><?php echo $shake['name']; ?></h3>
                <p>Price: ₱<?php echo $shake['price']; ?></p>
                <!-- Add to cart button -->
                <button class="add-to-cart" data-name="<?php echo $shake['name']; ?>" data-price="<?php echo $shake['price']; ?>">Add to Cart</button>
            </div>
        <?php endforeach; ?>
    </div>
</div>
