<?php
	include 'db.php';


    function generateDigest($nonce, $time, $api_key) {

        $unhashedDigest = $nonce . $time . $api_key;
    
        $hashedBytes = hash('sha256', $unhashedDigest, true);
    
        return base64_encode($hashedBytes);
    
    }
    
    
    function generateNonce($length = 20) {
    
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    
        $charactersLength = strlen($characters);
    
        $randomString = '';
    
        for ($i = 0; $i < $length; $i++) {
    
            $randomString .= $characters[rand(0, $charactersLength - 1)];
    
        }
    
        return $randomString;
    
    }
    
     
    
    $api_key = '4sH3od9sfQNF9kduA9dw2myEXzVXaUzvfGf1nOw1kTvqML4pTDErRKPTuV6PUj3AYHhpw';
    
    $user_id = '1780a34d-5cfc-43d9-ff6f-08dbd34a6814';
    
    $vin =$_POST['vin'];
    
     
    
     
    
    // Generate necessary values
    
    $nonce = generateNonce(); // random string of 10-30 alphanumeric characters. GENERATE THIS RANDOMLY EVERY TIME
    
    $timestamp = time(); // current Unix time in seconds
    
    $digest = generateDigest($nonce, $timestamp, $api_key);
    
    
    // Format the Authentication Header
    
    $auth_header = sprintf(
    
        'AutoBoltAuth version="1", timestamp=%d, digest="%s", nonce="%s", userid="%s"',
    
        $timestamp, $digest, $nonce, $user_id
    
    );
    
    echo "$auth_header<br >";
    
     
    
    $url = "https://api.myautobolt.com/v1/decode/";
    
     
    
    echo "$url<br>";
    
     
    
    $curl = curl_init();
    
     
    
    $post_body = json_encode(array(
    
        "vin" => $vin
    
    ));
    
     
    
    curl_setopt_array($curl, [
    
        CURLOPT_RETURNTRANSFER => true,
    
        CURLOPT_URL => $url,
    
        CURLOPT_POST => true,
    
        CURLOPT_POSTFIELDS => $post_body,
    
        CURLOPT_HTTPHEADER => [
    
            "Authorization: $auth_header",
    
            'Content-Type: application/json',
    
            'Accept: application/json'
    
        ],
    
        CURLOPT_HEADER => true,
    
    ]);
    
     
    
    $response = curl_exec($curl);
    
     
    
    if ($response === false) {
    
        echo 'Error: ', curl_error($curl), '<br>';
    
    } else {
    
        $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
    
        $header = substr($response, 0, $header_size);
    
        $encoded_body = substr($response, $header_size);
    
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    
     
    
        echo 'HTTP Code: ', $http_code, '<br>';
    
        echo 'Header:<br>', $header, '<br>';
    
        echo 'Response Body:<br>', $encoded_body, '<br>';
    
     
    
        if ($http_code == 200) {
    
            $body = json_decode($encoded_body, true);
    
            echo 'Year: ', $body["year"], '<br>';
    
            echo 'Make: ', $body["make"], '<br>';
    
            echo 'Model: ', $body["model"], '<br>';
            
            $make=$body["make"];
            $model = $body["model"]; 
            $year=$body["year"];

            $calibrationTypeId = $body['windshields'][0]['calibrations'][0]['calibrationType']['calibrationTypeId'];
            $calibrationName = $body['windshields'][0]['calibrations'][0]['calibrationType']['name'];

                    
    
            foreach ($body["windshields"] as $windshield) {
    
                 echo 'Windshield: ', $windshield["amNumber"], '<br>';
                 $amnumber=$windshield["amNumber"];
    
            }
            
    
    
        } else {
    
            // todo: Handle failure here
    
            echo 'Failed!';
    
        }
    
    }
    
     
    
    curl_close($curl);






   


	$sql = "INSERT INTO `table_data_car_details`
    (`data_col_vin`,
    `data_col_amnumber`,
    `data_col_cal_id`,
    `data_col_cal_type`,
    `data_col_make`, 
    `data_col_model`, 
    `data_col_year`) 
    
    VALUES 
    ('$vin',
    '$amnumber',
    '$calibrationTypeId',
    '$calibrationName',
    '$make',
    '$model',
    '$year')";

	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("Submitted"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
    
    


    
    $zapierWebhookUrl = 'https://hooks.zapier.com/hooks/catch/1576319/38is8rm/';

  
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['vin'])) {

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

    if (mysqli_query($conn, $sql)) {
        // Retrieve the ID of the inserted row
        $insertedId = mysqli_insert_id($conn);
        
        // Redirect to the next page with the ID as a parameter
        $redirectUrl = 'appointment.php?id=' . urlencode($insertedId);
        header("Location: $redirectUrl");
        exit();
    } else {
        echo json_encode(array("statusCode"=>201));
    }

    
	mysqli_close($conn);

    // Close cURL session
    curl_close($ch);
} else {
    // Handle form not being submitted or missing tracking number
    echo 'Error: Form not submitted or tracking number missing.';
}
   
?>