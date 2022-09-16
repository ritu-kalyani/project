<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    
<?php 
        require_once "submodules/navbar.php";
        require_once "submodules/_dbconnect.php";

        if(isset($_POST['login'])){
          $username = $_POST['loginUsername'];
          $pass = $_POST['loginPassword'];

          $true_username = "select * from user where uname ='$username'";
          $sql = mysqli_query($conn,$true_username);

          $username_count = mysqli_num_rows($sql);

          if($username_count >0){

          while($row = mysqli_fetch_array($sql)){
                  if(password_verify($pass ,$row['password'])){
                    $_SESSION['uname'] = $username;
                    ?>
                    <script>
                        swal({
                            title: "Login Successful",
                            text: "Welcome to our Beverage website",
                            icon: "success",
                        });
                        location.replace("home.php?uid=<?php echo $row['uid'];?>");
                    </script>
                    <?php
                    }
                    else{
                        ?>
                    <script>
                        swal({
                            title: "Incorrect Password",
                            text: "Try again with correct password",
                            icon: "warning",
                        });
                    </script>
                    <?php
                    }
                }
            }
            else {
                ?>
                <script>
                        swal({
                            title: "Incorrect Username",
                            text: "Try Again to login with correct Username",
                            icon: "warning",
                        });
                </script>
                 <?php
            }


        }
    ?>


    <div class="entire">
    <div class="login-form">
        <h2>Login Form</h2>
        <form method ="post">
          <div class="login-field">
            <input type="text" placeholder="Enter your username" name="loginUsername" required>
          </div>
          <div class="login-field">
            <input type="password" placeholder="Enter your password" name="loginPassword" required>
          </div>
          <div class="login-button">
            <button type="submit" name="login" class="btn btn-secondary">LOGIN</button>
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