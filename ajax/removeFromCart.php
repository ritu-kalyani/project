<?php
    session_start();

    $id = intval($_GET["id"]);
    foreach($_SESSION["cart"] as $item) {
        $count+=1;
        if (intval($item["pid"]) == $id)  {
            unset($_SESSION["cart"][$id]);
            break;
        }
    }
?>