<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Magnifica Questionnaire Form Wizard includes Corona Virus Covid-19 questionnaire">
    <meta name="author" content="Ansonika">
    <title>NuVision Booking</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
	
	<!-- MODERNIZR MENU -->
	<script src="js/modernizr.js"></script>
	
	<script
id="search-js"
defer
src="https://api.mapbox.com/search-js/v1.0.0-beta.17/web.js"
>
</script>
<script>        
const script = document.getElementById('search-js');
script.onload = function() {
mapboxsearch.autofill({
accessToken: 'pk.eyJ1Ijoiam9obmgxNSIsImEiOiJjbGpjaDJhbnIwYnlyM2hzY3Vvbzc4NnB0In0.YBsllU-skqS6LI5Xnfyt2A'
});
};
</script>
	<style>
		.form-group-hidden {
			display:none;
			margin-bottom:15px;
		}

          /* CSS to style the loading icon modal */
  .modal {
    display: none; /* Initially hidden */
    position: fixed;
    z-index: 9999; /* Ensure it appears on top */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5); /* Semi-transparent black */
  }

  .modal-contents {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    background-color: white;
    padding: 20px;
    border-radius: 20px;
   
  }

  .loader {
    border: 4px solid #f3f3f3; /* Light grey */
    border-top: 4px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 30px;
    height: 30px;
    animation: spin 1s linear infinite;
    display: block;
    margin-left: auto;
    margin-right: auto;
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }

	</style>
		


</head>

