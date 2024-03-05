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
                    <form method="post" action = "vfunction.php" id ="myForm">
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">

                        <?php
                                       include 'db.php';
                                       if(isset($_GET['id']))
                                       {
                                        $id = $_GET['id'];
                                        $query = "SELECT * FROM table_data_car_details WHERE id='$id' ";
                                        $query_run = mysqli_query($conn, $query);
                                        if(mysqli_num_rows($query_run) > 0) 
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>


						<div class="step" id = "step1">
                                <h3 class="main_question2">Hurray! We found your vechile details! </h3>
								<p style = "text-align: center; font-size: 16px;">Click Next to move forward</p>
                                <div class="form-group add_top_30">
                                    <label for="make">Make</label>
                                    <input type="text" name="make" id="make" value = "<?= $row['data_col_make']; ?>" class="form-control required" onchange="getVals(this, 'make_field');" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="model">Model</label>
                                    <input type="text" name="model" id="model" value = "<?= $row['data_col_model']; ?>" class="form-control required" onchange="getVals(this, 'model_field');" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="year">Year</label>
                                    <input type="text" name="year" id="year"  value = "<?= $row['data_col_year']; ?>"  class="form-control required" onchange="getVals(this, 'year_field');" readonly>
                                </div>
                                <input type="text" name="vin" id="vin"  value = "<?= $row['data_col_vin']; ?>" style  = "display: none;"  readonly >
                                <input type="text" name="amnumber" id="amnumber"  value = "<?= $row['data_col_amnumber']; ?>" style  = "display: none;"  readonly>
                                <input type="text" name="calibrationTypeId" id="calibrationTypeId"  value = "<?= $row['data_col_cal_id']; ?>" style  = "display: none;"  readonly>
                                <input type="text" name="calibrationName" id="calibrationName"  value = "<?= $row['data_col_cal_type']; ?>" style  = "display: none;"  readonly>
                                <!-- /row-->
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

                            
                            <!-- /step-->
                            <div class="step"  id = "step2">
                                <h3 class="main_question"><i class="arrow_right"></i>Which glass would you like to be Fixed?</h3>
                                <div class="form-group">
                                    <label class="container_radio version_2">Windshield
                                        <input type="radio" name="part"  value="Windshield" class="part" onchange="getVals(this, 'part_field');">
                                        <span class="checkmark"></span> <img src = "img/windshield.png" style = "width: 30px;   float:right"> 
                                    </label>
                                    <label class="container_radio version_2">Door
                                        <input type="radio" name="part" value="Door" class="part" onchange="getVals(this, 'part_field');">
                                        <span class="checkmark"></span> <img src = "img/door.png" style = "width: 30px;   float:right"> 
                                    </label>
									<label class="container_radio version_2">Vent
                                        <input type="radio" name="part" value="Vent" class="part" onchange="getVals(this, 'part_field');">
                                        <span class="checkmark"></span> <img src = "img/q.png" style = "width: 30px;   float:right"> 
                                    </label>
									<label class="container_radio version_2">Quarter
                                        <input type="radio" name="part" value="Quarter" class="part" onchange="getVals(this, 'part_field');">
                                        <span class="checkmark"></span> <img src = "img/vent.png" style = "width: 30px;   float:right"> 
                                    </label>
									<label class="container_radio version_2">Back
                                        <input type="radio" name="part" value="Back" class="part" onchange="getVals(this, 'part_field');">
                                        <span class="checkmark"></span> <img src = "img/back.png" style = "width: 30px;   float:right"> 
                                    </label>
                                </div>
                            </div>
                            <!-- /step-->
							
							  <div class="step"  id = "step3">
                                <h3 class="main_question"><i class="arrow_right"></i>How can we reach you?</h3>
                                <div class="form-group add_top_30" style ="display:none;">
                                    <label for="fnamex">First Name:*</label>
                                    <input type="text" name="fname" id="fname" class="form-control required" value = "-" onchange="getVals(this, 'fname_field');"  required>
                                </div>
								 <div class="form-group">
                                    <label for="lnamex">Name:*</label>
                                    <input type="text" name="lname" id="lname" class="form-control required" onchange="getVals(this, 'lname_field');"  required>
                                </div>
                                <div class="form-group">
                                    <label for="emailx">Email:*</label>
                                    <input type="email" name="email" id="email" class="form-control required" onchange="getVals(this, 'email_field');"  required>
                                </div>
                                <div class="form-group">
                                    <label for="phonex">Phone:*</label>
                                    <input type="text" name="phone" id="phone" class="form-control required" onchange="getVals(this, 'phone_field');"  required>
                                </div>
                                
                                <!-- /row-->
                            </div>
                            <!-- /step-->
							
							 <div class="step"  id = "step4">
                                <h3 class="main_question"><i class="arrow_right"></i>Where is your location? Please enter your Full Address</h3>
                                <div class="form-group add_top_30">
                                    <label for="addressx">Address Line 1:*</label>
                                    <input type="text" name="address" id="address"  class="form-control required" autocomplete="address-line1" onchange="getVals(this, 'address_field');" required>
                                </div>
								 <div class="form-group">
                                    <label for="housex">Address Line 2:</label>
                                    <input type="text" name="house" id="house" class="form-control required"  autocomplete="address-line2" onchange="getVals(this, 'house_field');" required>
                                </div>
								<div class="form-group">
                                    <label for="cityx">City:*</label>
                                    <input type="text" name="city" id="city" class="form-control required" autocomplete="address-level2" onchange="getVals(this, 'city_field');" required>
                                </div>
								 <div class="form-group">
                                    <label for="zipx">Zipcode:*</label>
                                    <input type="text" name="zip" id="zip" class="form-control required" autocomplete="postal-code" onchange="getValue()" onchange="getVals(this, 'zip_field');" required>
                                </div>
                                
                                <!-- /row-->
                            </div>
                            <!-- /step-->



                            <div class="step"  id = "step5">
                                <h3 class="main_question"><i class="arrow_right"></i>Select a preferred date for your service</h3>
								<div class="form-group add_top_30"  id = "date-pick" style = "display:none;">
                                    <label for="name">Date:*</label>
                                    <input type="date" name="date" id="date" class="form-control required" onchange="getVals(this, 'date_field');"  required>
                                </div>
								<div class="form-group add_top_30"  id = "no-service" style = "display:none;">
									<h3 style = "font-size: 15px; text-align:center; color: gray;">We are Currently not Servicing your Area<br></h3>
								</div>
                            </div>

							
                            <!-- /step-->

							<div class="step"  id = "step6">
                                <h3 class="main_question"><i class="arrow_right"></i>Select a preferred Time for your service*</h3>
								
								<div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group" id = "morning" style = "display:none;">
                                            <label class="container_check version_2">8:00 AM - 12:00 PM
                                                <input type="radio" name="time"  class="time" value="8:00 AM - 12:00 PM"  onchange="getVals(this, 'time_field');" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group" id = "noon" style = "display:none;">
                                            <label class="container_check version_2">4:00 PM - 6:00 PM
                                                <input type="radio" name="time"  class="time" value="4:00 PM - 6:00 PM" onchange="getVals(this, 'time_field');">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group" id = "afternoon" style = "display:none;">
                                            <label class="container_check version_2">12:00 PM - 4:00 PM
                                                <input type="radio" name="time"  value="12:00 PM - 4:00 PM" class="time" onchange="getVals(this, 'time_field');">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
									
                                </div>
								<div class="form-group add_top_30"  id = "no-service-time" style = "display:none;">
									<h3 style = "font-size: 15px; text-align:center; color: gray;">We are Currently not Servicing your Area<br></h3>
								</div>
                                <!-- /row -->
								<input type="text" class="form-control mb-3" value = "" style = "display:none;" name="ordernumber" id = "ordernumber" MAXLENGTH=16 SIZE=16 readonly>
                            </div>
                            <!-- /step-->

           

                            <div class="submit step" id="end">
                                <div class="summary text-center">
                                    <div class="wrapper">
                                        <h3>Review your details<br></h3>
                                        <p>We will contact you shorly at the following email address <strong id="email_field"></strong> 

                                        <div class = "summary2">
                                            <p style = "font-size: 12px;">Name:</p>
                                            <p style = "font-size: 16px;"><b><span id="fname_field"></span>&nbsp;<span id="lname_field"></b></p>
                                            <hr>
                                            <p style = "font-size: 12px;">Phone:</p>
                                            <p style = "font-size: 16px;"><b><span id="phone_field"></span></b></p>
                                            <hr>
                                            <p style = "font-size: 12px;">Car Details:</p>
                                            <p style = "font-size: 16px;"><b><?= $row['data_col_make']; ?> <?= $row['data_col_model']; ?> <?= $row['data_col_year']; ?></b></p>
                                            <hr>
                                            <p style = "font-size: 12px;">Address:</p>
                                            <p style = "font-size: 16px;"><b><span id="address_field"></span> <span id="house_field"></span>&nbsp;<span id="house_field"></span>&nbsp;<span id="city_field"></span>&nbsp;<span id="zip_field"></span>&nbsp;<span id="state_field"></span></b></p>
                                            <hr>
                                            <p style = "font-size: 12px;">Glass Type:</p>
                                            <p style = "font-size: 16px;"><b><span id="part_field"></span></b></p>
                                            <hr>
                                            <p style = "font-size: 12px;">Prefered Date:</p>
                                            <p style = "font-size: 16px;"><b><span id="date_field"></span></b></p>
                                            <hr>
                                            <p style = "font-size: 12px;">Prefered Time:</p>
                                            <p style = "font-size: 16px;"><b><span id="time_field"></span></b></p>
                                            <hr>

                                    </div>  


                                    </div>
                                    <div class="text-center">
                                        <div class="form-group terms">
                                            <label >Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a> before Submit
                                               
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /step last-->

                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                        <button type="button" name="forward" class="forward" id="hideButton" >Next</button>
                        <button type="submit" name="process" class="submit" id="submit">Submit</button>
                            <button type="button" name="backward" class="backward">Prev</button>
                        
                        </div>
                        <!-- /bottom-wizard -->

                                                <!-- The Modal -->

<div id="myModal" class="modal">
                            <div class="modal-contents">
                                <div class="loader"></div><p stye = "margin-top:20px;"><br>Finding your Car...</p>
                                
                            </div>
</div>
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





<!-- /cd-overlay-content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
	<script>
		$(document).ready(function(){
		$('#master-dropdown').on('change', function(){
			var demovalue = $('#master-dropdown').val(); 
			var demovalue = demovalue.replace(/\s+/g, '')
			var demovalue = demovalue.toLowerCase();	
			$("div.form-group-hidden").hide();
			$('#' + demovalue + '-dropdown').show();
		});
	});

	$(document).ready(function(){
		$('#master-dropdown').on('change', function(){
			var demovalue = $('#master-dropdown').val(); 
			var demovalue = demovalue.replace(/\s+/g, '')
			var demovalue = demovalue.toLowerCase();	
			$("div.form-group-hidden").hide();
			$('#' + demovalue + '-dropdown').show();
		});
	});

	




function randomNumber(len) {
  var randomNumber;
  var n = '';

  for (var count = 0; count < len; count++) {
    randomNumber = Math.floor(Math.random() * 10);
    n += randomNumber.toString();
  }
  return n;
}

document.getElementById("ordernumber").value = randomNumber(9);


	
</script>

<script>
    function toggleNextButton() {
        var vinValue = document.getElementById('vin').value;
        var nextButton = document.getElementById('hideButton');
        if (vinValue.trim() !== '') {
            nextButton.style.display = 'block';
        } else {
            nextButton.style.display = 'none';
        }
    }
</script>

<script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date').attr('min',today);


		
    </script>




	
	
	<!-- COMMON SCRIPTS -->
	<script src="js/scheduling.js"></script>
	<script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/common_scripts.min.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/common_functions.js"></script>

	<!-- Wizard script without branch -->
	<script src="js/wizard_without_branch2.js"></script>

</body>
</html>