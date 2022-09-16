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
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
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
                            $items = explode(",", $_COOKIE["items"]);
                            foreach($items as $index=>$itemID) {
                                    $sql = "SELECT * FROM product WHERE pid='" .$itemID . "'";
                                    
                                    $item = $conn->query($sql);
                                
                                    if ($item->num_rows > 0) {
                                        while ($row = $item->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $row["pid"] . "</td>";
                                            echo "<td>" . $row["pname"] . "</td>";
                                            echo "<td>" . $row["price"] . "</td>";
                                            echo "<td>" . "1" . "</td>";
                                            echo "<td>" . $row["price"] . "</td>";
                                            echo "</tr>";
                                        }
                                    }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>