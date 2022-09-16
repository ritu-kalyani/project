<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Register</title>
</head>
<body>
    
<?php 
        require_once "submodules/navbar.php";
        require_once "submodules/_dbconnect.php";

        if(isset($_POST['signup'])){
          $email = mysqli_real_escape_string($conn,$_POST['registerEmail']);
          $uname = mysqli_real_escape_string($conn,$_POST['registerUsername']);
          $pass = mysqli_real_escape_string($conn,$_POST['registerPassword']);
          $cpass = mysqli_real_escape_string($conn,$_POST['registerCPassword']);
      
          $pass_hash = password_hash($pass,PASSWORD_BCRYPT);
          $cpass_hash = password_hash($cpass,PASSWORD_BCRYPT);

          $namequery = "select * from user WHERE uname = '$uname'";
          $query = mysqli_query($conn,$namequery);
          $namecount = mysqli_num_rows($query);

          if($namecount > 0){
            ?>
            <script>
                    swal({
                        title: "Username already exists",
                        text: "Try another unique username",
                        icon: "warning",
                    });
    
            </script>
          <?php
        
          }else{
          if($pass == $cpass){
              $insert = "Insert into user( uname, password, email) VALUES ('$uname', '$pass_hash','$email')";
              $finalquery = mysqli_query($conn,$insert);
  
              if($finalquery){
                  $sql = "select uid from user where uname='". $uname. "'";
                  $result = mysqli_query($conn, $sql);

                  $row = mysqli_fetch_assoc($result);
                  ?>
                  <script>
                    swal({
                    title: "Your Registration has been successfully Done",
                    text: "Now you can login to our services..",
                    icon: "success",
                });
                location.replace("login.php?uid=<?php echo $row['uid'];?>");
                </script>
                <?php
                }else{
                ?>
                <script>
                    swal({
                    title: "Registration Unsuccessful",
                    text: "please Try again",
                    icon: "error",
                });
                </script>
                <?php
                
                }  
            }
            else{
                ?>
                <script>
                    swal({
                    title: "passwords are not matching",
                    text: "please Type correctly",
                    icon: "error",
                });
                </script>
                <?php
            }
        }
    }
?>


    <div class="entire">
    <div class="Register-form">
        <h2>Register Here</h2>
        <form method ="post">
          <div class="Register-field">
            <input type="text" placeholder="Enter your username" name="registerUsername" required>
          </div>
          <div class="Register-field">
            <input type="email" placeholder="Enter your email" name="registerEmail" required>
          </div>
          <div class="Register-field">
            <input type="password" placeholder="create your password" name="registerPassword" required>
          </div>
          <div class="Register-field">
            <input type="password" placeholder="Confirm your password" name="registerCPassword" required>
          </div>
          <div class="Register-button">
            <button type="submit"  name="signup" class="btn btn-secondary">Register Now</button>
          </div>
          <br>
          <div class="Register-text">
            <h3>Already have an account? <a href="login.php">Login now</a></h3>
          </div>
        </form>
      </div>
    </div>

    <?php 
        require_once "submodules/footer.php";
    ?>
</body>
</html>