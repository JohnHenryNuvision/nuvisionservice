<?php
	include 'db.php';

    $part=$_POST['part'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $house=$_POST['house'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $status = "For Review";
    $ordernumber=$_POST['ordernumber'];
    $vin=$_POST['vin'];
    $amnumber=$_POST['amnumber'];
    $calibrationTypeId=$_POST['calibrationTypeId'];
    $calibrationName=$_POST['calibrationName'];
    $make=$_POST['make'];
    $model=$_POST['model'];
    $year=$_POST['year'];


    if ($part == "Windshield") {
        $price = 0;
    } elseif ($part == "Door") {
        $price = 0;
    } elseif ($part == "Vent") {
        $price = 0;
    } elseif ($part == "Quarter") {
        $price = 0;
    } elseif ($part == "Back") {
        $price = 0;
    } elseif ($part == "Sunroof") {
        $price = 0;      
        
    } else {
        // Default case if $part is neither "Windshield" nor "Door"
        $price = 0; // You can set a default price or handle it as per your requirements
    }




	$sql = "INSERT INTO `table_data_services`
    (`data_col_vin`,
    `data_col_amnumber`,
    `data_col_cal_id`,
    `data_col_cal_type`,
    `data_col_make`, 
    `data_col_model`, 
    `data_col_year`,
    `data_col_part`,
    `data_col_fname`,
    `data_col_lname`,
    `data_col_email`,
    `data_col_phone`,
    `data_col_address`,
    `data_col_house`,
    `data_col_city`,
    `data_col_zip`,
    `data_col_date`,
    `data_col_time`,
    `data_col_status`,
    `data_col_ref_num`,
    `price`) 
    
    VALUES 
    ('$vin',
    '$amnumber',
    '$calibrationTypeId',
    '$calibrationName',
    '$make',
    '$model',
    '$year',
    '$part',
    '$fname',
    '$lname',
    '$email',
    '$phone',
    '$address',
    '$house',
    '$city',
    '$zip',
    '$date',
    '$time',
    '$status',
    '$ordernumber',
    '$price')";

	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("Submitted"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
    
    


	mysqli_close($conn);
    
    $zapierWebhookUrl = 'https://hooks.zapier.com/hooks/catch/1576319/38is8rm/';

  
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ordernumber'])) {

    // Get tracking number from the form

    // Create data array
    $data = array(
    
    );

    // Create JSON payload
    $jsonPayload = json_encode($data);

    // Set up cURL
    $ch = curl_init($zapierWebhookUrl);

    // Set cURL options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // Execute cURL session
    $response = curl_exec($ch);

    // Check for errors
    if ($part != "Windshield") {
        $redirectUrls = 'successful.php?ref_num=' . urlencode($ordernumber);
        header("Location: $redirectUrls");
        exit();
    } else {
        // Data sent successfully, introduce a 5-second delay before redirect
      

        // Redirect to the next page with tracking number as a parameter
        $redirectUrl = 'choose.php?ref_num=' . urlencode($ordernumber);
        header("Location: $redirectUrl");
        exit();
    }

    // Close cURL session
    curl_close($ch);
} else {
    // Handle form not being submitted or missing tracking number
    echo 'Error: Form not submitted or tracking number missing.';
}
   
?>