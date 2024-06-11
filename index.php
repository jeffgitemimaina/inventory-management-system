<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script>
        function calculateAmount() {
            const quantity = parseFloat(document.getElementById('quantity').value) || 0;
            const price = parseFloat(document.getElementById('price').value) || 0;
            const amount = quantity * price;
            document.getElementById('amount').value = amount.toFixed(2);
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <h2>Inventory System</h2>
        <form id="inventoryForm" method="POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="productDefinition">Product Definition</label>
                    <input type="text" class="form-control" id="productDefinition" name="productDefinition" placeholder="Enter product definition" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required oninput="calculateAmount()">
                </div>
                <div class="form-group col-md-2">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" step="0.01" required oninput="calculateAmount()">
                </div>
                <div class="form-group col-md-2">
                    <label for="amount">Amount</label>
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="Total amount" step="0.01" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="supplierDetails">Supplier Details</label>
                    <textarea class="form-control" id="supplierDetails" name="supplierDetails" rows="3" placeholder="Enter supplier details" required></textarea>
                </div>
                <div class="form-group col-md-3">
                    <label for="kraPin">Company KRA Pin</label>
                    <input type="text" class="form-control" id="kraPin" name="kraPin" placeholder="Enter KRA Pin" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="vat">VAT (%)</label>
                    <input type="number" class="form-control" id="vat" name="vat" placeholder="Enter VAT" step="0.01" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" formaction="submit_order.php">Submit</button>
            <button type="submit" class="btn btn-secondary" formaction="add_to_cart.php">Add to Cart</button>
        </form>

        <div class="mt-5">
            <h2>Cart</h2>
            <form action="view_cart.php" method="POST">
                <button type="submit" class="btn btn-info">View Cart</button>
            </form>
        </div>
    </div>
</body>
</html>
