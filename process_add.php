<?php
include 'db.php';

$name = $_POST['name'];
$author = $_POST['author'];
$price = $_POST['price'];
$category = $_POST['category'];
$sortby = $_POST['sortby'];
$link = $_POST['link'];
$image = $_FILES['image']['name'];
$target = "productimages/".basename($image);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $sql = "INSERT INTO products (name, author, price, category, sortby, link, image_url) VALUES ('$name','$author', '$price', '$category','$sortby', '$link', '$target')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Failed to upload image";
}

$conn->close();
header("Location: dashboard/listing.php"); // Redirect to the listing page
exit();
?>
