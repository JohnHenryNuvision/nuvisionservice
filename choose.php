<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';?>

<body class="layout_2">


<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	

	<div class="container-fluid">
    <div id="form_container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
			<div id="wizard_container">
                   
				   <!-- /top-wizard -->
						   <div >
							   <div class="summary text-center" style = "margin-top: 30px;">
								  

                                   <?php
                                       include 'db.php';
                                       if(isset($_GET['ref_num']))
                                       {
                                        $ref_num = $_GET['ref_num'];
                                        $query = "SELECT * FROM table_data_services WHERE data_col_ref_num='$ref_num' ";
                                        $query_run = mysqli_query($conn, $query);
                                        if(mysqli_num_rows($query_run) > 0) 
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                  <div style = "display:none;">
                                      <?php
                                      
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                                        $stagingEndpoint = "https://stgposconnect.pgwautoglass.com/PGWPosConnect.asmx";

                                        // PGW POS Connect credentials
                                        $userId = "POS1026";
                                        $password = "j__cPf_AY3Ag@1";


                                
                                        $name = 'NUVISION';

                                        $amnumber = $row['data_col_amnumber'];
                                        $prefix = substr($amnumber, 0, 2);
                                        $partnumber = substr($amnumber, 2, 5);
                                        $color = substr($amnumber, 7, 2);
                                        $hardwareind = substr($amnumber, 9, 1);
                                        $premiumind = substr($amnumber, 10, 1);


                                        // Create SOAP XML request
                                        $xmlRequest = 

                                        '<?xml version="1.0" encoding="utf-8"?>
                                        <soapenv:Envelope
                                            xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"
                                            xmlns:pgw="http://pgwglass.com/">
                                            <soapenv:Header/>
                                            <soapenv:Body>
                                                <pgw:SubmitRequest>
                                                    <!--Optional:-->
                                                    <pgw:xml>
                                                        <![CDATA[<Order>
                                            <OrderHeader>
                                                <System>STG</System>
                                                <Key>656a15f661010</Key>
                                                <ShipToId>80251</ShipToId>
                                                <ShipToName>'. $name .'</ShipToName>
                                                <TransactionDate></TransactionDate>
                                                <TransactionTime>12:20:54</TransactionTime>
                                                <PurchaseOrder>TEST</PurchaseOrder>
                                                <Comments/>
                                                <OrderType>INQUIRY</OrderType>
                                                <ShipToCompany>Glass America Binghamton</ShipToCompany>
                                                <ShipToAddress>3200 WATSON BLVD</ShipToAddress>
                                                <ShipToCity>ENDWELL</ShipToCity>
                                                <ShipToState>NY</ShipToState>
                                                <ShipToZip>13760</ShipToZip>
                                                <VersionNumber/>
                                            </OrderHeader>
                                            <OrderDetails>
                                                <Item>
                                                    <LineNo>0</LineNo>
                                                    <Request>
                                                        <Type>GL</Type>
                                                        <Source>NAGS</Source>
                                                        <ReqPartNumberPrefix>'. $prefix .'</ReqPartNumberPrefix>
                                                        <ReqPartNumber>'. $partnumber .'</ReqPartNumber>
                                                        <ReqPartColor>'. $color .'</ReqPartColor>
                                                        <ReqPartHardwareInd>'. $hardwareind .'</ReqPartHardwareInd>
                                                        <ReqPartPremiumInd>'. $premiumind .'</ReqPartPremiumInd>
                                                        <ReqTrademark/>
                                                        <ReqQuantity>1</ReqQuantity>
                                                        <PurchaseOrderLineNumber>0</PurchaseOrderLineNumber>
                                                        <ReqDeliveryMethod/>
                                                        <ReqDeliveryDate/>
                                                        <ReqDeliveryTime/>
                                                        <ServLocationCode/>
                                                        <ServLocationDescription/>
                                                        <LineItemComment/>
                                                    </Request>
                                                </Item>
                                            </OrderDetails>
                                            <Filename/>
                                            <ReturnCode>0</ReturnCode>
                                            <ReturnText/>
                                        </Order>]]>
                                                    </pgw:xml>
                                                </pgw:SubmitRequest>
                                            </soapenv:Body>
                                        </soapenv:Envelope>';

                                        // Set the SOAP headers for authentication
                                        $headers = [
                                            'Content-Type: text/xml',
                                            'Authorization: Basic ' . base64_encode("$userId:$password"),
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

                                      // Convert Pretty data from Response to raw text
                                        // Convert Pretty data from Response to raw text
                                        $rawTextResponse = strip_tags($response);

                                        // Display the raw text
                                        echo '<div id="rawText">' . $rawTextResponse . '</div>';

                         

                                      
                                      ?>       
                                        </div>   

                                    <div class="wrapper">
                                    <div class="submit step" id="end">
                                    <form method="post" action = "pricing.php">  
                                   
									   <h2 class="main_question2">We've got your <?= $row['data_col_make']; ?> <?= $row['data_col_model']; ?> <?= $row['data_col_year']; ?> covered!<br></h2>
									   <p style = "text-align: center; font-size: 16px;">Now choose your payment and <br>service options*.  </p>
                                       <div class="form-group" style = "display: block; width: 350px; margin-right: auto; margin-left: auto;"> 
									   <label class="container_check version_2" style = "text-align: left;">Pay via Cash
                                                <input type="radio" name="method"  class="time" value="cash" >
                                                <span class="checkmark"></span><img src = "img/windshield.png" style = "width: 30px;   float:right"> 
                                            </label>
                                    
                                            <label class="container_check version_2" style = "text-align: left;">Pay via Insurance
                                                <input type="radio" name="method"  class="time" value="ins" >
                                                <span class="checkmark"></span><img src = "img/windshield.png" style = "width: 30px;   float:right"> 
                                            </label>
                                            </div> 
                                            <input type="text" name="cash"  class="time" value="" style = "display:none;">
                                            <input type="text" name="ref_num" class="form-control required" value = "<?php echo $ref_num;?>" style = "display:none;">
                                            <div id="bottom-wizard">
                                            <button type="submit" name="process" class="submit" id="submit">Proceed to Checkout</button>
                                            </div>
                                            

                                    </form>  
                                     
								   </div>
                                   </div>
                                              

                                        <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                       }
                                       ?>
                                      
								  
							   </div>
						   </div>
						   <!-- /step last-->
						 
                    

					   </div>
					  
			   </div>
                <!-- /Wizard container -->
            </div>
        </div><!-- /Row -->
    </div><!-- /Form_container -->
</div>
<!-- /container -->

<?php include 'footer.php';?>

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- /cd-overlay-nav -->
<div class="cd-overlay-content">
    <span></span>
</div>



<script>
    function validateForm() {
        var methodSelected = document.querySelector('input[name="method"]:checked');
        if (!methodSelected) {
            alert("Please select a payment method.");
            return false;
        }
        return true;
    }
</script>

<script>
  // Function to open the modal
  function openModal() {
    // Check if the field is filled up (you should replace this with your validation logic)
    var fieldValue = document.getElementById("vin").value;
    if (fieldValue.trim() !== '') {
      // If field is filled, display the modal
      document.getElementById("myModal").style.display = "block";
      // Here you can perform any additional actions before submitting the form or doing other tasks
      // For now, let's just simulate some processing time
      setTimeout(closeModal, 5000); // Close modal after 3 seconds (simulating some process completion)
    } else {
      // If field is empty, show an alert or handle validation error in your preferred way
     
    }
  }

  // Function to close the modal
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }
</script>

<script>
  // Get the value of <PriceBuyer>
  var rawText = document.getElementById('rawText').textContent;
  var parser = new DOMParser();
  var xmlDoc = parser.parseFromString(rawText, 'text/xml');
  var priceBuyerValue = xmlDoc.querySelector('PriceBuyer').textContent;

  var cashInput = document.querySelector('input[name="cash"]');
  cashInput.value = priceBuyerValue;

  // Display the extracted value in a <p> element
  var priceBuyerElement = document.getElementById('priceBuyer');
  priceBuyerElement.textContent =  '$'+ priceBuyerValue;
</script>


	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/common_scripts.min.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/common_functions.js"></script>

	<!-- Wizard script without branch -->
	<script src="js/wizard_without_branch2.js"></script>
	

</body>
</html>