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
    <title>Login</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="images/logo.jpg" width="100" height="80" alt="">
        </div>

        <ul>
            <li>
                <a class="nitem" href="home.html">Home</a>
            </li>
            <li>
                <a class="nitem" href="menu.html">Menu</a>
            </li>
            <li>
                <a class="nitem" href="about.html">About Us</a>
            <li>
            <li>
                <a class="nitem" href="contact.html">Contact Us</a>
            </li>
            <li>
                <a class="nitem" href="Faq.html">FAQ</a>
            </li>
            <li>
                <a class="nitem" href="login.html">login</a>
            </li>
            <li>
                <a class="nitem" href="">Cart</a>
            </li>
        </ul>
    </nav>
    <div class="entire">
    <div class="Register-form">
        <h2>Register Here</h2>
        <form action="#">
          <div class="Register-field">
            <input type="text" placeholder="Enter your username" required>
          </div>
          <div class="Register-field">
            <input type="email" placeholder="Enter your email" required>
          </div>
          <div class="Register-field">
            <input type="password" placeholder="create your password" required>
          </div>
          <div class="Register-field">
            <input type="password" placeholder="Confirm your password" required>
          </div>
          <div class="Register-button">
            <button type="button" class="btn btn-secondary">Register Now</button>
          </div>
          <br>
          <div class="Register-text">
            <h3>Already have an account? <a href="login.html">Login now</a></h3>
          </div>
        </form>
      </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-sub">
                    <h4>Our Site</h4>
                    <ul>
                        <li><a href="about.html">about us</a></li>
                        <li><a href="menu.html">our services</a></li>
                    </ul>
                </div>
                <div class="footer-sub">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="Faq.html">FAQ</a></li>
                        <li><a href="contact.html">Contact US</a></li>
                    </ul>
                </div>
                <div class="footer-sub">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#">Email : info@Drinksify.com</a></li>
                        <li><a href="#">phone :  +91.901234578</a></li>
                    </ul>
                </div>
                <div class="footer-sub">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>
</body>
</html>