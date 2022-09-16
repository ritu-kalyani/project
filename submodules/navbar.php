<nav>
            <div class="logo">
                <img src="images/logo.jpg" width="100" height="80" alt="">
            </div>

            <ul>
                <li>
                    <a class="nitem" href="home.php">Home</a>
                </li>
                <li>
                    <a class="nitem" href="about.php">About Us</a>
                <li>
                <li>
                    <a class="nitem" href="contact.php">Contact Us</a>
                </li>
                <li>
                    <a class="nitem" href="Faq.php">FAQ</a>
                </li>
                <?php
                    if (isset($_SESSION["uname"])) {
                        echo "<li>";
                        echo "<a class='nitem' href='logout.php'>Logout</a>";
                        echo "</li>";
                    }

                    else {
                        echo "<li>";
                        echo "<a class='nitem' href='login.php'>Login</a>";
                        echo "</li>";
                    }
                ?>
                <li>
                    <a class="nitem" href="cart.php">Cart</a>
                </li>
            </ul>
    </nav>