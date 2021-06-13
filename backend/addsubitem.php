<?php
session_start();
$item_id = $_POST['item_id'];
if (($key = array_search($item_id, $_SESSION['products'])) !== false) {
    unset($_SESSION["products"][$key]);
}
