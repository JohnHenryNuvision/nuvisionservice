<?php include 'header.php'; ?>

<body class="layout_2">

<header>
        <div class="container-fluid">
            <a href="index.php"><img src="img/logo_white.png" alt="" width="178" height="45" class="d-none d-md-inline"><img src="img/logo_white_mobile.png" alt="" width="62" height="45" class="d-inline d-md-none"></a>
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
                   
				   <!-- /top-wizard -->
						   <div >
							   <div class="summary text-center" style = "margin-top: 30px;">
								   <div class="wrapper">
									   <h2>Your order number is: <strong># <?php echo $_GET['ref_num'];?></strong></h2>
									   <p>Thank you for creating an appointment with NuVision! You will receive an email confirmation soon.</p>
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
                                                 <div class="summary text-center" style = "background-color: #F26521; color: white;">
                                        <button class="w3-bar-item w3-button" onclick="openDetails('Car')">Car Details</button>
                                        <button class="w3-bar-item w3-button" onclick="openDetails('Contact')">Contact Info</button>
                                        <button class="w3-bar-item w3-button" onclick="openDetails('Appointment')">Appointment</button>
                                        </div>

                                        <div id="Car" class="w3-container city" style = "margin-top: 20px;">
                                        <table style = "width: 100%; text-align: left; margin-bottom: 20px;">
											<tbody>
											<tr>
												<td style = "width: 40%; font-weight: bold;" >Car Make:</td>
												<td style = "width: 60%;"><span><?= $row['data_col_make']; ?></span></span></td>
											</tr>	
											<tr>
												<td style = "font-weight: bold;">Car Model:</td>
												<td><span id="phone_field"><?= $row['data_col_model']; ?></span></td>
											</tr>
	
											<tr>
												<td style = "font-weight: bold;">Car Year:</td>
												<td><span id="address_field"><?= $row['data_col_year']; ?></span> </td>
											</tr>
                                            <tr>
												<td style = "font-weight: bold;">VIN:</td>
												<td><span id="address_field"><?= $row['data_col_vin']; ?></span> </td>
											</tr>
											
											</tbody>
										</table>
                                        </div>
                                        <div id="Contact" class="w3-container city" style="display:none; margin-top: 20px;" >
                                        <table style = "width: 100%; text-align: left; margin-bottom: 20px;">
											<tbody>
											<tr>
												<td style = "width: 40%; font-weight: bold;">Name:</td>
												<td style = "width: 60%;"><span><?= $row['data_col_fname']; ?> <?= $row['data_col_lname']; ?></span></span></td>
											</tr>	
											<tr>
												<td style = "font-weight: bold;">Email:</td>
												<td><span><?= $row['data_col_email']; ?></span></td>
											</tr>
	
											<tr>
												<td style = "font-weight: bold;">Contact Number:</td>
												<td><span><?= $row['data_col_phone']; ?></span></td>
											</tr>
											<tr>
												<td style = "font-weight: bold;">Address:</td>
												<td><span><?= $row['data_col_address']; ?> <?= $row['data_col_house']; ?> <?= $row['data_col_city']; ?> <?= $row['data_col_state']; ?> <?= $row['data_col_zip']; ?></span></td>
											</tr>											
											</tbody>
										</table>
                                        </div>

                                        <div id="Appointment" class="w3-container city" style="display:none; margin-top: 20px;" >
                                        
                                        <table style = "width: 100%; text-align: left; margin-bottom: 20px;">
											<tbody>
											<tr>
												<td style = "width: 40%; font-weight: bold;">Date:</td>
												<td style = "width: 60%;"><?= $row['data_col_date']; ?> </td>
											</tr>	
											<tr>
												<td style = "font-weight: bold;">Time:</td>
												<td><?= $row['data_col_time']; ?> </td>
											</tr>
	
											<tr>
												<td style = "font-weight: bold;">Service Needed:</td>
												<td><?= $row['data_col_part']; ?> </td>
											</tr>
                                            <tr>
												<td style = "font-weight: bold;">Insurance</td>
												<td><?= $row['data_col_insurance']; ?> (<?= $row['data_col_insurance_num']; ?>) </td>
											</tr>                                           
                                            <tr>
												<td style = "font-weight: bold;">Rebates:</td>
												<td></td>
											</tr>  	
                                            <tr>
												<td style = "font-weight: bold;">Status:</td>
												<td><?= $row['data_col_status']; ?> </td>
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
                                      
                                       

                                       
								   </div>
                                  

 
							   </div>
						   </div>
						   <!-- /step last-->
						   <div id="bottom-wizard">
						  <a href = "track.php"> <button class="submit">Contact Us</button> </a>
					   </div>

					   </div>
					  
			   </div>
                <!-- /Wizard container -->
            </div>
        </div><!-- /Row -->
    </div><!-- /Form_container -->
</div>
<!-- /container -->

<?php include 'footer.php'; ?>

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- /cd-overlay-nav -->
<div class="cd-overlay-content">
    <span></span>
</div>

<script>
function openDetails(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
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