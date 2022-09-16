<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- jQuery CDN -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <?php
        require_once "submodules/navbar.php"; 
        require_once "submodules/_dbconnect.php";
        
    ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-3">
            <h1>My Cart</h1>
        </div>
        <div class="col-lg-8">
            <div class="card wish-list mb-3">
                <table class="table text-center">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $row) {
                                    echo "<tr>";
                                    echo "<td>" . $row["pid"] . "</td>";
                                    echo "<td>" . $row["pname"] . "</td>";
                                    echo "<td id='price" . $row["pid"]. "'>" . $row["price"] . "</td>";
                                    echo "<td><input id='" . $row["pid"] . "' class='quantity' type='number' min=1 value=" . $row["quantity"] . " </input></td>";
                                    echo "<td id='total" . $row["pid"] . "' class='total'>" . $row["total"] . "</td>";
                                    echo "</tr>";
                                } 
                            }   
                            
                            else {
                                echo "Nothing to show";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-4">
                <div class="card wish-list mb-3">
                    <div class="pt-4 border bg-light rounded p-3">
                        <h5 class="mb-3 text-uppercase font-weight-bold text-center">Order summary</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0 bg-light">Total Price<span>Rs.<span class='finalTotal'>0</span></span></li>
                            
                        </ul>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Cash On Delivery 
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" disabled>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Online Payment 
                            </label>
                        </div><br>
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#checkoutModal">go to checkout</button>
                    </div>
                </div>
                
            </div>
    </div>
</div>
<script>

    calculateCart();

    function calculateCart() {
        ID = $("*").map(function() {
            if (this.id) {
                return this.id;
            }
        }).get()

        var value = 0;
        for (ids in ID) {
            if (ID[ids].indexOf("total") != -1) {
                value +=  parseInt(document.getElementById(ID[ids]).innerText);
            }

            
        }

        $(".finalTotal").html(value);
    }
    $(".quantity").on("change", function() {
        var value = $("#"+this.id).val()
        var price = parseInt($("#price" + this.id).html());
        var ID = []
        var total = price * parseInt(value);
        $("#total" + this.id).html(total);

        calculateCart();
    })

    
</script>
</body>
</html>