<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM crud WHERE id = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$description = $row['description'];
$price = $row['price'];
$quantity = $row['quantity'];
$image = $row['image'];
 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
 
    if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
        $newImage = $_FILES['image']['name'];
        $target = "uploads/" . basename($newImage);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $image = $target;
        }
    }
 
    $sql = "UPDATE crud SET name = '$name', description = '$description', price = '$price', quantity = '$quantity', image = '$image' WHERE id = $id";
    $result = mysqli_query($con, $sql);
 
    if ($result) {
        header('Location: display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <link rel="stylesheet" href="css/update.css">
    <title>Secret Charm | Update Product</title>
</head>
<body>
 
<div class="left">
        <a href="display.php" class="back-icon" title="Back">
        <i class="fa-solid fa-circle-chevron-left"></i></a>   
    </div>
 
    <div class="header">
        <h2>secret charm</h2>
        <h1>Edit Product Details</h1>
    </div>
 
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" required>
            </div>
            <div class="form-group">
                <label>Product Description</label>
                <input type="text" class="form-control" name="description" value="<?php echo $description; ?>" required>
            </div>
            <div class="form-group">
                <label>Product Price</label>
                <input type="number" class="form-control" name="price" value="<?php echo $price; ?>" step="0.01" min="0" required>
            </div>
            <div class="form-group">
                <label>Product Quantity</label>
                <input type="number" class="form-control" name="quantity" value="<?php echo $quantity; ?>" min="1" required>
            </div>
            <div class="form-group">
                <label>Product Image</label>
                <input type="file" class="form-control" name="image" accept="image/*">
                <label>Current Image:</label>
                <img src="<?php echo $image; ?>" alt="Current Image" class="current-image">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>