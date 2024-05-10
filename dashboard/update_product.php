<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
        }
        form {
            background: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        label {
            margin-top: 10px;
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ddd;
            box-sizing: border-box; /* Adds padding and border to the element's total width and height */
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            opacity: 0.9;
        }
    </style>

<?php
include '../db.php';  // Ensure you have included your database connection file

// Get the product ID from the query string
$id = $_GET['id'] ?? null;

if (!$id) {
    echo "Product not found.";
    exit;
}

// Fetch the product details from the database
$sql = "SELECT * FROM products WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

if (!$product) {
    echo "Product not found.";
    exit;
}
?>

<form action="update_product_process.php" method="post" style="">
    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $product['name']; ?>"><br>
    <label>Author:</label>
    <input type="text" name="author" value="<?php echo $product['author']; ?>"><br>
    <label>Your Price:</label>
    <input type="text" name="price" value="<?php echo $product['price']; ?>"><br>
    <label>Original Price:</label>
    <input type="text" name="originalprice" value="<?php echo $product['originalprice']; ?>"><br>
    <label>Discount:</label>
    <input type="text" name="discount" value="<?php echo $product['discount']; ?>"><br>
    <label>Category:</label>
    <input type="text" name="category" value="<?php echo $product['category']; ?>"><br>
    <input type="submit" value="Update Product">
</form>
