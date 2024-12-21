<?php
session_start(); 
include 'connect.php';

$sql = "SELECT * FROM crud";
$result = mysqli_query($con, $sql);
?>
 
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/display.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <title>Secret Charm | Inventory</title>

    <style>
      * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      }
        
      body {
      margin: 0;
      padding-top: 50px;
      }

      nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 3px 5px;
      background-color: #7b241c;
      position: fixed;
      top: 0;
      width: 100%;
      height: 55px;
      z-index: 1000;
      border-bottom: 1px solid #f5b7b1;
      }

      nav .left, nav .center, nav .right {
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
      transform: translateX(5px);
      }

      nav .logout-icon:hover {
      background-color: #CD5C5C;
      color: #7b241c;
      }
    </style>

</head>
<body>
<nav>
    <div class="left">
        <p>
            Hello, 
            <?php
            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                $query = mysqli_query($con, "SELECT admin.* FROM `admin` WHERE admin.email='$email'");
                while ($row = mysqli_fetch_array($query)) {
                    echo $row['firstName'] . ' ' . $row['lastName'];
                }
            }
            ?>
            &hearts;
        </p>
    </div>
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

<h2 style="color: #F1F4EC; text-align: center; font-size: 20px;">.</h2>
<h2 style="color: #CD5C5C; text-align: center; font-family: Times New Roman; font-size: 30px;">secret charm</h2>
<h1 style="color: #7b241c; line-height: 60%; font-size: 50px; text-align: center; font-family: Times New Roman">Product Inventory</h1>
<h2 style="color: #F1F4EC; text-align: center; font-size: 10px;">.</h2>
 
<table class="table">
    <thead>
        <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Product</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Operations</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM crud";
        $result = mysqli_query($con, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $description = $row['description'];
                $price = $row['price'];
                $quantity = $row['quantity'];
                $image = $row['image'];
                
                echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>
                        <div class="name-column">
                            <img src="' . $image . '" alt="' . $name . '">
                            <span>' . $name . '</span>
                        </div>
                    </td>
                    <td>' . $description . '</td>
                    <td>' . $price . '</td>
                    <td>' . $quantity . '</td>
                    <td>
                        <button class="btn btn-edit">
                            <a href="update.php?updateid=' . $id . '" class="text-light"><i class="fa-solid fa-pen-to-square" style="color:white"></i></a>
                        </button>
                        <button class="btn btn-danger">
                            <a href="delete.php?deleteid=' . $id . '" class="text-light"><i class="fa-solid fa-trash" style="color:white"></i></a>
                        </button>
                    </td>
                </tr>';
            }
        }
        ?>
    </tbody>
</table>

<button class="btn btn-primary my-5" onclick="location.href='add.php';">Add Product</button>
</body>
</html>
