<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the form data
    $productDefinition = $_POST['productDefinition'];
    $quantity = $_POST['quantity'];
    $supplierDetails = $_POST['supplierDetails'];
    $kraPin = $_POST['kraPin'];
    $vat = $_POST['vat'];
    $price = $_POST['price'];

    // Create an item array
    $item = [
        'productDefinition' => $productDefinition,
        'quantity' => $quantity,
        'supplierDetails' => $supplierDetails,
        'kraPin' => $kraPin,
        'vat' => $vat,
        'price' => $price
    ];

    // Add the item to the cart session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $_SESSION['cart'][] = $item;

    echo "Item added to cart successfully!";
} else {
    echo "Invalid request method!";
}
?>
