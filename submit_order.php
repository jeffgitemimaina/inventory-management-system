<?php
// submit_order.php
// Database connection and retrieval logic
// Assume connection to database is $conn
$sql = "SELECT productDefinition, quantity, price, (quantity * price) as amount FROM cart";
$result = $conn->query($sql);
$totalAmount = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Order</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Submit Order</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['productDefinition']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo number_format($row['amount'], 2); ?></td>
                    </tr>
                    <?php $totalAmount += $row['amount']; ?>
                <?php } ?>
            </tbody>
        </table>
        <div class="form-group">
            <label for="totalAmount">Total Amount</label>
            <input type="text" class="form-control" id="totalAmount" value="<?php echo number_format($totalAmount, 2); ?>" readonly>
        </div>
        <form action="process_payment.php" method="POST">
            <div class="form-group">
                <label for="paymentMode">Payment Mode</label>
                <select class="form-control" id="paymentMode" name="paymentMode" required>
                    <option value="cash">Cash</option>
                    <option value="mpesa">Mpesa</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Complete Purchase</button>
        </form>
    </div>
</body>
</html>
<?php
$conn->close();
?>
