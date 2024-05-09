<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="styles.css">
    <style type="text/css">
    	/* Apply a basic reset */
body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: Arial, sans-serif; /* Bootstrap uses system fonts, Arial as fallback is reasonable */
}

/* Full-screen centered container */
body {
    display: flex;
    justify-content: center;
    align-items: center;
    background: #f7f7f7; /* Light grey background similar to Bootstrap's default */
}

/* Form styling */
form {
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Soft shadow around form */
    width: 90%;
    max-width: 400px; /* Maximum width of the form */
}

/* Styling labels for better spacing and bold text */
label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    margin-top: 20px;
}

/* Text input and file input styling */
input[type="text"],
input[type="file"] {
    width: calc(100% - 22px); /* Full-width minus padding */
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Button styling */
input[type="submit"] {
    background-color: #007bff; /* Bootstrap primary blue */
    color: white;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    display: block;
    width: 100%;
    margin-top: 20px;
}

/* Button hover effect */
input[type="submit"]:hover {
    background-color: #0056b3; /* Darker blue on hover */
}

/* Focus styling for text fields */
input[type="text"]:focus,
input[type="file"]:focus {
    border-color: #80bdff; /* Bootstrap-like focus blue */
    outline: none;
    box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
}
.category {
    font-size: 15px;
}

    </style>
</head>
<body>
    <form action="process_add.php" method="POST" enctype="multipart/form-data">
        <label for="name">Item Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="name">Author:</label>
        <input type="text" id="author" name="author" required><br>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required><br>
        
    <label for="category">Category:</label>
    <select  class="category" name="category" id="category">
        <option>Select Category</option>
        <option value="Teen Fiction">Teen Fiction</option>
        <option value="Romance">Romance</option>
        <option value="Mysteries">Mysteries</option>
        <option value="Literature & Fiction">Literature & Fiction</option>
        <option value="Biographies">Biographies</option>
        <option value="Religion">Religion</option>
        <option value="Sci-fi & Fantasy">Sci-fi & Fantasy</option>
        <option value="Comics">Comics</option>
        <option value="Business">Business</option>
        <option value="Art & Music">Art & Music </option>
    </select>

    <label for="sortby">Confirm Category:</label>
    <select  class="category" name="sortby" id="sortby">
        <option>Select Category</option>
        <option value="teenfiction">Teen Fiction</option>
        <option value="romance">Romance</option>
        <option value="mysteries">Mysteries</option>
        <option value="literatureandfiction">Literature & Fiction</option>
        <option value="biographies">Biographies</option>
        <option value="religion">Religion</option>
        <option value="scifiandfantasy">Sci-fi & Fantasy</option>
        <option value="comics">Comics</option>
        <option value="business">Business</option>
        <option value="artandmusic">Art & Music </option>
    </select>



        <label for="link">Product Link:</label>
        <input type="text" id="link" name="link" required><br>

        <label for="image">Product Image:</label>
        <input type="file" id="image" name="image" required><br>
        <input type="submit" value="Add Product">
    </form>


</body>
</html>


