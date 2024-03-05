<?php
include 'db.php';

$refnum = $_POST['ref_num'];
$insurance = $_POST['insurance'];
$insurance_num = $_POST['insurance_num'];

echo $refnum;
echo $insurance;
echo $insurance_num;

// Use single quotes around $insurance and $insurance_num in the SQL query
$sql = "UPDATE table_data_services SET data_col_insurance='$insurance', data_col_insurance_num='$insurance_num' WHERE data_col_ref_num=$refnum";

if ($conn->query($sql) === TRUE) {
    $redirectUrl = 'successful.php?ref_num=' . urlencode($refnum);
    header("Location: $redirectUrl");
    exit();
} else {
    echo "Error updating record: " . $conn->error;
}

// Close the database connection using $conn->close()
$conn->close();
?>