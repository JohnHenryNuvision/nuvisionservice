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
                                                ?>
                                    <div class="wrapper" style = "margin-top:80px;">
                                    <img src="img/transfer.png"  class = "payment-vector"/>
                                    
                                    <h3 style = "color: #1D3A70; font-weight: bold; font">We got you!<br></h3>
									   <p style = "text-align: center; font-size: 16px;">We will contact you in 2 hours for with the details of your Service</p>

                                       <h3 style = "color: #1D3A70; font-weight: bold; margin-top: 50px; background-color: #F9FAFB; margin-left: 80px; margin-right: 80px; padding: 20px 0 20px 0; border-radius: 16px;">$<?= $row['price']; ?>.00<br></h3>
                                      
									  

                                 

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
                            <button type="submit" name="process" class="submit" id="submit">Track Service</button>
                            <button type="submit" name="backward" class="backward" id="backward">Request a Callback</button>
                        </div>
                        <!-- /bottom-wizard -->
                    </form>
                </div>
                <!-- /Wizard container -->
            </div>
        </div><!-- /Row -->
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