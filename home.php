<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/items.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinksify Beverage</title>
    <style>
        .animate span {
            display: block;
        }
        .animate {
            text-align: center;
        }
        .text1 {
            font-size: 40px;
            font-weight: 200;
            margin-bottom: 30px;
            text-align: center;
            animation: text 3s infinite;
        }
        @keyframes text {
            0% {
                color: black;
            }
            30% {
                letter-spacing: 25px;
            }
            85% {
                letter-spacing: 8px;

            }
        }
    </style>
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

    <div class="image">
        <img src="images/background.jpg" width= "100%" height="500" alt="">
    </div>

    <div class="animate">
        <span class="text1">Let's Drink Up</span>
    </div>

    <div class="title-menu">
        <span class="text2">Drinksify Menu</span>
    </div>
    
    <div class="menu">
    <?php 
        require_once "submodules/_dbconnect.php";

        $products = $conn->query("SELECT * from product");

        if ($products->num_rows > 0) {
            while ($row = $products->fetch_assoc()) {
                echo "<div class='items'>";
                echo "<img src='images/" . $row["image_name"] . "' alt = '" . $row["pname"] ."'>";
                echo "<div class='details'>";
                    echo "<div class='details-sub'>";
                        echo "<h5>" . $row["pname"] . "</h5>";
                        echo "<h5 class='price'>Rs. " . $row["price"] . "</h5>";
                    echo "</div>";
                echo "<p>" . $row["description"];
                echo "<b> Category: ". $row["category"] . "</b></p>";
                echo "<button>Add to Cart</button>";
                echo "</div>";
                echo "</div>";
            }
        }

    ?>
        
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
 
    
    <script>
        $('.icon').click(function () {
            $('span').toggleClass("cancel");
        });
    </script>


</body>

</html>