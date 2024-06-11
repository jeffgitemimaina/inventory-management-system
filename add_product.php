<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the form data
    $productName = $_POST['productName'];
    $sku = $_POST['sku'];
    $unitOfBreakingBulk = $_POST['unitOfBreakingBulk'];

    // Define the CSV file path
    $file = 'inventory.csv';

    // Open the file for writing
    $handle = fopen($file, 'a');

    // Check if the "product" section already exists
    $fileContent = file_get_contents($file);
    if (strpos($fileContent, '[Products]') === false) {
        // Add a marker for the "product" section if it doesn't exist
        fputcsv($handle, ['[Products]']);
        fputcsv($handle, ['Product Name', 'SKU', 'Unit of Breaking Bulk']);
    }

    // Write the product data to the CSV file under the "product" section
    fputcsv($handle, [$productName, $sku, $unitOfBreakingBulk]);

    // Close the file
    fclose($handle);

    echo "Product added successfully!";
} else {
    echo "Invalid request method!";
}
?>
