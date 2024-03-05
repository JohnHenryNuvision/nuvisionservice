
<?php
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
$stagingEndpoint = "https://apitest.authorize.net/xml/v1/request.api";
$price=$_POST['price'];
$name = "9PY4h56Hyd";
$transactionkey = "83359qMvAH5zAp4E";

$card_number = $_POST['card_number'];
$card_name = $_POST['card_name'];
$expiry_month = $_POST['expiry_month'];
$expiry_year = $_POST['expiry_year'];
$cvv = $_POST['cvv'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$id = $_POST['id'];
$inv_number = 'INV-'. $id ;
$refnum=$_POST['refnum'];

echo $fname . "<br>";
echo $lname . "<br>";
echo $city . "<br>";
echo $zip . "<br>";
echo $id . "<br>";
echo $inv_number . "<br>";

$expiry =  $expiry_year . '-' . $expiry_month;


// Create SOAP XML request
$xmlRequest = 

'<createTransactionRequest xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd">
    <merchantAuthentication>
        <name>'. $name .'</name>
        <transactionKey>'. $transactionkey .'</transactionKey>
    </merchantAuthentication>
    <refId>123456</refId>
    <transactionRequest>
        <transactionType>authCaptureTransaction</transactionType>
        <amount>'. $price .'</amount>
        <payment>
            <creditCard>
                <cardNumber>'. $card_number .'</cardNumber>
                <expirationDate>'. $expiry .'</expirationDate>
                <cardCode>'. $cvv .'</cardCode>
            </creditCard>
        </payment>
        <order>
            <invoiceNumber>'. $inv_number .'</invoiceNumber>
            <description>Product Description</description>
        </order>
        <lineItems>
            <lineItem>
                <itemId>1</itemId>
                <name>Auto Glass</name>
                <description></description>
                <quantity>1</quantity>
                <unitPrice>0</unitPrice>
            </lineItem>
        </lineItems>
        <tax>
            <amount>0</amount>
            <name>tax</name>
            <description>tax</description>
        </tax>
        <duty>
            <amount>0</amount>
            <name>duty</name>
            <description>duty</description>
        </duty>
        <shipping>
            <amount>0</amount>
            <name>test</name>
            <description>test</description>
        </shipping>
        <poNumber>456654</poNumber>
        <customer>
            <id>99999456654</id>
        </customer>
        <billTo>
            <firstName>'. $fname .'</firstName>
            <lastName>'. $lname .'</lastName>
            <company>Souveniropolis</company>
            <address>14 Main Street</address>
            <city>Pecan Springs</city>
            <state>TX</state>
            <zip>44628</zip>
            <country>US</country>
        </billTo>
        <shipTo>
            <firstName>'. $fname .'</firstName>
            <lastName>'. $lname .'</lastName>
            <company>Souveniropolis</company>
            <address>14 Main Street</address>
            <city>Pecan Springs</city>
            <state>TX</state>
            <zip>44628</zip>
            <country>US</country>
        </shipTo>
        <customerIP>192.168.1.1</customerIP>
        <userFields>
            <userField>
                <name>MerchantDefinedFieldName1</name>
                <value>MerchantDefinedFieldValue1</value>
            </userField>
            <userField>
                <name>favorite_color</name>
                <value>blue</value>
            </userField>
        </userFields>
        <processingOptions>
            <isSubsequentAuth>true</isSubsequentAuth>
        </processingOptions>
        <subsequentAuthInformation>
            <originalNetworkTransId>123456789NNNH</originalNetworkTransId>
            <originalAuthAmount>45.00</originalAuthAmount>
            <reason>resubmission</reason>
        </subsequentAuthInformation>
        <authorizationIndicatorType>
            <authorizationIndicator>final</authorizationIndicator>
        </authorizationIndicatorType>
    </transactionRequest>
</createTransactionRequest>';

// Set the SOAP headers for authentication
$headers = [
    'Content-Type: text/xml',
];

// Choose the appropriate endpoint (production or staging)
$endpoint = $stagingEndpoint; // Change to $productionEndpoint for production

// Initialize cURL session
$ch = curl_init($endpoint);

// Set cURL options
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlRequest);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute cURL session
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Delay for 5 seconds before redirecting
sleep(5);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    // Check if the API response indicates success (modify this condition based on your API response structure)
    if (strpos($response, '<resultCode>Ok</resultCode>') !== false) {
        // Redirect to success.php
        header("Location: success.php?refnum=$refnum");
        exit; // Ensure that no other output is sent
    } else {
        // Handle other cases when the API response is not successful
        echo 'API request was not successful.';
    }
}

// Close cURL session
curl_close($ch);

// Output the API response for debugging purposes
echo $response;

?>

