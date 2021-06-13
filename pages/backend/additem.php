<?php
session_start();
$item_id = $_POST['add_item_to_basket_id'];
if (!isset($_SESSION['user_info'])) {
    header('Location:../login.php');
} else {
    if (!isset($_SESSION['products'])) {
        $_SESSION['products'] = array();
    }
    array_push($_SESSION['products'], $item_id);
    header("Location:../index.php");
}