<body class="layout_2">
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<header>
        <div class="container-fluid">
            <a href="index.html"><img src="img/logo_white.png" alt="" width="178" height="45" class="d-none d-md-inline"><img src="img/logo_white_mobile.png" alt="" width="62" height="45" class="d-inline d-md-none"></a>
            <h1>Schedule Your Appointment</h1>
            <div class="top_elements">
                <a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
                <!-- /menu button -->
                <nav>
                    <ul class="cd-primary-nav">
						<li><a href="track.php" class="animated_link">Track Your Service</a></li>
                        <li><a href="https://www.nuvisionautoglass.com/" class="animated_link">Go to our Website</a></li>
                        <li><a href="#" class="animated_link">Contact Us</a></li>
                        <li><a href="#" class="animated_link">Frequently Ask Questions</a></li>
                    </ul>
                </nav>
                <!-- /menu -->
            </div>
            <!-- /top_elements -->
        </div>
        <!-- /container -->
    </header>
    <!-- /Header -->

	<div class="container-fluid">
    <div id="form_container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div id="wizard_container">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                    </div>
                    <!-- /top-wizard -->
                    <form method="post" action = "vfunction.php">
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">


						<div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>What kind of car is it?</h3>
								<p>Find your vehicle by entering the year, make, model and style or you can enter the vehicle identification number (VIN).</p>
                                <div class="form-group">
                                <label >VIN</label>
                                    <input type="text" name="vin" id="vin" class="form-control required" onchange="getVals(this, 'vin_field');">
                                  
                                </div>
                             
                                
                                <!-- /row-->
                            </div>

                            
                            <!-- /step-->


							
						
							
							

                            <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Which glass would you like to be repaired?</h3>
                                <div class="form-group">
                                    <label class="container_radio version_2">Windshield
                                        <input type="radio" name="part"  value="Windshield" class="part" onchange="getVals(this, 'part_field');">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Door
                                        <input type="radio" name="part" value="Door" class="part" onchange="getVals(this, 'part_field');">
                                        <span class="checkmark"></span>
                                    </label>
									<label class="container_radio version_2">Vent
                                        <input type="radio" name="part" value="Vent" class="part" onchange="getVals(this, 'part_field');">
                                        <span class="checkmark"></span>
                                    </label>
									<label class="container_radio version_2">Quarter
                                        <input type="radio" name="part" value="Quarter" class="part" onchange="getVals(this, 'part_field');">
                                        <span class="checkmark"></span>
                                    </label>
									<label class="container_radio version_2">Back
                                        <input type="radio" name="part" value="Back" class="part" onchange="getVals(this, 'part_field');">
                                        <span class="checkmark"></span>
                                    </label>
									<label class="container_radio version_2">Sunroof
                                        <input type="radio" name="part" value="Sunroof" class="part" onchange="getVals(this, 'part_field');">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- /step-->
							
							  <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>How can we reach you?</h3>
                                <div class="form-group add_top_30">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="fname" id="fname" class="form-control required" onchange="getVals(this, 'fname_field');">
                                </div>
								 <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" id="lname" class="form-control required" onchange="getVals(this, 'lname_field');">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control required" onchange="getVals(this, 'email_field');">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control required" onchange="getVals(this, 'phone_field');">
                                </div>
                                
                                <!-- /row-->
                            </div>
                            <!-- /step-->
							
							 <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Where is your location? Please enter your Full Address</h3>
                                <div class="form-group add_top_30">
                                    <label for="address">Address:</label>
                                    <input type="text" name="address" id="address"  class="form-control required" autocomplete="address-line1" onchange="getVals(this, 'address_field');">
                                </div>
								 <div class="form-group">
                                    <label for="house">House number:</label>
                                    <input type="text" name="house" id="house" class="form-control required"  autocomplete="address-line2" onchange="getVals(this, 'house_field');">
                                </div>
								<div class="form-group">
                                    <label for="city">City:</label>
                                    <input type="text" name="city" id="city" class="form-control required" autocomplete="address-level2" onchange="getVals(this, 'city_field');">
                                </div>
								 <div class="form-group">
                                    <label for="zip">Zipcode:</label>
                                    <input type="text" name="zip" id="zip" class="form-control required" autocomplete="postal-code" onchange="getValue()" onchange="getVals(this, 'zip_field');">
                                </div>
                                
                                <!-- /row-->
                            </div>
                            <!-- /step-->



                            <div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Select a preferred date for your service</h3>
								<div class="form-group add_top_30"  id = "date-pick" style = "display:none;">
                                    <label for="name">Date:</label>
                                    <input type="date" name="date" id="date" class="form-control required" onchange="getVals(this, 'date_field');">
                                </div>
								<div class="form-group add_top_30"  id = "no-service" style = "display:none;">
									<h3 style = "font-size: 15px; text-align:center; color: gray;">We are Currently not Servicing your Area<br></h3>
								</div>
                            </div>

							
                            <!-- /step-->

							<div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>Select a preferred Time for your service</h3>
								
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
                                        <h3>Please review your details<br></h3>
                                        <p>We will contact you shorly at the following email address <strong id="email_field"></strong> 
										<table style = "width: 100%; text-align: left; margin-bottom: 20px;">
											<tbody>
											<tr>
												<td style = "width: 30%;">Name:</td>
												<td style = "width: 70%;"><span id="fname_field"></span>&nbsp;<span id="lname_field"></span></td>
											</tr>	
											<tr>
												<td>Phone:</td>
												<td><span id="phone_field"></span></td>
											</tr>
	
											<tr>
												<td>Address:</td>
												<td><span id="address_field"></span> <span id="house_field"></span>&nbsp;<span id="house_field"></span>&nbsp;<span id="city_field"></span>&nbsp;<span id="zip_field"></span>&nbsp;<span id="state_field"></span></td>
											</tr>
											<tr>
												<td>Glass Type:</td>
												<td><span id="part_field"></span></td>
											</tr>
											<tr>
												<td>Prefered Date:</td>
												<td><span id="date_field"></span></td>
											</tr>
											<tr>
												<td>Prefered Time:</td>
												<td><span id="time_field"></span></td>
											</tr>
										
											</tbody>
										</table>
                                    </div>
                                    <div class="text-center">
                                        <div class="form-group terms">
                                            <label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a> before Submit
                                                <input type="checkbox" name="terms" value="Yes" class="required">
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
                            <button type="button" name="backward" class="backward">Prev</button>
                            <button type="button" name="forward" class="forward">Next</button>
                            <button type="submit" name="process" class="submit" id="submit">Submit</button>

                        </div>
                        <!-- /bottom-wizard -->
                    </form>
                </div>
                <!-- /Wizard container -->
            </div>
        </div><!-- /Row -->
    </div><!-- /Form_container -->
   
<div id="loaderModal" class="modal">
                            <div class="modal-contents">
                                <div class="loader"></div><p>Getting your Car Details...</p>
                                
                            </div>
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