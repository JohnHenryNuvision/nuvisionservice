<?php include 'header.php'; ?>

<body class="layout_2">

<header>
        <div class="container-fluid">
            <a href="index.php"><img src="img/logo_white.png" alt="" width="178" height="45" class="d-none d-md-inline"><img src="img/logo_white_mobile.png" alt="" width="62" height="45" class="d-inline d-md-none"></a>
            <h1>Track Your Appointment</h1>
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
            <div id="middle-wizard">
            <div class="step">
            <form method="post"  onsubmit="return validateForm()" required>
                                <h3 class="main_question"><i class="arrow_right"></i>Enter your 9 digit Reference Number</h3>
                                <div class="form-group add_top_30">
                                    <input type="text" name="tracking_num" id="tracking_num" class="form-control required" placeholder="000 000 000" >
                                </div>
								 
                                <!-- /row-->
                            </div></div>
                            <!-- /step-->
                            <div   id="bottom-wizard" >
						 <button class="submit" id = "submit" type = "submit">Track Order</button>
					   </div>

                            </form>
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



<!-- COMMON SCRIPTS -->
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/common_scripts.min.js"></script>
<script src="js/velocity.min.js"></script>
<script src="js/common_functions.js"></script>

<!-- Wizard script without branch -->
<script src="js/wizard_without_branch2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>  
<script>
    $(document).ready(function(){
        $('#tracking_num').mask('000 000 000');
        });
</script>    

<script>

        


$(document).ready(function(){
	document.getElementById("submit").onclick = function(){
		var tracking_num = $("#tracking_num").val();
        var tracking_num = tracking_num.replace(/\s+/g, '')
		
		
			   $.ajax({
                    method:'POST',
                    data:{
                        tracking_num:tracking_num,
                    },
                   success:function(data){
					   location.href = "tracking.php?ref_num=" + tracking_num	;
                   }
                });

		
}
});
     </script>   

</body>
</html>