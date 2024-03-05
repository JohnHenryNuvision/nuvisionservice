<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = file_get_contents('php://input');
    $decoded_data = json_decode($data, true);

    // Now you can process the received data
    // For example, you can save it to a file
    file_put_contents('received_data.txt', print_r($decoded_data, true));

    // Or you can send it somewhere else, like an email
    //mail('your-email@example.com', 'Data Received from Zapier Webhook', print_r($decoded_data, true));

    // Finally, send a response back to Zapier to acknowledge receipt of the data
    http_response_code(200);
    echo 'Data received';
} else {
    http_response_code(405);
    echo 'Method not allowed';
}