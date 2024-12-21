<?php
include 'connect.php';
if (!is_dir('uploads')) {
  mkdir('uploads', 0777, true); 
}
 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
 
    if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
        $image = $_FILES['image']['name'];
        $target = "uploads/" . basename($image);
 
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $sql = "INSERT INTO crud (name, description, price, quantity, image)
                    VALUES ('$name', '$description', '$price', '$quantity', '$target')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                header('location:products.php');
            } else {
                die(mysqli_error($con));
            }
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "Please upload an image.";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <link rel="stylesheet" href="css/add.css">
    <title>Secret Charm | Add Product</title>
</head>
<body>
 
<div class="left">
        <a href="display.php" class="back-icon" title="Back">
        <i class="fa-solid fa-circle-chevron-left"></i></a>   
    </div>
 
    <div class="header">
        <h2 style="color: #CD5C5C; font-size: 24px; margin-bottom: -15px;
        font-family: 'Times New Roman'; align-content: center">secret charm</h2>
        <h1>Add Product</h1>
    </div>
 
    <div class="container my-5">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" placeholder="Enter product name" name="name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Product Description</label>
                <input type="text" class="form-control" placeholder="Enter product description" name="description" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Product Price</label>
                <input type="number" class="form-control" placeholder="Enter product price" name="price" step="0.01" min="0" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Product Quantity</label>
                <input type="number" class="form-control" placeholder="Enter product quantity" name="quantity" min="1" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Product Image</label>
                <input type="file" class="form-control" name="image" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>