<?php

// Retrieve the raw POST data
$postData = file_get_contents("php://input");

// Decode the JSON data (assuming it's JSON)
$data = json_decode($postData, true);

// Check if decoding was successful
if ($data !== null) {
    // Process the data as needed
    // For example, you can log it, save it to a database, or perform any other actions
    // Replace this with your actual processing logic
    writeToLog($data);

    // Send a response if needed (optional)
    echo "Webhook data received successfully!";
} else {
    // Handle decoding error
    http_response_code(400); // Bad Request
    echo "Failed to decode JSON data.";
}

// Function to log data (customize this based on your needs)
function writeToLog($data) {
    $logFile = 'webhook_log.txt';
    $logMessage = date('Y-m-d H:i:s') . "\n" . print_r($data, true) . "\n\n";
    file_put_contents($logFile, $logMessage, FILE_APPEND);
}

?>