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
                                    <img src="img/confetti.png"  class = "thankyou-vector"/>
                                    
                                    <h3 style = "color: #1D3A70; font-weight: bold; font">Thanks for submitting your details! <br></h3>
									   <p style = "text-align: center; font-size: 16px;">We will contact you in 2 hours for with the details of your Service</p>
                                      
									  

                                      <div class = "summary2">
                                            <p style = "font-size: 12px;">Name:</p>
                                            <p style = "font-size: 16px;"><?= $row['data_col_fname']; ?> <?= $row['data_col_lname']; ?></p>
                                            <hr>
                                            <p style = "font-size: 12px;">Phone:</p>
                                            <p style = "font-size: 16px;"><?= $row['data_col_phone']; ?></p>
                                            <hr>
                                            <p style = "font-size: 12px;">Car Details:</p>
                                            <p style = "font-size: 16px;"><?= $row['data_col_make']; ?> <?= $row['data_col_model']; ?> <?= $row['data_col_year']; ?></p>
                                            <hr>
                                            <p style = "font-size: 12px;">Address:</p>
                                            <p style = "font-size: 16px;"><?= $row['data_col_address']; ?> <?= $row['data_col_house']; ?>  <?= $row['data_col_city']; ?> <?= $row['data_col_zip']; ?></p>
                                            <hr>
                                            <p style = "font-size: 12px;">Glass Type:</p>
                                            <p style = "font-size: 16px;"><?= $row['data_col_part']; ?></p>
                                            <hr>
                                            <p style = "font-size: 12px;">Prefered Date:</p>
                                            <p style = "font-size: 16px;"><?= $row['data_col_date']; ?></p>
                                            <hr>
                                            <p style = "font-size: 12px;">Prefered Time:</p>
                                            <p style = "font-size: 16px;"><?= $row['data_col_time']; ?></p>
                                            <hr>

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
                                    <div class="text-center">
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /step last-->

                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="submit" name="process" class="submit" id="submit">Request a Callback</button>
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
<?php include 'footer.php';?>

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