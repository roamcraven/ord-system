<?php
// Sample data for sweets
$sweets = array(
    array("name" => "Chocolate Cake", "price" => 8.99),
    array("name" => "Strawberry Cheesecake", "price" => 7.49),
    array("name" => "Caramel Pudding", "price" => 5.99)
);
?>

<div class="category">
    <h2>Sweets</h2>
    <div class="product-list">
        <?php foreach ($sweets as $sweet): ?>
            <div class="product">
                <h3><?php echo $sweet['name']; ?></h3>
                <p>Price: ₱<?php echo $sweet['price']; ?></p>
                <!-- Add to cart button -->
                <button class="add-to-cart" data-name="<?php echo $sweet['name']; ?>" data-price="<?php echo $sweet['price']; ?>">Add to Cart</button>
            </div>
        <?php endforeach; ?>
    </div>
</div>
