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
                    <form method="post" action = "getcardetails.php">
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">


						<div class="submit step" id="end">
                                <h3 class="main_question2">Ready to Get your Windshield Fixed?</h3>
								<p style = "text-align: center; font-size: 16px;">Enter your Vehicle Identification <br>Number (VIN)</p>
                                <div class="form-group">
                                <label >Enter your VIN here:</label>
                                    <input type="text" name="vin" id="vin" class="form-control required" onchange="getVals(this, 'vin_field');" required>
                                   
                                </div>
                             
                                
                                <!-- /row-->
                            </div>

                            
                        
                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                        <button type="button" name="forward" class="forward" id="hideButton" >Next</button>
                        <button type="submit" name="process" class="submit" id="submit" onclick="openModal()">Find my Car</button>
                            <button type="button" name="backward" class="backward">Prev</button>
                            <p id = "vini" style = "text-align: center; margin-top: 20px;">Don’t know your VIN? <a href = "#">Here’s how </a></p>
                        </div>

                        <!-- The Modal -->

<div id="myModal" class="modal">
                            <div class="modal-contents">
                                <div class="loader"></div><p stye = "margin-top:20px;"><br>Finding your Car...</p>
                                
                            </div>
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
<!-- /footer -->

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- /cd-overlay-nav -->
<div class="cd-overlay-content">
    <span></span>
</div>





<script>
  document.getElementById("hideButton").addEventListener("click", function() {
    document.getElementById("vini").style.display = "none";
  });
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