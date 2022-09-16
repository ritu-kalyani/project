<?php

$items = $_GET["id"];
$items = implode(',',array_unique(explode(',', $items)));
setcookie("status", "gettingCreated");
setcookie("items", $items, time() + 2 * 24 * 60 * 60,  "/");