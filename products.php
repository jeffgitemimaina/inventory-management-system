<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Add New Product</h2>
        <form action="add_product.php" method="POST">
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" class="form-control" id="productName" name="productName" placeholder="Enter product name" required>
            </div>
            <div class="form-group">
                <label for="sku">SKU</label>
                <input type="text" class="form-control" id="sku" name="sku" placeholder="Enter SKU" required>
            </div>
            <div class="form-group">
                <label for="unitOfBreakingBulk">Unit of Breaking Bulk</label>
                <input type="text" class="form-control" id="unitOfBreakingBulk" name="unitOfBreakingBulk" placeholder="Enter unit of breaking bulk" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</body>
</html>
