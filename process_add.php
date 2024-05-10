<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'db.php';

$name = $conn->real_escape_string($_POST['name']);
$author = $conn->real_escape_string($_POST['author']);
$price = $conn->real_escape_string($_POST['price']);
$originalprice = $conn->real_escape_string($_POST['originalprice']);
$discount = $conn->real_escape_string($_POST['discount']);
$category = $conn->real_escape_string($_POST['category']);
$sortby = $conn->real_escape_string($_POST['sortby']);
$link = $conn->real_escape_string($_POST['link']);
$image = $conn->real_escape_string($_FILES['image']['name']);
$target = "productimages/" . basename($image);


$stmt = $conn->prepare("INSERT INTO products (name, author, price, originalprice, discount, category, sortby, link, image_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssddsssss", $name, $author, $price, $originalprice, $discount, $category, $sortby, $link, $target);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();


$conn->close();
header("Location: dashboard/listing.php"); 
exit();

?>
