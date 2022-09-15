<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    
<?php 
        require_once "submodules/navbar.php";
    ?>

    <div class="entire">
    <div class="login-form">
        <h2>Login Form</h2>
        <form action="#">
          <div class="login-field">
            <input type="text" placeholder="Enter your username" required>
          </div>
          <div class="login-field">
            <input type="password" placeholder="Enter your password" required>
          </div>
          <div class="login-button">
            <button type="button" class="btn btn-secondary">LOGIN</button>
          </div>
          <br>
          <div class="login-text">
            <h3>Not a member? <a href="register.php">Register now</a></h3>
          </div>
        </form>
      </div>
    </div>
    <?php 
        require_once "submodules/footer.php";
    ?>
</body>
</html>