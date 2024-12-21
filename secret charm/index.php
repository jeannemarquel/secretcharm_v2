<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Charm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
 
</head>
<body>

    <!-- Register Form -->
    <div class="container" id="signup" style= "display:none ">
      <h2 style="color:#F6F6F6; margin-bottom: 30px"> ... </h2>
      <h2 style="color: #CD5C5C; text-align: center; margin-bottom: 15px"> secret charm </h2>
      <h1 style="color: #7b241c; line-height: 50%; font-size: 45px; text-align: center;"> Create an Account </h1>
      <p  style="color: #CD5C5C; line-height: 100%; text-align: center; font-size: 20px;"> sparkle starts here </p>
      <br>

      <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" autocomplete="off"required>
            </div>
            <div class="input-group">
                <i class="fa-regular fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" autocomplete="off"required>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" autocomplete="off"required>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" autocomplete="off"required>
            </div>
 
            <div style="text-align: center; margin-top: 20px;">
            <input type="submit" value="Sign Up" name="signUp">
            </div>
 
            <div class="links">
            <p style = "color: #CD5C5C; font-size: 16px;">Already have an account?
            <button id="signInButton">Sign In</button></p>
      </div>
        </form>
    </div>
 
    <!-- Login Form -->
    <div class="container" id="signIn">
        <div class="form-container">
            <h1 style="color:#F6F6F6; line-height: 0%; font-size: 100px; text-align: center;"> ... </h1>
            <h2 style="color: #CD5C5C; text-align: center;"> secret charm </h2>
            <h1 style="color: #7b241c; line-height: 100%; font-size: 45px; text-align: center;"> Login </h1>
            <p style="color: #CD5C5C; line-height: 100%; text-align: center; font-size: 20px;"> sparkle starts here </p>
            <br>
 
            <form method="post" action="register.php">
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>
                </div>
 
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Enter Password" autocomplete="off" required>
                </div>
 
                <div style="text-align: center; margin-top: 20px;">
                    <input type="submit" value="Login" name="signIn">
                </div>
            </form>
 
            <br>
            <div class="links">
                <p style= "color: #CD5C5C" >Don't have an account yet?
                 <button id="signUpButton">Sign Up</button></p>
            </div>
        </div>
 
        <div class="image-container">
            <img src="image/img1.jpg" alt="Jewelry">
        </div>
    </div>
 
    <script src="script.js"></script>
</body>
</html>