<?php
session_start();
$category = $_GET['category'];

// Your logic to generate category content based on $category
// Example:
if ($category === 'dishes') {
    include 'dishes.php'; // Include PHP file with dishes data
} elseif ($category === 'fruit_shakes') {
    include 'fruit_shakes.php'; // Include PHP file with fruit shakes data
} elseif ($category === 'sweets') {
    include 'sweets.php'; // Include PHP file with sweets data
}
?>
