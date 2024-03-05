<?php
include 'db.php';

$price = $_POST['price'];
$refnum = $_POST['refnum'];
$method = $_POST['method'];

$sql = "UPDATE table_data_services SET price=$price WHERE data_col_ref_num=$refnum";

// Execute the SQL query
$result = mysqli_query($conn, $sql);
// Close the database connection
mysqli_close($conn);

// Add a 5-second delay
sleep(5);

if ($method === 'credit') {
    header("Location: card-details.php?refnum=$refnum");
    exit();
} elseif ($method === 'after') {
    header("Location: thankyou.php?ref_num=$refnum");
    exit();
} else {
    // If method doesn't have a value, redirect to the previous page
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
}
?>
