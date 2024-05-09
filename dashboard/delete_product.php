<?php
// Database connection
include '../db.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get product ID to delete
    $id = $_POST['id'];

    // Prepare a delete statement
    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Product deleted successfully.";
    } else {
        echo "Error deleting product.";
    }
    $stmt->close();
    $conn->close();
}

// Redirect back to the product list page
header("Location: listing.php");  
exit();
?>
