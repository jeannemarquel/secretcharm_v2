<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

     $checkEmail="SELECT * From admin where email='$email'";
     $result=$con->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO admin(firstName,lastName,email,password)
                       VALUES ('$firstName','$lastName','$email','$password')";
            if($con->query($insertQuery)==TRUE){
                header("location: index.php");
            }
            else{
                echo "Error:".$con->error;
            }
     }
   

}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM admin WHERE email='$email' and password='$password'";
   $result=$con->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("location: products.php");
    exit();
   }
   else{
    header("Not Found, Incorrect Email or Password");
   }

}
?>