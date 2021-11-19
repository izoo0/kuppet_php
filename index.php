<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.com/libraries/font-awesome">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <title>Login</title>
</head>

<body>
   <div class="form-container">
       <form action="includes/login.php" method="post">
       <div class="login-logo">
           <img src="assets/img/kuppet.jpg" alt="" class="logo">
       </div>
           <h3>Sign In</h3>
           <div class="divider"></div><br>
           <i class="fas fa-user"></i>
           <input type="text" name="uname" placeholder="username"><br><br>
           <!-- <i class="fas fa-at"></i>
           <input type="email" name="email" placeholder="email"> -->
           <i class="fas fa-lock"></i>
           <input type="password" name="password" placeholder="Password">
           <input type="submit" value="Login">
       </form>
   </div>
</body>

</html>