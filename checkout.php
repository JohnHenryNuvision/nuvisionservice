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
                    <div id="top-wizard">
                       
                    </div>
                    <!-- /top-wizard -->
                    
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">


           

                            <div class="submit step" id="end">
                                <div class="summary text-center">

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
                                                $calibrationName = $row['data_col_cal_type'];
                                                $newPartPrice = $row['part_price'];
                                                if ($calibrationName == "Static") {
                                                    $calibrationPrice = 250;
                                                } elseif ($calibrationName == "Dual: Static + Dynamic") {
                                                    $calibrationPrice = 300;
                                                } elseif ($calibrationName == "Dynamic") {
                                                    $calibrationPrice = 250;
                                                } elseif ($calibrationName == "Static or Dynamic") {
                                                    $calibrationPrice = 250;
                                                } else {
                                                    // Default value if $calibrationName doesn't match any of the specified cases
                                                    $calibrationPrice = 0; // You can change this to another default value if needed
                                                }   
                                                $salestax = round(($newPartPrice + $calibrationPrice) * 0.0837, 2);

                                                $roundedsalestax = ceil($salestax); 

                                                $totalprice = $newPartPrice +  $calibrationPrice + $roundedsalestax ;

                                              
                                                ?>
                                    <div class="wrapper" style = "margin-top: 80px;">
                                    
                                    <h3 >Choose how you Pay<br></h3>

                                    <form method = "post" action = "payment_option.php">
                                        <label class="container_check version_2" style = "text-align: left; font-size: 13px;"> Card Payment/Net Banking
                                                <input type="radio" name="method"  class="time" value="credit" >
                                                <span class="checkmark"></span><img src = "img/authrize.png" style = "width: 80px;   float:right"> 
                                            </label>
                                            <label class="container_check version_2" style = "text-align: left; font-size: 13px;">Pay at time of install

                                                <input type="radio" name="method"  class="time" value="after" >
                                                <span class="checkmark"></span><img src = "img/payment.png" style = "width: 30px;   float:right"> 
                                            </label>
                                            <input type = "text" name = "price" value = "<?php echo $totalprice;?>" readonly style = "display:none;">
                                            <input type = "text" name = "refnum" value = "<?php echo $ref_num;?>" readonly style = "display:none;">
                                          
										
                                        <hr>

                                        
										<table style = "width: 100%; text-align: left; margin-bottom: 20px;">
											<tbody>
											<tr>
												<td style = "width: 40%;">Glass Service Price:</td>
												<td style = "width: 60%; text-align: right; padding: 5px;">$<?= $row['part_price']; ?></td>
											</tr>	
											<tr>
												<td>Callibration:</td>
												<td style = "text-align: right; padding: 5px;">$<?php echo $calibrationPrice;?></td>
											</tr>
                                            <tr>
												<td>Tax:</td>
												<td style = "text-align: right; padding: 5px;">$<?php echo $roundedsalestax?></td>
											</tr>

                                            <?php $newPartPrice + $calibrationPrice;?>

                                            
	
											<tr style = "border-top: 1px solid #ddd" >
												<td><b>Total Price:</b></td>
												<td style = "text-align: right; padding: 5px;"><b>$<?php echo $totalprice ;?></b></td>
											</tr>
											
										
											</tbody>
										</table>

                                     
                                       
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
                                    <div class="text-center">
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /step last-->

                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="submit" name="process" class="submit" id="submit">Check Out</button>
                            <button type="submit" name="backward" class="backward" id="backward">Request a Callback</button>
                        </div>
                        <!-- /bottom-wizard -->
                        </form>
                </div>
                <!-- /Wizard container -->
                <div id="loaderModal" class="modal">
                            <div class="modal-contents">
                                <div class="loader"></div><p>Almost there! Just a moment while we prepare your secure payment page.</p>
                                
                            </div>
            </div>
        </div><!-- /Row -->
    </div><!-- /Form_container -->
</div>
<!-- /container -->

<?php include 'footer.php';?>
<!-- /footer -->

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- /cd-overlay-nav -->
<div class="cd-overlay-content">
    <span></span>
</div>

<script>
document.getElementById("submit").addEventListener("click", function() {
  // Show loading modal
  document.getElementById("loaderModal").style.display = "block";

  // Simulate some delay
  setTimeout(function() {
    // Simulate loading content
    alert("We got your Details!");

    // Hide loading modal after content is loaded
    document.getElementById("loaderModal").style.display = "none";
  }, 50000); // 2 seconds delay for demonstration
});
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