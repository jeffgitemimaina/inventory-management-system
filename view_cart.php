<?php
session_start();

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    echo "<h2>Cart Contents</h2>";
    echo "<table class='table table-bordered'>";
    echo "<thead><tr><th>Product Definition</th><th>Quantity</th><th>Supplier Details</th><th>Company KRA Pin</th><th>VAT</th><th>Price</th></tr></thead>";
    echo "<tbody>";
    foreach ($_SESSION['cart'] as $item) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($item['productDefinition']) . "</td>";
        echo "<td>" . htmlspecialchars($item['quantity']) . "</td>";
        echo "<td>" . htmlspecialchars($item['supplierDetails']) . "</td>";
        echo "<td>" . htmlspecialchars($item['kraPin']) . "</td>";
        echo "<td>" . htmlspecialchars($item['vat']) . "</td>";
        echo "<td>" . htmlspecialchars($item['price']) . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "Your cart is empty.";
}
?>
