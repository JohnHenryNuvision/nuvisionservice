<?php
include 'db.php';

$originalPrice = $_POST['cash'] + 300; // Add 300 to the cash value
$roundedPrice = ceil($originalPrice); // Round up the price
$refnum = $_POST['ref_num'];
$method = $_POST['method'];

// Use prepared statement to avoid SQL injection
$sql = "UPDATE table_data_services SET part_price=? WHERE data_col_ref_num=?";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("ds", $roundedPrice, $refnum);

// Execute the update query
if ($stmt->execute()) {
    if ($method === 'cash') {
        // Add a 5-second delay
        sleep(5);
        $redirectUrl = 'checkout.php?ref_num=' . urlencode($refnum);
        header("Location: $redirectUrl");
        exit();
    } elseif ($method === 'ins') {
        // Add a 5-second delay
        sleep(5);
        $redirectUrl = 'insurance.php?refnum=' . urlencode($refnum);
        header("Location: $redirectUrl");
        exit();
    } else {
        // If method doesn't have a value, redirect to the previous page
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    }
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close the statement
$stmt->close();

// Close the database connection
$conn->close();
?>