<?php
session_start();
include 'dbConn.php';

if(isset($_POST["newItem"])){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "Received data: " . $_POST['menu_item'] . " - " . $_POST['price'];
        $menu_item = $_POST['menu_item'];
        $price = $_POST['price'];
        dbQuery("INSERT INTO menu (menu_item, price) VALUES ('$menu_item', '$price');");
    }
}
if (isset($_POST['trigger']) && $_POST['trigger'] === 'true') {
    $result = dbQuery( "SELECT * FROM menu");
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo json_encode($row['menu_item']);
            echo json_encode($row['price']);
        }
    }
    exit;
}











