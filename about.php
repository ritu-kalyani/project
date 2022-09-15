<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinksify Beverage</title>
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

    <div  class="aboutus">
        <div class = "sub-about">
            <div class="aboutimage">
                <img src="images/about.jpg" alt="">
            </div>
            <div class="aboutcontent">
                <h1>About Us</h1>
                <h2>Drinksify</h2>
                <p>Drinksify is the one of the beverage website where one can 
                    order the authentic and new taste of beverages. we always supports
                    the quality of refinary juices or beverages. As we firstly started since
                    1989 after the huge success across various regions we open the idea to expand
                    this online. So this is the place where one can order any drink either alcoholic or
                    non-alcoholic drinks at your doorstep within one hour. We serve different and true taste
                    of drinks. So Grab it and lets drinksify the beverage.
                    <br>
                    If you have any kind of query do contact us :
                    <br> Phone +91.901234578 
                    <br> e-mail info@Drinksify.com
                </p>
            </div>
        </div>
    </div>
    
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-sub">
                    <h4>Our Site</h4>
                    <ul>
                        <li><a href="about.html">about us</a></li>
                        <li><a href="#">our services</a></li>
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
 
    
    <script>
        $('.icon').click(function () {
            $('span').toggleClass("cancel");
        });
    </script>


</body>

</html>