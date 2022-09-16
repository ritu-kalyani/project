<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/items.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- jQuery CDN -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
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
    <?php 
        require_once "submodules/navbar.php";
    ?>

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
                echo "<a style='cursor: pointer;' id='" . $row["pid"] . "' class='cartBtn'>Add to Cart</a>";
                echo "</div>";
                echo "</div>";
            }
        }

    ?>
        
    </div>

    
    <?php 
        require_once "submodules/footer.php";
    ?>


    <script>
        $(".cartBtn").on("click", function() {
            
            $.ajax({
                url : "ajax/addToCart.php?id=" + this.id,
                type: "GET",
                success: function (data) {
                    console.log("success");
                    swal({
                        title: "Item Added to Cart",
                        text: "The item you selected has been added to the Cart",
                        icon: "success",
                    });
                },

                error: function (err) {
                    console.log("error");
                }
            })
        })
    </script>

</body>

</html>