<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    
    <?php 
        require_once "submodules/navbar.php";
        require_once "submodules/_dbconnect.php";

        if (isset($_POST['contact_login'])) {
            $name = $_POST['name'];
            $message = $_POST['message'];
            $email = $_POST['email'];
            
            $sql = "INSERT INTO contact VALUES ('" . $name . "', '" . $message . "', '" . $email . "')";
            if ($conn->query($sql) == TRUE) {
                echo '
                <script>
                    swal({
                        title: "Query Successful",
                        text: "Your query has been registered successfully",
                        icon: "success",
                    });
                </script>
                ';
            }

            else {
                echo '
                <script>
                    swal({
                        title: "Query not Successful",
                        text: "We have encountered an error with your query",
                        icon: "warning",
                    });
                </script>
                ';
            }
        }
    ?>
    
    <section class="contact">
        <div class="contact-title">
            <h2>Contact Us</h2>
            <p>If you have any query regarding beverage or any related problem, do contact us filling below form</p>
        </div>
        <div class="contact-container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+91.901234578</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>info@Drinksify.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form method="POST">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" placeholder="Full Name" required="required">
                    </div>
                    <div class="inputBox">
                        <input type="email" name="email" placeholder ="Email" required="required">
                    </div>
                    <div class="inputBox">
                        <textarea name="message" id=""placeholder="Type your Message..." required="required"></textarea>
                    </div>
                    <div class="inputBox">
                        <input type="submit"  name="contact_login" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>

    

    <?php 
        require_once "submodules/footer.php";
    ?>
</body>
</html>