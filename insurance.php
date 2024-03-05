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
                        <div id="progressbar"></div>
                    </div>

             
                    <!-- /top-wizard -->
                    <form method="post" action = "f_insurance.php">
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
							
							  <div class="step" style = "margin-top: 50px;">

                              
                                <h3 class="main_question"><i class="arrow_right"></i>Please Enter your Insurance Details</h3>
                             
                                <div class="form-group add_top_30">
                                    <label for="name">Insurance Provider</label>
                                    <select  id="insurance" name="insurance" required="" class="form-control required" onchange="getVals(this, 'insurance_field');">
										<option value="" selected="selected">Choose One</option>
									   <option value="GEICO">GEICO</option>
									   <option value="PROGRESSIVE">PROGRESSIVE</option>
									   <option value="STATE FARM">STATE FARM</option>
									   <option value="AAA">AAA</option>
									   <option value="AARP">AARP</option>
									   <option value="ACCEPTANCE">ACCEPTANCE</option>
									   <option value="ACUITY">ACUITY</option>
									   <option value="ALLIANCE">ALLIANCE</option>
									   <option value="ALLSTATE">ALLSTATE</option>
									   <option value="ALPA CASUALTY">ALPA CASUALTY</option>
									   <option value="AMERICAN ACCESS CAS CO.">AMERICAN ACCESS CAS CO.</option>
									   <option value="AMERICA NATIONAL">AMERICA NATIONAL</option>
									   <option value="AMERIPRISE">AMERIPRISE</option>
									   <option value="AMERICAN FAMILY">AMERICAN FAMILY</option>
									   <option value="AMICA INSURANCE">AMICA INSURANCE</option>
									   <option value="AM SHIELD">AM SHIELD</option>
									   <option value="ANCHOR GENERAL">ANCHOR GENERAL</option>
									   <option value="ASSURANCE AMERICA">ASSURANCE AMERICA</option>
									   <option value="AUTO OWNERS">AUTO OWNERS</option>
									   <option value="BADGER MUTUAL">BADGER MUTUAL</option>
									   <option value="BRISTOL">BRISTOL</option>
									   <option value="CALIFORNIA CASUALTY">CALIFORNIA CASUALTY</option>
									   <option value="CASUALTY COMPANY">CASUALTY COMPANY</option>
									   <option value="CENTRAL INSURANCE">CENTRAL INSURANCE</option>
									   <option value="CHUBB">CHUBB</option>
									   <option value="CINCINNATI">CINCINNATI</option>
									   <option value="CLEAR BLUE">CLEAR BLUE</option>
									   <option value="COAST NATIONAL">COAST NATIONAL</option>
									   <option value="COMMON WEALTH">COMMON WEALTH</option>
									   <option value="COUNTRY COMPANIES">COUNTRY COMPANIES</option>
									   <option value="COUNTRY FINANCIAL">COUNTRY FINANCIAL</option>
									   <option value="CSE">CSE</option>
									   <option value="DAIRYLAND INSURANCE">DAIRYLAND INSURANCE</option>
									   <option value="DIRECT">DIRECT</option>
									   <option value="DIRECT AUTO">DIRECT AUTO</option>
									   <option value="DIRECT GENERAL">DIRECT GENERAL</option>
									   <option value="ELECTRIC">ELECTRIC</option>
									   <option value="ERIE">ERIE</option>
									   <option value="ESURANCE">ESURANCE</option>
									   <option value="EMC">EMC</option>
									   <option value="ENCOMPASS">ENCOMPASS</option>
									   <option value="ENUMCLAW">ENUMCLAW</option>
									   <option value="EQUITY">EQUITY</option>
									   <option value="FAIR">FAIR</option>
									   <option value="FARMERS">FARMERS</option>
									   <option value="FARM BUREAU">FARM BUREAU</option>
									   <option value="FIRST AMERICAN">FIRST AMERICAN</option>
									   <option value="FOREMOST (BRISTOL WEST)">FOREMOST (BRISTOL WEST)</option>
									   <option value="FREEDOM NATIONAL (ACCC INS)">FREEDOM NATIONAL (ACCC INS)</option>
									   <option value="FREEWAY">FREEWAY</option>
									   <option value="GAINSCO">GAINSCO</option>
									   <option value="GENERAL">GENERAL</option>
									   <option value="GRENADA">GRENADA</option>
									   <option value="HALLMARK">HALLMARK</option>
									   <option value="HARTFORD">HARTFORD</option>
									   <option value="HORACE MANN INSURANCE">HORACE MANN INSURANCE</option>
									   <option value="INFINITY">INFINITY</option>
									   <option value="KEMPER">KEMPER</option>
									   <option value="LEGACY">LEGACY</option>
									   <option value="LIBERTY MUTUAL">LIBERTY MUTUAL</option>
									   <option value="MAPFRE">MAPFRE</option>
									   <option value="MENDOTA">MENDOTA</option>
									   <option value="MERCURY">MERCURY</option>
									   <option value="METLIFE">METLIFE</option>
									   <option value="METRO MILE">METRO MILE</option>
									   <option value="METROPOLITAN CASUALTY">METROPOLITAN CASUALTY</option>
									   <option value="MUTUAL OF ENUMCLAW">MUTUAL OF ENUMCLAW</option>
									   <option value="NATIONAL GENERAL">NATIONAL GENERAL</option>
									   <option value="NATIONWIDE">NATIONWIDE</option>
									   <option value="OASIS">OASIS</option>
									   <option value="OCEAN HARBOR">OCEAN HARBOR</option>
									   <option value="OHIO SECURITY INSURANCE">OHIO SECURITY INSURANCE</option>
									   <option value="OWNERS INSURANCE">OWNERS INSURANCE</option>
									   <option value="PEARL HOLDING GROUP">PEARL HOLDING GROUP</option>
									   <option value="PEKIN">PEKIN</option>
									   <option value="PHILYDELPHIA INSURANCE">PHILYDELPHIA INSURANCE</option>
									   <option value="PRO GENERAL">PRO GENERAL</option>
									   <option value="PRONTO">PRONTO</option>
									   <option value="ROOT (CRAWFORD">ROOT (CRAWFORD</option>
									   <option value="SAFEWAY)">SAFEWAY)</option>
									   <option value="SAFE-CO">SAFE-CO</option>
									   <option value="SAFE AUTO">SAFE AUTO</option>
									   <option value="SECURA">SECURA</option>
									   <option value="SOUTHERN OWNERS">SOUTHERN OWNERS</option>
									   <option value="STATE AUTO MUTUAL">STATE AUTO MUTUAL</option>
									   <option value="STILLWATER">STILLWATER</option>
									   <option value="THE GENERAL">THE GENERAL</option>
									   <option value="TRAVELERS">TRAVELERS</option>
									   <option value="UNITED AUTO INSURANCE">UNITED AUTO INSURANCE</option>
									   <option value="UNITED HERITAGE PROPERTY AND CASUALTY CO.">UNITED HERITAGE PROPERTY AND CASUALTY CO.</option>
									   <option value="UNIVISTA">UNIVISTA</option>
									   <option value="USAA">USAA</option>
									   <option value="WESTERN GENERAL">WESTERN GENERAL</option>
									   <option value="WINDHAVEN">WINDHAVEN</option>
									   <option value="OTHER (NOT LISTED)">OTHER (NOT LISTED)</option>
									</select>
                                </div>
                               <div class="form-group">
                                    <label >Claim ID Number</label>
                                    <input type="text" name="insurance_num" id="insurance_num" class="form-control required" onchange="getVals(this, 'insurance_num_field');">
									<input type="text" name="ref_num" class="form-control required" value = "<?php echo $ref_num;?>" style = "display:none;">
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