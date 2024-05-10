<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


include '../db.php';  // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $originalprice = $_POST['originalprice'];
    $discount = $_POST['discount'];
    $category = $_POST['category'];

    // Update product in database
    $sql = "UPDATE products SET name = ?, author = ?, price = ?, originalprice = ?, discount = ?, category = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssisi", $name, $author, $price, $originalprice, $discount, $category, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Product updated successfully.";
    } else {
        echo "Error updating product or no change made.";
    }

    $stmt->close();
    $conn->close();
}

// Redirect to the products list or a confirmation page
header("Location: listing.php");  // Adjust the redirection URL as necessary
exit();
?>
