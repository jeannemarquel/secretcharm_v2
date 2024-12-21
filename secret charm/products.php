<?php
session_start();
include("connect.php");
 
$sql = "SELECT * FROM crud";
$result = mysqli_query($con, $sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/products.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <title>Secret Charm | Products</title>
 
<style>
     nav {
        display: flex;
        justify-content: space-between;
        align-items: center; 
        padding: 3px 5px; 
        background-color: #7b241c;
        position: fixed;
        top: 0;
        width: 100%;
        overflow: hidden;
        height: 50px; 
 
    }
    nav .left,
    nav .center,
    nav .right {
        display: flex;
        align-items: center;
        font-size: 20px;
 
    }
 
    nav .left {
        margin-left: 20px; 
    }
 
    nav .center {
        justify-content: center;
        flex: 1; 
        margin-right: auto; 
        transform: translateX(-70px); 
    }
 
    nav .right {
        margin-right: 20px; 
    }
 
    nav p {
        font-size: 25px;
        color: #f5b7b1;
        font-style: italic;
        margin: 0; 
        margin-left: 20px;
    }

 
    nav a {
        color: white;
        font-family: Times New Roman;
        text-decoration: none;
        padding: 8px 12px;
    }
 
    nav a:hover {
        background-color: #CD5C5C;
        color: #7b241c;
    }
    nav .center a {
        margin: 0 10px; 
    }
    nav .logout-icon {
    font-size: 20px;
    color: white;
    text-decoration: none;
    transform:translateX(5px);
}
 
nav .logout-icon:hover {
    background-color: #CD5C5C;
    color: #7b241c;
}
    
 
</style>
</head>
<body>
<nav>
        <p>
       Hello,  
       <?php
       if(isset($_SESSION['email'])){
           $email=$_SESSION['email'];
           $query=mysqli_query($con, "SELECT admin.* FROM `admin` WHERE admin.email='$email'");
           while($row=mysqli_fetch_array($query)){
               echo $row['firstName'].' '.$row['lastName'];
           }
       }
       ?>
        &hearts;
    </p>

  <div class="center">
        <a href="products.php">Products</a>
        <a href="display.php">Inventory</a>
    </div>
 
    <div class="right">

    <a href="index.php" class="logout-icon" title="Logout">
    <i class="fas fa-right-to-bracket"></i>       
</a>   
    </div>
    </nav>
    <div class="header">
        <img src="image/productheader.jpg" alt="Header Image">
    </div>
 
    <div class="collection">
        <h2 style="font-size: 2em; margin-bottom: 20px; color:#7b241c">Find Your Sparkle at Secret Charm</h2>
        <p style=" margin-bottom: 40px;">Explore Secret Charm through stunning images that showcase the beauty, craftsmanship, and timeless elegance of our jewelry.</p>
    <div class="collection">
        <div class="gallery-container">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="gallery-item">';
                echo '<img src="' . $row['image'] . '" alt="' . $row['name'] . '">';
                echo '<div class="info">';
                echo '<h3>' . $row['name'] . '</h3>';
                echo '<p>' . $row['description'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
 
      <button onclick="scrollToTop()" id="scrollToTopBtn"> <i class="fa-solid fa-circle-up"></i> </button>
 
<script src="up.js"></script>
</body>
</html>
 