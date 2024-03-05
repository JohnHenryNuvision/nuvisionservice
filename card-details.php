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
                    <form method="post" action = "authorize_api.php">
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">
                            
                        <?php
                                       include 'db.php';
                                       if(isset($_GET['refnum']))
                                       {
                                        $ref_num = $_GET['refnum'];
                                        $query = "SELECT * FROM table_data_services WHERE data_col_ref_num='$ref_num' ";
                                        $query_run = mysqli_query($conn, $query);
                                        if(mysqli_num_rows($query_run) > 0) 
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>

                                            
                      
                            <!-- /step-->
							
							  <div class="step" style = "margin-top: 80px;">
                              <div class="summary text-center">

                              
                              <h3 style = "text=align:center;"> Card Details<br></h3> </div>
                                <div class="form-group add_top_30">
                                    <label>Card Number</label>
                                    <input type="text" name="card_number" id="card_number" class="form-control required" maxlength="16" required>
                                </div>
								 <div class="form-group">
                                    <label>Name on Card:</label>
                                    <input type="text" name="card_name" id="card_name" class="form-control required" required>
                                </div>
                                <div class="form-group">
                                    <label for="expiry">Expiry:</label> <br>
                                    <input type="text" name="expiry_month" id="expiry_month" maxlength="2" placeholder = "MM" style = "width: 49.2%; border: 1px solid #ddd; height: calc(2.65rem + 2px); border-radius: 0.25rem; text-align: center;" oninput="validateExpiryMonth(this);" required>
                                    <input type="text" name="expiry_year" id="expiry_year" maxlength="4"  placeholder = "YYYY"style = "width: 49.2%;   border: 1px solid #ddd; height: calc(2.65rem + 2px); border-radius: 0.25rem; text-align: center;" required>
                                </div>
                                <div class="form-group">
                                    <label >CVV:</label>
                                    <input type="text" name="cvv" id="cvv" class="form-control required" required>
                                    <input type = "text" name = "price" value = "<?= $row['price']; ?>" readonly style = "display:none;">
                                    <input type = "text" name = "refnum" value = "<?php echo $ref_num;?>" readonly style = "display:none;">
                                    <input type = "text" name = "fname" value = "<?= $row['data_col_fname']; ?>" readonly style = "display:none;">
                                    <input type = "text" name = "lname" value = "<?= $row['data_col_lname']; ?>" readonly style = "display:none;">
                                  
                                    <input type = "text" name = "city" value = "<?= $row['data_col_city']; ?>" readonly style = "display:none;">
                                    <input type = "text" name = "zip" value = "<?= $row['data_col_zip']; ?>" readonly style = "display:none;">
                                    <input type = "text" name = "id" value = "<?= $row['id']; ?>" readonly style = "display:none;">
                                    <input type = "text" name = "refnum" value = "<?php echo $ref_num;?>" readonly style = "display:none;">
                                </div>
                                
                                <div id="bottom-wizard">
                                            <button type="submit" name="process" class="submit" id="submit">Submit</button>
                                            </div>
                                <!-- /row-->
                            </div>
                            <!-- /step-->


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
                        <!-- /middle-wizard -->
                  
                        <!-- /bottom-wizard -->
                    </form>
                </div>
                <!-- /Wizard container -->
            </div>
        </div><!-- /Row -->

        <div id="loaderModal" class="modal">
                            <div class="modal-contents">
                                <div class="loader"></div><p>Processing your payment information... Please wait.</p>
                                
                            </div>
    </div><!-- /Form_container -->
</div>
<!-- /container -->

<footer class="footer_in clearfix">
        <div class="container">
            <p>© 2023 NuVision Auto Glass</p>
            <ul>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#" class="animated_link">Policy and Privacy</a></li>
                <li><a href="#" class="animated_link">FAQ</a></li>
                <li><a href="#" class="animated_link">Contact Us</a></li>
            </ul>
        </div>
</footer>
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
  function validateExpiryMonth(input) {
    // Remove non-numeric characters
    let inputValue = input.value.replace(/\D/g, '');

    // Ensure the value is not greater than 12
    if (inputValue > 12) {
      input.value = inputValue.slice(0, 1); // Keep only the first digit
    }
  }
</script>






<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Get the cvv input element
    var cvvInput = document.getElementById("cvv");

    // Add an input event listener to handle the formatting and limit the length
    cvvInput.addEventListener("input", function() {
      // Remove non-numeric characters from the input
      var inputValue = cvvInput.value.replace(/\D/g, "");

      // Limit the input value to 3 characters
      inputValue = inputValue.substring(0, 3);

      // Update the input value with the formatted value
      cvvInput.value = inputValue;
    });
  });

</script>
	
	
	<!-- COMMON SCRIPTS -->
	<script src="js/scheduling.js"></script>
	<script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/common_scripts.min.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/common_functions.js"></script>



</body>
</html>