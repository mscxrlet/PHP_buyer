<?php
require_once 'db.php';
session_start();

if (!isset($_SESSION['buyer_id'])) {
    header("Location: login.php");
    exit();
}

$buyer_id = $_SESSION['buyer_id'];

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $product_name = isset($_GET['product_name']) ? trim($_GET['product_name']) : '';
    $price = isset($_GET['price']) ? floatval(str_replace(['P', ',', ' '], '', $_GET['price'])) : 0.00;
    $image = isset($_GET['image']) ? trim($_GET['image']) : '';
    $redirect = isset($_GET['redirect']) ? trim($_GET['redirect']) : 'categories.php';

    if ($action === 'add_to_cart') {
        // Check if item already exists in cart for this user
        $check = $conn->prepare("SELECT id, quantity FROM cart WHERE buyer_id = ? AND product_name = ?");
        $check->bind_param("is", $buyer_id, $product_name);
        $check->execute();
        $result = $check->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $new_qty = $row['quantity'] + 1;
            $update = $conn->prepare("UPDATE cart SET quantity = ? WHERE id = ?");
            $update->bind_param("ii", $new_qty, $row['id']);
            $update->execute();
        } else {
            $insert = $conn->prepare("INSERT INTO cart (buyer_id, product_name, price, image, quantity) VALUES (?, ?, ?, ?, 1)");
            $insert->bind_param("isds", $buyer_id, $product_name, $price, $image);
            $insert->execute();
        }
    }

    if ($action === 'add_to_fave') {
        $check = $conn->prepare("SELECT id FROM favorites WHERE buyer_id = ? AND product_name = ?");
        $check->bind_param("is", $buyer_id, $product_name);
        $check->execute();
        if ($check->get_result()->num_rows == 0) {
            $insert = $conn->prepare("INSERT INTO favorites (buyer_id, product_name, price, image) VALUES (?, ?, ?, ?)");
            $insert->bind_param("isds", $buyer_id, $product_name, $price, $image);
            $insert->execute();
        }
    }

    if ($action === 'remove_fave') {
        $remove = $conn->prepare("DELETE FROM favorites WHERE buyer_id = ? AND product_name = ?");
        $remove->bind_param("is", $buyer_id, $product_name);
        $remove->execute();
    }

    header("Location: " . $redirect);
    exit();
}
?>
