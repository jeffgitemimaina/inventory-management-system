<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Set the time zone to Nairobi
    date_default_timezone_set('Africa/Nairobi');
    
    // Retrieve the form data
    $productDefinition = $_POST['productDefinition'];
    $quantity = $_POST['quantity'];
    $supplierDetails = $_POST['supplierDetails'];
    $kraPin = $_POST['kraPin'];
    $vat = $_POST['vat'];
    $price = $_POST['price'];

     // Get the current timestamp
     $timestamp = date('Y-m-d H:i:s');

    // Define the CSV file path
    $file = 'inventory.csv';

    // Check if the file exists
    $fileExists = file_exists($file);

    // Open the file for writing
    $handle = fopen($file, 'a');

    // If the file doesn't exist, add the header row
    if (!$fileExists) {
        fputcsv($handle, ['Timestamp','Product Definition', 'Quantity', 'Supplier Details', 'Company KRA Pin', 'VAT', 'Price']);
    }

    // Write the form data to the CSV file
    fputcsv($handle, [$timestamp, $productDefinition, $quantity, $supplierDetails, $kraPin, $vat, $price]);

    // Close the file
    fclose($handle);

    echo "Data saved successfully!";
} else {
    echo "Invalid request method!";
}
?>
