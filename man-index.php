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
                    <form method="post" action = "function.php">
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">


						<div class="step">
                                <h3 class="main_question"><i class="arrow_right"></i>What kind of car is it?</h3>
								<p>Find your vehicle by entering the year, make, model and style or you can enter the vehicle identification number (VIN).</p>
                                <div class="form-group">
								<label for="name">Make</label>
									<select  id="master-dropdown" name="master-dropdown" required="" class="form-control required" onchange="getVals(this, 'master-dropdown_field');">
									   <option value="" selected="selected">Choose One</option>
									   <option value="Acura">Acura</option>
									   <option value="Alfa Romeo">Alfa Romeo</option>
									   <option value="Aston Martin">Aston Martin</option>
									   <option value="Audi">Audi</option>
									   <option value="Bentley">Bentley</option>
									   <option value="BMW">BMW</option>
									   <option value="Buick">Buick</option>
									   <option value="Cadillac">Cadillac</option>
									   <option value="Chevrolet">Chevrolet</option>
									   <option value="Chrysler">Chrysler</option>
									   <option value="Citroen">Citroen</option>
									   <option value="Dodge">Dodge</option>
									   <option value="Fiat">Fiat</option>
									   <option value="Ford">Ford</option>
									   <option value="Geely">Geely</option>
									   <option value="GMC">GMC</option>
									   <option value="Honda">Honda</option>
									   <option value="Hummer">Hummer</option>
									   <option value="Hyundai">Hyundai</option>
									   <option value="Infiniti">Infiniti</option>
									   <option value="Isuzu">Isuzu</option>
									   <option value="Jaguar">Jaguar</option>
									   <option value="Jeep">Jeep</option>
									   <option value="Kia">Kia</option>
									   <option value="Koenigsegg">Koenigsegg</option>
									   <option value="Land Rover">Land Rover</option>
									   <option value="Lexus">Lexus</option>
									   <option value="Lincoln">Lincoln</option>
									   <option value="Maserati">Maserati</option>
									   <option value="Mazda">Mazda</option>
									   <option value="McLaren">McLaren</option>
									   <option value="Mercedes">Mercedes</option>
									   <option value="Mini">Mini</option>
									   <option value="Mitsubishi">Mitsubishi</option>
									   <option value="Nissan">Nissan</option>
									   <option value="Oldsmobile">Oldsmobile</option>
									   <option value="Pontiac">Pontiac</option>
									   <option value="Porsche">Porsche</option>
									   <option value="RAM">RAM</option>
									   <option value="Renault">Renault</option>
									   <option value="Saab">Saab</option>
									   <option value="Saturn">Saturn</option>
									   <option value="Scion">Scion</option>
									   <option value="Subaru">Subaru</option>
									   <option value="Suzuki">Suzuki</option>
									   <option value="Tata Motors">Tata Motors</option>
									   <option value="Tesla">Tesla</option>
									   <option value="Toyota">Toyota</option>
									   <option value="Volkswagen">Volkswagen</option>
									   <option value="Volvo">Volvo</option>
									</select>
									

								
	
                                </div>
							
								
								 <div class="form-group-hidden" id="acura-dropdown">
								 <label for="name">Model</label>
                                    <select  id="acura" name="acura" class="form-control" onchange="getVals(this, 'model_field');">
					                  <option value="" selected="selected"> Choose One </option>
									  <option value="CL"> CL </option>
									  <option value="ILX"> ILX </option>
									  <option value="Integra"> Integra </option>
									  <option value="Legend"> Legend </option>
									  <option value="MDX"> MDX </option>
									  <option value="MDX Sport Hybrid"> MDX Sport Hybrid </option>
									  <option value="NSX"> NSX </option>
									  <option value="RDX"> RDX </option>
									  <option value="RL"> RL </option>
									  <option value="RLX"> RLX </option>
									  <option value="RLX Sport Hybrid"> RLX Sport Hybrid </option>
									  <option value="RSX"> RSX </option>
									  <option value="SLX"> SLX </option>
									  <option value="TL"> TL </option>
									  <option value="TLX"> TLX </option>
									  <option value="TSX"> TSX </option>
									  <option value="Vigor"> Vigor </option>
									  <option value="ZDX"> ZDX </option>
									</select>
                                </div>
								<div class="form-group-hidden" id="alfaromeo-dropdown" >
								<label for="name">Model</label>
                                   	     <select id="alfaromeo" class="form-control" name="alfaromeo" onchange="getVals(this, 'model_field');">
										  <option value="" selected="selected"> Choose One </option>
										  <option value="164"> 164 </option>
										  <option value="4C"> 4C </option>
										  <option value="4C Spider"> 4C Spider </option>
										  <option value="Giulia"> Giulia </option>
										  <option value="Spider"> Spider </option>
										  <option value="Stelvio"> Stelvio </option>
									   </select>
                              
							 </div>
							 <div class="form-group-hidden" id="audi-dropdown">
									<label for="name">Model</label>
								<select id="audi" class="form-control" name="audi" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="80"> 80 </option>
									<option value="90"> 90 </option>
									<option value="100"> 100 </option>
									<option value="A3"> A3 </option>
									<option value="A3 Sportback e-tron"> A3 Sportback e-tron </option>
									<option value="A4"> A4 </option>
									<option value="A4 (2005.5)"> A4 (2005.5) </option>
									<option value="A4 allroad"> A4 allroad </option>
									<option value="A5"> A5 </option>
									<option value="A5 Sport"> A5 Sport </option>
									<option value="A6"> A6 </option>
									<option value="A7"> A7 </option>
									<option value="A8"> A8 </option>
									<option value="allroad"> allroad </option>
									<option value="Cabriolet"> Cabriolet </option>
									<option value="e-tron"> e-tron </option>
									<option value="Q3"> Q3 </option>
									<option value="Q5"> Q5 </option>
									<option value="Q7"> Q7 </option>
									<option value="Q8"> Q8 </option>
									<option value="Quattro"> Quattro </option>
									<option value="R8"> R8 </option>
									<option value="RS 3"> RS 3 </option>
									<option value="RS 4"> RS 4 </option>
									<option value="RS 5"> RS 5 </option>
									<option value="RS 6"> RS 6 </option>
									<option value="RS 7"> RS 7 </option>
									<option value="S3"> S3 </option>
									<option value="S4"> S4 </option>
									<option value="S4 (2005.5)"> S4 (2005.5) </option>
									<option value="S5"> S5 </option>
									<option value="S6"> S6 </option>
									<option value="S7"> S7 </option>
									<option value="S8"> S8 </option>
									<option value="SQ5"> SQ5 </option>
									<option value="TT"> TT </option>
								</select>
								</div>
								<div class="form-group-hidden" id="bentley-dropdown" >
									<label for="name">Model</label>
								<select id="bentley" name="bentley" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Arnage"> Arnage </option>
									<option value="Azure"> Azure </option>
									<option value="Azure T"> Azure T </option>
									<option value="Bentayga"> Bentayga </option>
									<option value="Brooklands"> Brooklands </option>
									<option value="Continental"> Continental </option>
									<option value="Flying Spur"> Flying Spur </option>
									<option value="Mulsanne"> Mulsanne </option>
								</select>
								</div>
								<div class="form-group-hidden" id="bmw-dropdown">
									<label for="name">Model</label>
								<select id="bmw" name="bmw" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="1 Series"> 1 Series </option>
									<option value="2 Series"> 2 Series </option>
									<option value="3 Series"> 3 Series </option>
									<option value="4 Series"> 4 Series </option>
									<option value="5 Series"> 5 Series </option>
									<option value="6 Series"> 6 Series </option>
									<option value="7 Series"> 7 Series </option>
									<option value="8 Series"> 8 Series </option>
									<option value="Alpina B7"> Alpina B7 </option>
									<option value="i3"> i3 </option>
									<option value="i8"> i8 </option>
									<option value="M"> M </option>
									<option value="M2"> M2 </option>
									<option value="M3"> M3 </option>
									<option value="M4"> M4 </option>
									<option value="M5"> M5 </option>
									<option value="M6"> M6 </option>
									<option value="X1"> X1 </option>
									<option value="X2"> X2 </option>
									<option value="X3"> X3 </option>
									<option value="X4"> X4 </option>
									<option value="X5"> X5 </option>
									<option value="X5 M"> X5 M </option>
									<option value="X6"> X6 </option>
									<option value="X6 M"> X6 M </option>
									<option value="X7"> X7 </option>
									<option value="Z3"> Z3 </option>
									<option value="Z4"> Z4 </option>
									<option value="Z4 M"> Z4 M </option>
									<option value="Z8"> Z8 </option>
								</select>
								</div>
								<div class="form-group-hidden" id="buick-dropdown">
									<label for="name">Model</label>
								<select id="buick" name="buick" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Cascada"> Cascada </option>
									<option value="Century"> Century </option>
									<option value="Enclave"> Enclave </option>
									<option value="Encore"> Encore </option>
									<option value="Envision"> Envision </option>
									<option value="LaCrosse"> LaCrosse </option>
									<option value="LeSabre"> LeSabre </option>
									<option value="Lucerne"> Lucerne </option>
									<option value="Park Avenue"> Park Avenue </option>
									<option value="Rainier"> Rainier </option>
									<option value="Regal"> Regal </option>
									<option value="Regal Sportback"> Regal Sportback </option>
									<option value="Regal TourX"> Regal TourX </option>
									<option value="Rendezvous"> Rendezvous </option>
									<option value="Riviera"> Riviera </option>
									<option value="Roadmaster"> Roadmaster </option>
									<option value="Skylark"> Skylark </option>
									<option value="Terraza"> Terraza </option>
									<option value="Verano"> Verano </option>
								</select>
								</div>
								<div class="form-group-hidden" id="cadillac-dropdown">
									<label for="name">Model</label>
								<select id="cadillac" name="cadillac" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Allante"> Allante </option>
									<option value="ATS"> ATS </option>
									<option value="ATS-V"> ATS-V </option>
									<option value="Brougham"> Brougham </option>
									<option value="Catera"> Catera </option>
									<option value="CT5"> CT5 </option>
									<option value="CT6"> CT6 </option>
									<option value="CT6-V"> CT6-V </option>
									<option value="CTS"> CTS </option>
									<option value="CTS-V"> CTS-V </option>
									<option value="DeVille"> DeVille </option>
									<option value="DTS"> DTS </option>
									<option value="Eldorado"> Eldorado </option>
									<option value="ELR"> ELR </option>
									<option value="Escalade"> Escalade </option>
									<option value="Escalade ESV"> Escalade ESV </option>
									<option value="Escalade EXT"> Escalade EXT </option>
									<option value="Fleetwood"> Fleetwood </option>
									<option value="Seville"> Seville </option>
									<option value="Sixty Special"> Sixty Special </option>
									<option value="SRX"> SRX </option>
									<option value="STS"> STS </option>
									<option value="XLR"> XLR </option>
									<option value="XT4"> XT4 </option>
									<option value="XT5"> XT5 </option>
									<option value="XT6"> XT6 </option>
									<option value="XTS"> XTS </option>
								</select>
								</div>
								<div class="form-group-hidden" id="chevrolet-dropdown">
									<label for="name">Model</label>
								<select id="chevrolet" name="chevrolet" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="1500 Extended Cab"> 1500 Extended Cab </option>
									<option value="1500 Regular Cab"> 1500 Regular Cab </option>
									<option value="2500 Crew Cab"> 2500 Crew Cab </option>
									<option value="2500 Extended Cab"> 2500 Extended Cab </option>
									<option value="2500 HD Extended Cab"> 2500 HD Extended Cab </option>
									<option value="2500 HD Regular Cab"> 2500 HD Regular Cab </option>
									<option value="2500 Regular Cab"> 2500 Regular Cab </option>
									<option value="3500 Crew Cab"> 3500 Crew Cab </option>
									<option value="3500 Extended Cab"> 3500 Extended Cab </option>
									<option value="3500 HD Extended Cab"> 3500 HD Extended Cab </option>
									<option value="3500 HD Regular Cab"> 3500 HD Regular Cab </option>
									<option value="3500 Regular Cab"> 3500 Regular Cab </option>
									<option value="APV Cargo"> APV Cargo </option>
									<option value="Astro Cargo"> Astro Cargo </option>
									<option value="Astro Passenger"> Astro Passenger </option>
									<option value="Avalanche"> Avalanche </option>
									<option value="Avalanche 1500"> Avalanche 1500 </option>
									<option value="Avalanche 2500"> Avalanche 2500 </option>
									<option value="Aveo"> Aveo </option>
									<option value="Beretta"> Beretta </option>
									<option value="Blazer"> Blazer </option>
									<option value="Bolt EV"> Bolt EV </option>
									<option value="Camaro"> Camaro </option>
									<option value="Caprice"> Caprice </option>
									<option value="Caprice Classic"> Caprice Classic </option>
									<option value="Captiva Sport"> Captiva Sport </option>
									<option value="Cavalier"> Cavalier </option>
									<option value="City Express"> City Express </option>
									<option value="Classic"> Classic </option>
									<option value="Cobalt"> Cobalt </option>
									<option value="Colorado Crew Cab"> Colorado Crew Cab </option>
									<option value="Colorado Extended Cab"> Colorado Extended Cab </option>
									<option value="Colorado Regular Cab"> Colorado Regular Cab </option>
									<option value="Corsica"> Corsica </option>
									<option value="Corvette"> Corvette </option>
									<option value="Cruze"> Cruze </option>
									<option value="Cruze Limited"> Cruze Limited </option>
									<option value="Equinox"> Equinox </option>
									<option value="Express 1500 Cargo"> Express 1500 Cargo </option>
									<option value="Express 1500 Passenger"> Express 1500 Passenger </option>
									<option value="Express 2500 Cargo"> Express 2500 Cargo </option>
									<option value="Express 2500 Passenger"> Express 2500 Passenger </option>
									<option value="Express 3500 Cargo"> Express 3500 Cargo </option>
									<option value="Express 3500 Passenger"> Express 3500 Passenger </option>
									<option value="G-Series 1500"> G-Series 1500 </option>
									<option value="G-Series 2500"> G-Series 2500 </option>
									<option value="G-Series 3500"> G-Series 3500 </option>
									<option value="G-Series G10"> G-Series G10 </option>
									<option value="G-Series G20"> G-Series G20 </option>
									<option value="G-Series G30"> G-Series G30 </option>
									<option value="HHR"> HHR </option>
									<option value="Impala"> Impala </option>
									<option value="Impala Limited"> Impala Limited </option>
									<option value="Lumina"> Lumina </option>
									<option value="Lumina APV"> Lumina APV </option>
									<option value="Lumina Cargo"> Lumina Cargo </option>
									<option value="Lumina Passenger"> Lumina Passenger </option>
									<option value="Malibu"> Malibu </option>
									<option value="Malibu (Classic)"> Malibu (Classic) </option>
									<option value="Malibu Limited"> Malibu Limited </option>
									<option value="Metro"> Metro </option>
									<option value="Monte Carlo"> Monte Carlo </option>
									<option value="Prizm"> Prizm </option>
									<option value="S10 Blazer"> S10 Blazer </option>
									<option value="S10 Crew Cab"> S10 Crew Cab </option>
									<option value="S10 Extended Cab"> S10 Extended Cab </option>
									<option value="S10 Regular Cab"> S10 Regular Cab </option>
									<option value="Silverado (Classic) 1500 Crew Cab"> Silverado (Classic) 1500 Crew Cab </option>
									<option value="Silverado (Classic) 1500 Extended Cab"> Silverado (Classic) 1500 Extended Cab </option>
									<option value="Silverado (Classic) 1500 HD Crew Cab"> Silverado (Classic) 1500 HD Crew Cab </option>
									<option value="Silverado (Classic) 1500 Regular Cab"> Silverado (Classic) 1500 Regular Cab </option>
									<option value="Silverado (Classic) 2500 HD Crew Cab"> Silverado (Classic) 2500 HD Crew Cab </option>
									<option value="Silverado (Classic) 2500 HD Extended Cab"> Silverado (Classic) 2500 HD Extended Cab </option>
									<option value="Silverado (Classic) 2500 HD Regular Cab"> Silverado (Classic) 2500 HD Regular Cab </option>
									<option value="Silverado (Classic) 3500 Crew Cab"> Silverado (Classic) 3500 Crew Cab </option>
									<option value="Silverado (Classic) 3500 Extended Cab"> Silverado (Classic) 3500 Extended Cab </option>
									<option value="Silverado (Classic) 3500 Regular Cab"> Silverado (Classic) 3500 Regular Cab </option>
									<option value="Silverado 1500 Crew Cab"> Silverado 1500 Crew Cab </option>
									<option value="Silverado 1500 Double Cab"> Silverado 1500 Double Cab </option>
									<option value="Silverado 1500 Extended Cab"> Silverado 1500 Extended Cab </option>
									<option value="Silverado 1500 HD Crew Cab"> Silverado 1500 HD Crew Cab </option>
									<option value="Silverado 1500 LD Double Cab"> Silverado 1500 LD Double Cab </option>
									<option value="Silverado 1500 Regular Cab"> Silverado 1500 Regular Cab </option>
									<option value="Silverado 2500 Crew Cab"> Silverado 2500 Crew Cab </option>
									<option value="Silverado 2500 Extended Cab"> Silverado 2500 Extended Cab </option>
									<option value="Silverado 2500 HD Crew Cab"> Silverado 2500 HD Crew Cab </option>
									<option value="Silverado 2500 HD Double Cab"> Silverado 2500 HD Double Cab </option>
									<option value="Silverado 2500 HD Extended Cab"> Silverado 2500 HD Extended Cab </option>
									<option value="Silverado 2500 HD Regular Cab"> Silverado 2500 HD Regular Cab </option>
									<option value="Silverado 2500 Regular Cab"> Silverado 2500 Regular Cab </option>
									<option value="Silverado 3500 Crew Cab"> Silverado 3500 Crew Cab </option>
									<option value="Silverado 3500 Extended Cab"> Silverado 3500 Extended Cab </option>
									<option value="Silverado 3500 HD Crew Cab"> Silverado 3500 HD Crew Cab </option>
									<option value="Silverado 3500 HD Double Cab"> Silverado 3500 HD Double Cab </option>
									<option value="Silverado 3500 HD Extended Cab"> Silverado 3500 HD Extended Cab </option>
									<option value="Silverado 3500 HD Regular Cab"> Silverado 3500 HD Regular Cab </option>
									<option value="Silverado 3500 Regular Cab"> Silverado 3500 Regular Cab </option>
									<option value="Sonic"> Sonic </option>
									<option value="Spark"> Spark </option>
									<option value="Spark EV"> Spark EV </option>
									<option value="Sportvan G10"> Sportvan G10 </option>
									<option value="Sportvan G20"> Sportvan G20 </option>
									<option value="Sportvan G30"> Sportvan G30 </option>
									<option value="SS"> SS </option>
									<option value="SSR"> SSR </option>
									<option value="Suburban"> Suburban </option>
									<option value="Suburban 1500"> Suburban 1500 </option>
									<option value="Suburban 2500"> Suburban 2500 </option>
									<option value="Suburban 3500HD"> Suburban 3500HD </option>
									<option value="Tahoe"> Tahoe </option>
									<option value="Tracker"> Tracker </option>
									<option value="TrailBlazer"> TrailBlazer </option>
									<option value="Traverse"> Traverse </option>
									<option value="Trax"> Trax </option>
									<option value="Uplander Cargo"> Uplander Cargo </option>
									<option value="Uplander Passenger"> Uplander Passenger </option>
									<option value="Venture Cargo"> Venture Cargo </option>
									<option value="Venture Passenger"> Venture Passenger </option>
									<option value="Volt"> Volt </option>
								</select>
								</div>
								<div class="form-group-hidden" id="chrysler-dropdown">
									<label for="name">Model</label>
								<select id="chrysler" name="chrysler" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="200"> 200 </option>
									<option value="300"> 300 </option>
									<option value="300M"> 300M </option>
									<option value="Aspen"> Aspen </option>
									<option value="Cirrus"> Cirrus </option>
									<option value="Concorde"> Concorde </option>
									<option value="Crossfire"> Crossfire </option>
									<option value="Fifth Ave"> Fifth Ave </option>
									<option value="Grand Voyager"> Grand Voyager </option>
									<option value="Imperial"> Imperial </option>
									<option value="LeBaron"> LeBaron </option>
									<option value="LHS"> LHS </option>
									<option value="New Yorker"> New Yorker </option>
									<option value="Pacifica"> Pacifica </option>
									<option value="Pacifica Hybrid"> Pacifica Hybrid </option>
									<option value="Prowler"> Prowler </option>
									<option value="PT Cruiser"> PT Cruiser </option>
									<option value="Sebring"> Sebring </option>
									<option value="Town &amp; Country"> Town &amp; Country </option>
									<option value="Voyager"> Voyager </option>
								</select>
								</div>
								<div class="form-group-hidden" id="citroen-dropdown">
									<label for="name">Model</label>
								<select id="citroen" name="citroen" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Berlingo"> Berlingo </option>
									<option value="C1"> C1 </option>
									<option value="C3"> C3 </option>
									<option value="C3 Aircross"> C3 Aircross </option>
									<option value="C3 Picasso"> C3 Picasso </option>
									<option value="C4"> C4 </option>
									<option value="C4 Aircross"> C4 Aircross </option>
									<option value="C4 Cactus"> C4 Cactus </option>
									<option value="C4 Grand Picasso"> C4 Grand Picasso </option>
									<option value="C4 Nouvelle"> C4 Nouvelle </option>
									<option value="C4 Picasso"> C4 Picasso </option>
									<option value="C5"> C5 </option>
									<option value="C5 Aircross"> C5 Aircross </option>
									<option value="C5 Tourer"> C5 Tourer </option>
									<option value="C-Triomphe"> C-Triomphe </option>
									<option value="C-ZERO"> C-ZERO </option>
									<option value="Elysee"> Elysee </option>
									<option value="Fukang"> Fukang </option>
									<option value="Jumper"> Jumper </option>
									<option value="Jumpy"> Jumpy </option>
									<option value="Nemo"> Nemo </option>
								</select>
								</div>
								<div class="form-group-hidden" id="dodge-dropdown">
									<label for="name">Model</label>
								<select id="dodge" name="dodge" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Avenger"> Avenger </option>
									<option value="Caliber"> Caliber </option>
									<option value="Caravan Cargo"> Caravan Cargo </option>
									<option value="Caravan Passenger"> Caravan Passenger </option>
									<option value="Challenger"> Challenger </option>
									<option value="Charger"> Charger </option>
									<option value="Colt"> Colt </option>
									<option value="D150 Club Cab"> D150 Club Cab </option>
									<option value="D150 Regular Cab"> D150 Regular Cab </option>
									<option value="D250 Club Cab"> D250 Club Cab </option>
									<option value="D250 Regular Cab"> D250 Regular Cab </option>
									<option value="D350 Club Cab"> D350 Club Cab </option>
									<option value="D350 Regular Cab"> D350 Regular Cab </option>
									<option value="Dakota Club Cab"> Dakota Club Cab </option>
									<option value="Dakota Crew Cab"> Dakota Crew Cab </option>
									<option value="Dakota Extended Cab"> Dakota Extended Cab </option>
									<option value="Dakota Quad Cab"> Dakota Quad Cab </option>
									<option value="Dakota Regular Cab"> Dakota Regular Cab </option>
									<option value="Dart"> Dart </option>
									<option value="Daytona"> Daytona </option>
									<option value="Durango"> Durango </option>
									<option value="Dynasty"> Dynasty </option>
									<option value="Grand Caravan Cargo"> Grand Caravan Cargo </option>
									<option value="Grand Caravan Passenger"> Grand Caravan Passenger </option>
									<option value="Intrepid"> Intrepid </option>
									<option value="Journey"> Journey </option>
									<option value="Magnum"> Magnum </option>
									<option value="Monaco"> Monaco </option>
									<option value="Neon"> Neon </option>
									<option value="Nitro"> Nitro </option>
									<option value="Ram 1500 Club Cab"> Ram 1500 Club Cab </option>
									<option value="Ram 1500 Crew Cab"> Ram 1500 Crew Cab </option>
									<option value="Ram 1500 Mega Cab"> Ram 1500 Mega Cab </option>
									<option value="Ram 1500 Quad Cab"> Ram 1500 Quad Cab </option>
									<option value="Ram 1500 Regular Cab"> Ram 1500 Regular Cab </option>
									<option value="Ram 2500 Club Cab"> Ram 2500 Club Cab </option>
									<option value="Ram 2500 Crew Cab"> Ram 2500 Crew Cab </option>
									<option value="Ram 2500 Mega Cab"> Ram 2500 Mega Cab </option>
									<option value="Ram 2500 Quad Cab"> Ram 2500 Quad Cab </option>
									<option value="Ram 2500 Regular Cab"> Ram 2500 Regular Cab </option>
									<option value="Ram 3500 Club Cab"> Ram 3500 Club Cab </option>
									<option value="Ram 3500 Crew Cab"> Ram 3500 Crew Cab </option>
									<option value="Ram 3500 Mega Cab"> Ram 3500 Mega Cab </option>
									<option value="Ram 3500 Quad Cab"> Ram 3500 Quad Cab </option>
									<option value="Ram 3500 Regular Cab"> Ram 3500 Regular Cab </option>
									<option value="Ram 50 Regular Cab"> Ram 50 Regular Cab </option>
									<option value="Ram Van 1500"> Ram Van 1500 </option>
									<option value="Ram Van 2500"> Ram Van 2500 </option>
									<option value="Ram Van 3500"> Ram Van 3500 </option>
									<option value="Ram Van B150"> Ram Van B150 </option>
									<option value="Ram Van B250"> Ram Van B250 </option>
									<option value="Ram Van B350"> Ram Van B350 </option>
									<option value="Ram Wagon 1500"> Ram Wagon 1500 </option>
									<option value="Ram Wagon 2500"> Ram Wagon 2500 </option>
									<option value="Ram Wagon 3500"> Ram Wagon 3500 </option>
									<option value="Ram Wagon B150"> Ram Wagon B150 </option>
									<option value="Ram Wagon B250"> Ram Wagon B250 </option>
									<option value="Ram Wagon B350"> Ram Wagon B350 </option>
									<option value="Ramcharger"> Ramcharger </option>
									<option value="Shadow"> Shadow </option>
									<option value="Spirit"> Spirit </option>
									<option value="Sprinter 2500 Cargo"> Sprinter 2500 Cargo </option>
									<option value="Sprinter 2500 Passenger"> Sprinter 2500 Passenger </option>
									<option value="Sprinter 3500 Cargo"> Sprinter 3500 Cargo </option>
									<option value="Stealth"> Stealth </option>
									<option value="Stratus"> Stratus </option>
									<option value="Viper"> Viper </option>
								</select>
								</div>
								<div class="form-group-hidden" id="fiat-dropdown">
									<label for="name">Model</label>
								<select id="fiat" name="fiat" class="form-control" onchange="getVals(this, 'model_field');"> 
									<option value="" selected="selected"> Choose One </option>
									<option value="500"> 500 </option>
									<option value="124 Spider"> 124 Spider </option>
									<option value="500 Abarth"> 500 Abarth </option>
									<option value="500c"> 500c </option>
									<option value="500c Abarth"> 500c Abarth </option>
									<option value="500e"> 500e </option>
									<option value="500L"> 500L </option>
									<option value="500X"> 500X </option>
								</select>
								</div>
								<div class="form-group-hidden" id="ford-dropdown">
									<label for="name">Model</label>
								<select id="ford" name="ford" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Aerostar Cargo"> Aerostar Cargo </option>
									<option value="Aerostar Passenger"> Aerostar Passenger </option>
									<option value="Aspire"> Aspire </option>
									<option value="Bronco"> Bronco </option>
									<option value="Club Wagon"> Club Wagon </option>
									<option value="C-MAX Energi"> C-MAX Energi </option>
									<option value="C-MAX Hybrid"> C-MAX Hybrid </option>
									<option value="Contour"> Contour </option>
									<option value="Crown Victoria"> Crown Victoria </option>
									<option value="E150 Cargo"> E150 Cargo </option>
									<option value="E150 Passenger"> E150 Passenger </option>
									<option value="E150 Super Duty Cargo"> E150 Super Duty Cargo </option>
									<option value="E150 Super Duty Passenger"> E150 Super Duty Passenger </option>
									<option value="E250 Cargo"> E250 Cargo </option>
									<option value="E250 Super Duty Cargo"> E250 Super Duty Cargo </option>
									<option value="E350 Super Duty Cargo"> E350 Super Duty Cargo </option>
									<option value="E350 Super Duty Passenger"> E350 Super Duty Passenger </option>
									<option value="Econoline E150 Cargo"> Econoline E150 Cargo </option>
									<option value="Econoline E150 Passenger"> Econoline E150 Passenger </option>
									<option value="Econoline E250 Cargo"> Econoline E250 Cargo </option>
									<option value="Econoline E350 Cargo"> Econoline E350 Cargo </option>
									<option value="Econoline E350 Super Duty Cargo"> Econoline E350 Super Duty Cargo </option>
									<option value="Econoline E350 Super Duty Passenger"> Econoline E350 Super Duty Passenger </option>
									<option value="EcoSport"> EcoSport </option>
									<option value="Edge"> Edge </option>
									<option value="Escape"> Escape </option>
									<option value="Escort"> Escort </option>
									<option value="Excursion"> Excursion </option>
									<option value="Expedition"> Expedition </option>
									<option value="Expedition EL"> Expedition EL </option>
									<option value="Expedition MAX"> Expedition MAX </option>
									<option value="Explorer"> Explorer </option>
									<option value="Explorer Sport"> Explorer Sport </option>
									<option value="Explorer Sport Trac"> Explorer Sport Trac </option>
									<option value="F150 (Heritage) Regular Cab"> F150 (Heritage) Regular Cab </option>
									<option value="F150 (Heritage) Super Cab"> F150 (Heritage) Super Cab </option>
									<option value="F150 Regular Cab"> F150 Regular Cab </option>
									<option value="F150 Super Cab"> F150 Super Cab </option>
									<option value="F150 SuperCrew Cab"> F150 SuperCrew Cab </option>
									<option value="F250 Crew Cab"> F250 Crew Cab </option>
									<option value="F250 Regular Cab"> F250 Regular Cab </option>
									<option value="F250 Super Cab"> F250 Super Cab </option>
									<option value="F250 Super Duty Crew Cab"> F250 Super Duty Crew Cab </option>
									<option value="F250 Super Duty Regular Cab"> F250 Super Duty Regular Cab </option>
									<option value="F250 Super Duty Super Cab"> F250 Super Duty Super Cab </option>
									<option value="F350 Crew Cab"> F350 Crew Cab </option>
									<option value="F350 Regular Cab"> F350 Regular Cab </option>
									<option value="F350 Super Cab"> F350 Super Cab </option>
									<option value="F350 Super Duty Crew Cab"> F350 Super Duty Crew Cab </option>
									<option value="F350 Super Duty Regular Cab"> F350 Super Duty Regular Cab </option>
									<option value="F350 Super Duty Super Cab"> F350 Super Duty Super Cab </option>
									<option value="F450 Super Duty Crew Cab"> F450 Super Duty Crew Cab </option>
									<option value="Festiva"> Festiva </option>
									<option value="Fiesta"> Fiesta </option>
									<option value="Five Hundred"> Five Hundred </option>
									<option value="Flex"> Flex </option>
									<option value="Focus"> Focus </option>
									<option value="Focus ST"> Focus ST </option>
									<option value="Freestar Cargo"> Freestar Cargo </option>
									<option value="Freestar Passenger"> Freestar Passenger </option>
									<option value="Freestyle"> Freestyle </option>
									<option value="Fusion"> Fusion </option>
									<option value="Fusion Energi"> Fusion Energi </option>
									<option value="GT"> GT </option>
									<option value="Mustang"> Mustang </option>
									<option value="Probe"> Probe </option>
									<option value="Ranger Regular Cab"> Ranger Regular Cab </option>
									<option value="Ranger Super Cab"> Ranger Super Cab </option>
									<option value="Ranger SuperCab"> Ranger SuperCab </option>
									<option value="Ranger SuperCrew"> Ranger SuperCrew </option>
									<option value="Taurus"> Taurus </option>
									<option value="Taurus X"> Taurus X </option>
									<option value="Tempo"> Tempo </option>
									<option value="Thunderbird"> Thunderbird </option>
									<option value="Transit 150 Van"> Transit 150 Van </option>
									<option value="Transit 150 Wagon"> Transit 150 Wagon </option>
									<option value="Transit 250 Van"> Transit 250 Van </option>
									<option value="Transit 350 HD Van"> Transit 350 HD Van </option>
									<option value="Transit 350 Van"> Transit 350 Van </option>
									<option value="Transit 350 Wagon"> Transit 350 Wagon </option>
									<option value="Transit Connect Cargo"> Transit Connect Cargo </option>
									<option value="Transit Connect Passenger"> Transit Connect Passenger </option>
									<option value="Windstar Cargo"> Windstar Cargo </option>
									<option value="Windstar Passenger"> Windstar Passenger </option>
									<option value="ZX2"> ZX2 </option>
								</select>
								</div>
								<div class="form-group-hidden" id="geely-dropdown">
									<label for="name">Model</label>
								<select id="geely" name="geely" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Emgrand EC7"> Emgrand EC7 </option>
									<option value="Emgrand EC8"> Emgrand EC8 </option>
									<option value="Emgrand EX7"> Emgrand EX7 </option>
									<option value="Englon SC5 RV"> Englon SC5 RV </option>
									<option value="GC9"> GC9 </option>
									<option value="GE Concept Car"> GE Concept Car </option>
									<option value="Gleagle GC7"> Gleagle GC7 </option>
									<option value="LC"> LC </option>
									<option value="LG King Kong"> LG King Kong </option>
									<option value="MK"> MK </option>
									<option value="Panda"> Panda </option>
								</select>
								</div>
								<div class="form-group-hidden" id="gmc-dropdown">
									<label for="name">Model</label>
								<select id="gmc" name="gmc" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="1500 Club Coupe"> 1500 Club Coupe </option>
									<option value="1500 Regular Cab"> 1500 Regular Cab </option>
									<option value="2500 Club Coupe"> 2500 Club Coupe </option>
									<option value="2500 Crew Cab"> 2500 Crew Cab </option>
									<option value="2500 HD Club Coupe"> 2500 HD Club Coupe </option>
									<option value="2500 HD Extended Cab"> 2500 HD Extended Cab </option>
									<option value="2500 HD Regular Cab"> 2500 HD Regular Cab </option>
									<option value="2500 Regular Cab"> 2500 Regular Cab </option>
									<option value="3500 Club Coupe"> 3500 Club Coupe </option>
									<option value="3500 Crew Cab"> 3500 Crew Cab </option>
									<option value="3500 Extended Cab"> 3500 Extended Cab </option>
									<option value="3500 Regular Cab"> 3500 Regular Cab </option>
									<option value="Acadia"> Acadia </option>
									<option value="Acadia Limited"> Acadia Limited </option>
									<option value="Canyon Crew Cab"> Canyon Crew Cab </option>
									<option value="Canyon Extended Cab"> Canyon Extended Cab </option>
									<option value="Canyon Regular Cab"> Canyon Regular Cab </option>
									<option value="Envoy"> Envoy </option>
									<option value="Envoy XL"> Envoy XL </option>
									<option value="Envoy XUV"> Envoy XUV </option>
									<option value="Jimmy"> Jimmy </option>
									<option value="Rally Wagon 1500"> Rally Wagon 1500 </option>
									<option value="Rally Wagon 2500"> Rally Wagon 2500 </option>
									<option value="Rally Wagon 3500"> Rally Wagon 3500 </option>
									<option value="Rally Wagon G2500"> Rally Wagon G2500 </option>
									<option value="Rally Wagon G3500"> Rally Wagon G3500 </option>
									<option value="Safari Cargo"> Safari Cargo </option>
									<option value="Safari Passenger"> Safari Passenger </option>
									<option value="Savana 1500 Cargo"> Savana 1500 Cargo </option>
									<option value="Savana 1500 Passenger"> Savana 1500 Passenger </option>
									<option value="Savana 2500 Cargo"> Savana 2500 Cargo </option>
									<option value="Savana 2500 Passenger"> Savana 2500 Passenger </option>
									<option value="Savana 3500 Cargo"> Savana 3500 Cargo </option>
									<option value="Savana 3500 Passenger"> Savana 3500 Passenger </option>
									<option value="Sierra (Classic) 1500 Crew Cab"> Sierra (Classic) 1500 Crew Cab </option>
									<option value="Sierra (Classic) 1500 Extended Cab"> Sierra (Classic) 1500 Extended Cab </option>
									<option value="Sierra (Classic) 1500 HD Crew Cab"> Sierra (Classic) 1500 HD Crew Cab </option>
									<option value="Sierra (Classic) 1500 Regular Cab"> Sierra (Classic) 1500 Regular Cab </option>
									<option value="Sierra (Classic) 2500 Crew Cab"> Sierra (Classic) 2500 Crew Cab </option>
									<option value="Sierra (Classic) 2500 HD Crew Cab"> Sierra (Classic) 2500 HD Crew Cab </option>
									<option value="Sierra (Classic) 2500 HD Extended Cab"> Sierra (Classic) 2500 HD Extended Cab </option>
									<option value="Sierra (Classic) 2500 HD Regular Cab"> Sierra (Classic) 2500 HD Regular Cab </option>
									<option value="Sierra (Classic) 3500 Crew Cab"> Sierra (Classic) 3500 Crew Cab </option>
									<option value="Sierra (Classic) 3500 Extended Cab"> Sierra (Classic) 3500 Extended Cab </option>
									<option value="Sierra (Classic) 3500 Regular Cab"> Sierra (Classic) 3500 Regular Cab </option>
									<option value="Sierra 1500 Crew Cab"> Sierra 1500 Crew Cab </option>
									<option value="Sierra 1500 Double Cab"> Sierra 1500 Double Cab </option>
									<option value="Sierra 1500 Extended Cab"> Sierra 1500 Extended Cab </option>
									<option value="Sierra 1500 HD Crew Cab"> Sierra 1500 HD Crew Cab </option>
									<option value="Sierra 1500 Limited Double Cab"> Sierra 1500 Limited Double Cab </option>
									<option value="Sierra 1500 Regular Cab"> Sierra 1500 Regular Cab </option>
									<option value="Sierra 2500 Crew Cab"> Sierra 2500 Crew Cab </option>
									<option value="Sierra 2500 Extended Cab"> Sierra 2500 Extended Cab </option>
									<option value="Sierra 2500 HD Crew Cab"> Sierra 2500 HD Crew Cab </option>
									<option value="Sierra 2500 HD Double Cab"> Sierra 2500 HD Double Cab </option>
									<option value="Sierra 2500 HD Extended Cab"> Sierra 2500 HD Extended Cab </option>
									<option value="Sierra 2500 HD Regular Cab"> Sierra 2500 HD Regular Cab </option>
									<option value="Sierra 2500 Regular Cab"> Sierra 2500 Regular Cab </option>
									<option value="Sierra 3500 Crew Cab"> Sierra 3500 Crew Cab </option>
									<option value="Sierra 3500 Extended Cab"> Sierra 3500 Extended Cab </option>
									<option value="Sierra 3500 HD Crew Cab"> Sierra 3500 HD Crew Cab </option>
									<option value="Sierra 3500 HD Double Cab"> Sierra 3500 HD Double Cab </option>
									<option value="Sierra 3500 HD Extended Cab"> Sierra 3500 HD Extended Cab </option>
									<option value="Sierra 3500 HD Regular Cab"> Sierra 3500 HD Regular Cab </option>
									<option value="Sierra 3500 Regular Cab"> Sierra 3500 Regular Cab </option>
									<option value="Sonoma Club Cab"> Sonoma Club Cab </option>
									<option value="Sonoma Club Coupe Cab"> Sonoma Club Coupe Cab </option>
									<option value="Sonoma Crew Cab"> Sonoma Crew Cab </option>
									<option value="Sonoma Extended Cab"> Sonoma Extended Cab </option>
									<option value="Sonoma Regular Cab"> Sonoma Regular Cab </option>
									<option value="Suburban 1500"> Suburban 1500 </option>
									<option value="Suburban 2500"> Suburban 2500 </option>
									<option value="Terrain"> Terrain </option>
									<option value="Vandura 1500"> Vandura 1500 </option>
									<option value="Vandura 2500"> Vandura 2500 </option>
									<option value="Vandura 3500"> Vandura 3500 </option>
									<option value="Vandura G1500"> Vandura G1500 </option>
									<option value="Vandura G2500"> Vandura G2500 </option>
									<option value="Vandura G3500"> Vandura G3500 </option>
									<option value="Yukon"> Yukon </option>
									<option value="Yukon Denali"> Yukon Denali </option>
									<option value="Yukon XL"> Yukon XL </option>
									<option value="Yukon XL 1500"> Yukon XL 1500 </option>
									<option value="Yukon XL 2500"> Yukon XL 2500 </option>
								</select>
								</div>
								<div class="form-group-hidden" id="honda-dropdown">
									<label for="name">Model</label>
								<select id="honda"  name="honda" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Accord"> Accord </option>
									<option value="Accord Crosstour"> Accord Crosstour </option>
									<option value="Accord Hybrid"> Accord Hybrid </option>
									<option value="Civic"> Civic </option>
									<option value="Civic Type R"> Civic Type R </option>
									<option value="Clarity Electric"> Clarity Electric </option>
									<option value="Clarity Fuel Cell"> Clarity Fuel Cell </option>
									<option value="Clarity Plug-in Hybrid"> Clarity Plug-in Hybrid </option>
									<option value="Crosstour"> Crosstour </option>
									<option value="CR-V"> CR-V </option>
									<option value="CR-Z"> CR-Z </option>
									<option value="del Sol"> del Sol </option>
									<option value="Element"> Element </option>
									<option value="Fit"> Fit </option>
									<option value="HR-V"> HR-V </option>
									<option value="Insight"> Insight </option>
									<option value="Odyssey"> Odyssey </option>
									<option value="Passport"> Passport </option>
									<option value="Pilot"> Pilot </option>
									<option value="Prelude"> Prelude </option>
									<option value="Ridgeline"> Ridgeline </option>
									<option value="S2000"> S2000 </option>
								</select>
								</div>
								<div class="form-group-hidden" id="hummer-dropdown">
									<label for="name">Model</label>
								<select id="hummer" name="hummer" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="H1"> H1 </option>
									<option value="H2"> H2 </option>
									<option value="H3"> H3 </option>
									<option value="H3T"> H3T </option>
								</select>
								</div>
								<div class="form-group-hidden" id="hyundai-dropdown">
									<label for="name">Model</label>
								<select id="hyundai" name="hyundai" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Accent"> Accent </option>
									<option value="Azera"> Azera </option>
									<option value="Elantra"> Elantra </option>
									<option value="Elantra GT"> Elantra GT </option>
									<option value="Entourage"> Entourage </option>
									<option value="Equus"> Equus </option>
									<option value="Excel"> Excel </option>
									<option value="Genesis"> Genesis </option>
									<option value="Genesis Coupe"> Genesis Coupe </option>
									<option value="Ioniq Electric"> Ioniq Electric </option>
									<option value="Ioniq Hybrid"> Ioniq Hybrid </option>
									<option value="Ioniq Plug-in Hybrid"> Ioniq Plug-in Hybrid </option>
									<option value="Kona"> Kona </option>
									<option value="Kona Electric"> Kona Electric </option>
									<option value="NEXO"> NEXO </option>
									<option value="Palisade"> Palisade </option>
									<option value="Santa Fe"> Santa Fe </option>
									<option value="Santa Fe Sport"> Santa Fe Sport </option>
									<option value="Santa Fe XL"> Santa Fe XL </option>
									<option value="Scoupe"> Scoupe </option>
									<option value="Sonata"> Sonata </option>
									<option value="Sonata Hybrid"> Sonata Hybrid </option>
									<option value="Sonata Plug-in Hybrid"> Sonata Plug-in Hybrid </option>
									<option value="Tiburon"> Tiburon </option>
									<option value="Tucson"> Tucson </option>
									<option value="Tucson Fuel Cell"> Tucson Fuel Cell </option>
									<option value="Veloster"> Veloster </option>
									<option value="Venue"> Venue </option>
									<option value="Veracruz"> Veracruz </option>
									<option value="XG300"> XG300 </option>
									<option value="XG350"> XG350 </option>
								</select>
								</div>
								<div class="form-group-hidden" id="infiniti-dropdown">
									<label for="name">Model</label>
								<select id="infiniti" name="infiniti" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="EX"> EX </option>
									<option value="FX"> FX </option>
									<option value="G"> G </option>
									<option value="I"> I </option>
									<option value="J"> J </option>
									<option value="JX"> JX </option>
									<option value="M"> M </option>
									<option value="Q"> Q </option>
									<option value="Q40"> Q40 </option>
									<option value="Q50"> Q50 </option>
									<option value="Q60"> Q60 </option>
									<option value="Q70"> Q70 </option>
									<option value="QX"> QX </option>
									<option value="QX30"> QX30 </option>
									<option value="QX50"> QX50 </option>
									<option value="QX60"> QX60 </option>
									<option value="QX70"> QX70 </option>
									<option value="QX80"> QX80 </option>
								</select>
								</div>
								<div class="form-group-hidden" id="isuzu-dropdown">
									<label for="name">Model</label>
								<select id="isuzu" name="isuzu" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Amigo"> Amigo </option>
									<option value="Ascender"> Ascender </option>
									<option value="Axiom"> Axiom </option>
									<option value="Hombre Regular Cab"> Hombre Regular Cab </option>
									<option value="Hombre Spacecab"> Hombre Spacecab </option>
									<option value="i-280 Extended Cab"> i-280 Extended Cab </option>
									<option value="i-290 Extended Cab"> i-290 Extended Cab </option>
									<option value="i-350 Crew Cab"> i-350 Crew Cab </option>
									<option value="i-370 Crew Cab"> i-370 Crew Cab </option>
									<option value="i-370 Extended Cab"> i-370 Extended Cab </option>
									<option value="Impulse"> Impulse </option>
									<option value="Oasis"> Oasis </option>
									<option value="Regular Cab"> Regular Cab </option>
									<option value="Rodeo"> Rodeo </option>
									<option value="Rodeo Sport"> Rodeo Sport </option>
									<option value="Spacecab"> Spacecab </option>
									<option value="Stylus"> Stylus </option>
									<option value="Trooper"> Trooper </option>
									<option value="VehiCROSS"> VehiCROSS </option>
								</select>
								</div>
								<div class="form-group-hidden" id="jaguar-dropdown">
									<label for="name">Model</label>
								<select id="jaguar" name="jaguar" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="E-PACE"> E-PACE </option>
									<option value="F-PACE"> F-PACE </option>
									<option value="F-TYPE"> F-TYPE </option>
									<option value="I-PACE"> I-PACE </option>
									<option value="S-Type"> S-Type </option>
									<option value="XE"> XE </option>
									<option value="XF"> XF </option>
									<option value="XJ"> XJ </option>
									<option value="XK"> XK </option>
									<option value="X-Type"> X-Type </option>
								</select>
								</div>
								<div class="form-group-hidden" id="jeep-dropdown">
									<label for="name">Model</label>
								<select id="jeep" name="jeep" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Cherokee"> Cherokee </option>
									<option value="Comanche Regular Cab"> Comanche Regular Cab </option>
									<option value="Commander"> Commander </option>
									<option value="Compass"> Compass </option>
									<option value="Gladiator"> Gladiator </option>
									<option value="Grand Cherokee"> Grand Cherokee </option>
									<option value="Liberty"> Liberty </option>
									<option value="Patriot"> Patriot </option>
									<option value="Renegade"> Renegade </option>
									<option value="Wrangler"> Wrangler </option>
									<option value="Wrangler Unlimited"> Wrangler Unlimited </option>
								</select>
								</div>
								<div class="form-group-hidden" id="kia-dropdown">
									<label for="name">Model</label>
								<select id="kia" name="kia" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Amanti"> Amanti </option>
									<option value="Borrego"> Borrego </option>
									<option value="Cadenza"> Cadenza </option>
									<option value="Forte"> Forte </option>
									<option value="Forte Koup"> Forte Koup </option>
									<option value="Forte5"> Forte5 </option>
									<option value="K900"> K900 </option>
									<option value="Niro"> Niro </option>
									<option value="Niro EV"> Niro EV </option>
									<option value="Niro Plug-in Hybrid"> Niro Plug-in Hybrid </option>
									<option value="Optima"> Optima </option>
									<option value="Optima (2006.5)"> Optima (2006.5) </option>
									<option value="Optima Hybrid"> Optima Hybrid </option>
									<option value="Optima Plug-in Hybrid"> Optima Plug-in Hybrid </option>
									<option value="Rio"> Rio </option>
									<option value="Rondo"> Rondo </option>
									<option value="Sedona"> Sedona </option>
									<option value="Sephia"> Sephia </option>
									<option value="Sorento"> Sorento </option>
									<option value="Soul"> Soul </option>
									<option value="Soul EV"> Soul EV </option>
									<option value="Spectra"> Spectra </option>
									<option value="Sportage"> Sportage </option>
									<option value="Stinger"> Stinger </option>
									<option value="Telluride"> Telluride </option>
								</select>
								</div>
								<div class="form-group-hidden" id="koenigsegg-dropdown">
									<label for="name">Model</label>
								<select id="koenigsegg" name="koenigsegg" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Agera"> Agera </option>
									<option value="Agera Final"> Agera Final </option>
									<option value="Agera R"> Agera R </option>
									<option value="Agera RS"> Agera RS </option>
									<option value="Agera S"> Agera S </option>
									<option value="CC"> CC </option>
									<option value="CC8S"> CC8S </option>
									<option value="CCGT"> CCGT </option>
									<option value="CCR"> CCR </option>
									<option value="CCX"> CCX </option>
									<option value="CCX Edition"> CCX Edition </option>
									<option value="CCXR"> CCXR </option>
									<option value="CCXR Edition"> CCXR Edition </option>
									<option value="CCXR Special Edition"> CCXR Special Edition </option>
									<option value="Quant"> Quant </option>
									<option value="Regera"> Regera </option>
									<option value="Trevita"> Trevita </option>
								</select>
								</div>
								<div class="form-group-hidden" id="landrover-dropdown">
									<label for="name">Model</label>
								<select id="landrover" name="landrover" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Defender 110"> Defender 110 </option>
									<option value="Defender 90"> Defender 90 </option>
									<option value="Discovery"> Discovery </option>
									<option value="Discovery Series II"> Discovery Series II </option>
									<option value="Discovery Sport"> Discovery Sport </option>
									<option value="Freelander"> Freelander </option>
									<option value="LR2"> LR2 </option>
									<option value="LR3"> LR3 </option>
									<option value="LR4"> LR4 </option>
									<option value="Range Rover"> Range Rover </option>
									<option value="Range Rover Evoque"> Range Rover Evoque </option>
									<option value="Range Rover Sport"> Range Rover Sport </option>
									<option value="Range Rover Velar"> Range Rover Velar </option>
								</select>
								</div>
								<div class="form-group-hidden" id="lexus-dropdown">
									<label for="name">Model</label>
								<select id="lexus" name="lexus" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="CT"> CT </option>
									<option value="ES"> ES </option>
									<option value="GS"> GS </option>
									<option value="GX"> GX </option>
									<option value="HS"> HS </option>
									<option value="IS"> IS </option>
									<option value="IS F"> IS F </option>
									<option value="LC"> LC </option>
									<option value="LFA"> LFA </option>
									<option value="LS"> LS </option>
									<option value="LX"> LX </option>
									<option value="NX"> NX </option>
									<option value="RC"> RC </option>
									<option value="RX"> RX </option>
									<option value="SC"> SC </option>
									<option value="UX"> UX </option>
								</select>
								</div>
								<div class="form-group-hidden" id="lincoln-dropdown">
									<label for="name">Model</label>
								<select id="lincoln" name="lincoln" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Aviator"> Aviator </option>
									<option value="Blackwood"> Blackwood </option>
									<option value="Continental"> Continental </option>
									<option value="Corsair"> Corsair </option>
									<option value="LS"> LS </option>
									<option value="Mark LT"> Mark LT </option>
									<option value="Mark VII"> Mark VII </option>
									<option value="Mark VIII"> Mark VIII </option>
									<option value="MKC"> MKC </option>
									<option value="MKS"> MKS </option>
									<option value="MKT"> MKT </option>
									<option value="MKX"> MKX </option>
									<option value="MKZ"> MKZ </option>
									<option value="Nautilus"> Nautilus </option>
									<option value="Navigator"> Navigator </option>
									<option value="Navigator L"> Navigator L </option>
									<option value="Town Car"> Town Car </option>
									<option value="Zephyr"> Zephyr </option>
								</select>
								</div>
								<div class="form-group-hidden" id="maserati-dropdown">
									<label for="name">Model</label>
								<select id="maserati" name="maserati" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Coupe"> Coupe </option>
									<option value="Ghibli"> Ghibli </option>
									<option value="GranSport"> GranSport </option>
									<option value="GranTurismo"> GranTurismo </option>
									<option value="Levante"> Levante </option>
									<option value="Quattroporte"> Quattroporte </option>
								</select>
								</div>
								<div class="form-group-hidden" id="mazda-dropdown">
									<label for="name">Model</label>
								<select id="mazda" name="mazda" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="323"> 323 </option>
									<option value="626"> 626 </option>
									<option value="929"> 929 </option>
									<option value="B-Series Cab Plus"> B-Series Cab Plus </option>
									<option value="B-Series Extended Cab"> B-Series Extended Cab </option>
									<option value="B-Series Regular Cab"> B-Series Regular Cab </option>
									<option value="CX-3"> CX-3 </option>
									<option value="CX-30"> CX-30 </option>
									<option value="CX-5"> CX-5 </option>
									<option value="CX-7"> CX-7 </option>
									<option value="CX-9"> CX-9 </option>
									<option value="MAZDA2"> MAZDA2 </option>
									<option value="MAZDA3"> MAZDA3 </option>
									<option value="MAZDA5"> MAZDA5 </option>
									<option value="MAZDA6"> MAZDA6 </option>
									<option value="Millenia"> Millenia </option>
									<option value="MPV"> MPV </option>
									<option value="MX-3"> MX-3 </option>
									<option value="MX-5 Miata"> MX-5 Miata </option>
									<option value="MX-5 Miata RF"> MX-5 Miata RF </option>
									<option value="MX-6"> MX-6 </option>
									<option value="Navajo"> Navajo </option>
									<option value="Protege"> Protege </option>
									<option value="Protege5"> Protege5 </option>
									<option value="RX-7"> RX-7 </option>
									<option value="RX-8"> RX-8 </option>
									<option value="Tribute"> Tribute </option>
								</select>
								</div>
								<div class="form-group-hidden" id="mclaren-dropdown">
									<label for="name">Model</label>
								<select id="mclaren" name="mclaren" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="570GT"> 570GT </option>
									<option value="570S"> 570S </option>
									<option value="650S"> 650S </option>
									<option value="675LT"> 675LT </option>
									<option value="720S"> 720S </option>
									<option value="MP4-12C"> MP4-12C </option>
								</select>
								</div>
								<div class="form-group-hidden" id="mercedes-dropdown">
									<label for="name">Model</label>
								<select id="mercedes" name="mercedes" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="190 E"> 190 E </option>
									<option value="300 CE"> 300 CE </option>
									<option value="300 D"> 300 D </option>
									<option value="300 E"> 300 E </option>
									<option value="300 SD"> 300 SD </option>
									<option value="300 SE"> 300 SE </option>
									<option value="300 SL"> 300 SL </option>
									<option value="300 TE"> 300 TE </option>
									<option value="400 E"> 400 E </option>
									<option value="400 SE"> 400 SE </option>
									<option value="400 SEL"> 400 SEL </option>
									<option value="500 E"> 500 E </option>
									<option value="500 SEC"> 500 SEC </option>
									<option value="500 SEL"> 500 SEL </option>
									<option value="500 SL"> 500 SL </option>
									<option value="600 SEC"> 600 SEC </option>
									<option value="600 SEL"> 600 SEL </option>
									<option value="600 SL"> 600 SL </option>
									<option value="A-Class"> A-Class </option>
									<option value="B-Class"> B-Class </option>
									<option value="C-Class"> C-Class </option>
									<option value="CLA"> CLA </option>
									<option value="CLA-Class"> CLA-Class </option>
									<option value="CL-Class"> CL-Class </option>
									<option value="CLK-Class"> CLK-Class </option>
									<option value="CLS"> CLS </option>
									<option value="CLS-Class"> CLS-Class </option>
									<option value="E-Class"> E-Class </option>
									<option value="G-Class"> G-Class </option>
									<option value="GLA"> GLA </option>
									<option value="GLA-Class"> GLA-Class </option>
									<option value="GLC"> GLC </option>
									<option value="GLC Coupe"> GLC Coupe </option>
									<option value="GL-Class"> GL-Class </option>
									<option value="GLE"> GLE </option>
									<option value="GLE Coupe"> GLE Coupe </option>
									<option value="GLK-Class"> GLK-Class </option>
									<option value="GLS"> GLS </option>
									<option value="M-Class"> M-Class </option>
									<option value="Mercedes-AMG C-Class"> Mercedes-AMG C-Class </option>
									<option value="Mercedes-AMG CLA"> Mercedes-AMG CLA </option>
									<option value="Mercedes-AMG CLS"> Mercedes-AMG CLS </option>
									<option value="Mercedes-AMG E-Class"> Mercedes-AMG E-Class </option>
									<option value="Mercedes-AMG G-Class"> Mercedes-AMG G-Class </option>
									<option value="Mercedes-AMG GLA"> Mercedes-AMG GLA </option>
									<option value="Mercedes-AMG GLC"> Mercedes-AMG GLC </option>
									<option value="Mercedes-AMG GLC Coupe"> Mercedes-AMG GLC Coupe </option>
									<option value="Mercedes-AMG GLE"> Mercedes-AMG GLE </option>
									<option value="Mercedes-AMG GLE Coupe"> Mercedes-AMG GLE Coupe </option>
									<option value="Mercedes-AMG GLS"> Mercedes-AMG GLS </option>
									<option value="Mercedes-AMG GT"> Mercedes-AMG GT </option>
									<option value="Mercedes-AMG S-Class"> Mercedes-AMG S-Class </option>
									<option value="Mercedes-AMG SL"> Mercedes-AMG SL </option>
									<option value="Mercedes-AMG SLC"> Mercedes-AMG SLC </option>
									<option value="Mercedes-AMG SLK"> Mercedes-AMG SLK </option>
									<option value="Mercedes-Maybach S 600"> Mercedes-Maybach S 600 </option>
									<option value="Mercedes-Maybach S-Class"> Mercedes-Maybach S-Class </option>
									<option value="Metris Cargo"> Metris Cargo </option>
									<option value="Metris Passenger"> Metris Passenger </option>
									<option value="Metris WORKER Cargo"> Metris WORKER Cargo </option>
									<option value="Metris WORKER Passenger"> Metris WORKER Passenger </option>
									<option value="R-Class"> R-Class </option>
									<option value="S-Class"> S-Class </option>
									<option value="SL"> SL </option>
									<option value="SLC"> SLC </option>
									<option value="SL-Class"> SL-Class </option>
									<option value="SLK"> SLK </option>
									<option value="SLK-Class"> SLK-Class </option>
									<option value="SLR McLaren"> SLR McLaren </option>
									<option value="SLS-Class"> SLS-Class </option>
									<option value="Sprinter 2500 Cargo"> Sprinter 2500 Cargo </option>
									<option value="Sprinter 2500 Crew"> Sprinter 2500 Crew </option>
									<option value="Sprinter 2500 Passenger"> Sprinter 2500 Passenger </option>
									<option value="Sprinter 3500 Cargo"> Sprinter 3500 Cargo </option>
									<option value="Sprinter 3500 XD Cargo"> Sprinter 3500 XD Cargo </option>
									<option value="Sprinter WORKER Cargo"> Sprinter WORKER Cargo </option>
									<option value="Sprinter WORKER Passenger"> Sprinter WORKER Passenger </option>
								</select>
								</div>
								<div class="form-group-hidden" id="mini-dropdown">
									<label for="name">Model</label>
								<select id="mini" name="mini" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Cooper"> Cooper </option>
									<option value="Cooper Clubman"> Cooper Clubman </option>
									<option value="Cooper Convertible"> Cooper Convertible </option>
									<option value="Cooper D"> Cooper D </option>
									<option value="Cooper Hardtop"> Cooper Hardtop </option>
									<option value="Cooper S"> Cooper S </option>
									<option value="Cooper S Clubman"> Cooper S Clubman </option>
									<option value="Cooper S Convertible"> Cooper S Convertible </option>
									<option value="Cooper S Hardtop"> Cooper S Hardtop </option>
									<option value="Cooper SD"> Cooper SD </option>
									<option value="E"> E </option>
									<option value="First"> First </option>
									<option value="John Cooper Works"> John Cooper Works </option>
									<option value="One"> One </option>
									<option value="One D"> One D </option>
								</select>
								</div>
								<div class="form-group-hidden" id="mitsubishi-dropdown">
									<label for="name">Model</label>
								<select id="mitsubishi" name="mitsubishi" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="3000GT"> 3000GT </option>
									<option value="Diamante"> Diamante </option>
									<option value="Eclipse"> Eclipse </option>
									<option value="Eclipse Cross"> Eclipse Cross </option>
									<option value="Endeavor"> Endeavor </option>
									<option value="Expo"> Expo </option>
									<option value="Galant"> Galant </option>
									<option value="i-MiEV"> i-MiEV </option>
									<option value="Lancer"> Lancer </option>
									<option value="Lancer Evolution"> Lancer Evolution </option>
									<option value="Mighty Max Macro Cab"> Mighty Max Macro Cab </option>
									<option value="Mighty Max Regular Cab"> Mighty Max Regular Cab </option>
									<option value="Mirage"> Mirage </option>
									<option value="Mirage G4"> Mirage G4 </option>
									<option value="Montero"> Montero </option>
									<option value="Montero Sport"> Montero Sport </option>
									<option value="Outlander"> Outlander </option>
									<option value="Outlander PHEV"> Outlander PHEV </option>
									<option value="Outlander Sport"> Outlander Sport </option>
									<option value="Precis"> Precis </option>
									<option value="Raider Double Cab"> Raider Double Cab </option>
									<option value="Raider Extended Cab"> Raider Extended Cab </option>
								</select>
								</div>
								<div class="form-group-hidden" id="nissan-dropdown">
									<label for="name">Model</label>
								<select id="nissan" name="nissan" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="200SX"> 200SX </option>
									<option value="240SX"> 240SX </option>
									<option value="300ZX"> 300ZX </option>
									<option value="350Z"> 350Z </option>
									<option value="370Z"> 370Z </option>
									<option value="Altima"> Altima </option>
									<option value="Armada"> Armada </option>
									<option value="cube"> cube </option>
									<option value="Frontier Crew Cab"> Frontier Crew Cab </option>
									<option value="Frontier King Cab"> Frontier King Cab </option>
									<option value="Frontier Regular Cab"> Frontier Regular Cab </option>
									<option value="GT-R"> GT-R </option>
									<option value="JUKE"> JUKE </option>
									<option value="Kicks"> Kicks </option>
									<option value="King Cab"> King Cab </option>
									<option value="LEAF"> LEAF </option>
									<option value="Maxima"> Maxima </option>
									<option value="Murano"> Murano </option>
									<option value="NV1500 Cargo"> NV1500 Cargo </option>
									<option value="NV200"> NV200 </option>
									<option value="NV200 Taxi"> NV200 Taxi </option>
									<option value="NV2500 HD Cargo"> NV2500 HD Cargo </option>
									<option value="NV3500 HD Cargo"> NV3500 HD Cargo </option>
									<option value="NV3500 HD Passenger"> NV3500 HD Passenger </option>
									<option value="NX"> NX </option>
									<option value="Pathfinder"> Pathfinder </option>
									<option value="Pathfinder Armada"> Pathfinder Armada </option>
									<option value="Quest"> Quest </option>
									<option value="Regular Cab"> Regular Cab </option>
									<option value="Rogue"> Rogue </option>
									<option value="Rogue Select"> Rogue Select </option>
									<option value="Rogue Sport"> Rogue Sport </option>
									<option value="Sentra"> Sentra </option>
									<option value="Stanza"> Stanza </option>
									<option value="Titan Crew Cab"> Titan Crew Cab </option>
									<option value="Titan King Cab"> Titan King Cab </option>
									<option value="TITAN Single Cab"> TITAN Single Cab </option>
									<option value="TITAN XD Crew Cab"> TITAN XD Crew Cab </option>
									<option value="TITAN XD King Cab"> TITAN XD King Cab </option>
									<option value="TITAN XD Single Cab"> TITAN XD Single Cab </option>
									<option value="Versa"> Versa </option>
									<option value="Versa Note"> Versa Note </option>
									<option value="Xterra"> Xterra </option>
								</select>
								</div>
								<div class="form-group-hidden" id="oldsmobile-dropdown">
									<label for="name">Model</label>
								<select id="oldsmobile" name="oldsmobile" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="88"> 88 </option>
									<option value="98"> 98 </option>
									<option value="Achieva"> Achieva </option>
									<option value="Alero"> Alero </option>
									<option value="Aurora"> Aurora </option>
									<option value="Bravada"> Bravada </option>
									<option value="Ciera"> Ciera </option>
									<option value="Custom Cruiser"> Custom Cruiser </option>
									<option value="Cutlass"> Cutlass </option>
									<option value="Cutlass Ciera"> Cutlass Ciera </option>
									<option value="Cutlass Cruiser"> Cutlass Cruiser </option>
									<option value="Cutlass Supreme"> Cutlass Supreme </option>
									<option value="Intrigue"> Intrigue </option>
									<option value="LSS"> LSS </option>
									<option value="Regency"> Regency </option>
									<option value="Silhouette"> Silhouette </option>
									<option value="Toronado"> Toronado </option>
								</select>
								</div>
								<div class="form-group-hidden" id="pontiac-dropdown">
									<label for="name">Model</label>
								<select id="pontiac" name="pontiac" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Aztek"> Aztek </option>
									<option value="Bonneville"> Bonneville </option>
									<option value="Firebird"> Firebird </option>
									<option value="G3"> G3 </option>
									<option value="G5"> G5 </option>
									<option value="G6"> G6 </option>
									<option value="G6 (2009.5)"> G6 (2009.5) </option>
									<option value="G8"> G8 </option>
									<option value="Grand Am"> Grand Am </option>
									<option value="Grand Prix"> Grand Prix </option>
									<option value="GTO"> GTO </option>
									<option value="LeMans"> LeMans </option>
									<option value="Montana"> Montana </option>
									<option value="Montana SV6"> Montana SV6 </option>
									<option value="Solstice"> Solstice </option>
									<option value="Sunbird"> Sunbird </option>
									<option value="Sunfire"> Sunfire </option>
									<option value="Torrent"> Torrent </option>
									<option value="Trans Sport"> Trans Sport </option>
									<option value="Vibe"> Vibe </option>
								</select>
								</div>
								<div class="form-group-hidden" id="porsche-dropdown">
									<label for="name">Model</label>
								<select id="porsche" name="porsche" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="911"> 911 </option>
									<option value="928"> 928 </option>
									<option value="968"> 968 </option>
									<option value="718 Boxster"> 718 Boxster </option>
									<option value="718 Cayman"> 718 Cayman </option>
									<option value="Boxster"> Boxster </option>
									<option value="Carrera GT"> Carrera GT </option>
									<option value="Cayenne"> Cayenne </option>
									<option value="Cayenne Coupe"> Cayenne Coupe </option>
									<option value="Cayman"> Cayman </option>
									<option value="Macan"> Macan </option>
									<option value="Panamera"> Panamera </option>
									<option value="Taycan"> Taycan </option>
								</select>
								</div>
								<div class="form-group-hidden" id="ram-dropdown">
									<label for="name">Model</label>
								<select id="ram" name="ram" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="1500 Classic Crew Cab"> 1500 Classic Crew Cab </option>
									<option value="1500 Classic Quad Cab"> 1500 Classic Quad Cab </option>
									<option value="1500 Classic Regular Cab"> 1500 Classic Regular Cab </option>
									<option value="1500 Crew Cab"> 1500 Crew Cab </option>
									<option value="1500 Quad Cab"> 1500 Quad Cab </option>
									<option value="1500 Regular Cab"> 1500 Regular Cab </option>
									<option value="2500 Crew Cab"> 2500 Crew Cab </option>
									<option value="2500 Mega Cab"> 2500 Mega Cab </option>
									<option value="2500 Regular Cab"> 2500 Regular Cab </option>
									<option value="3500 Crew Cab"> 3500 Crew Cab </option>
									<option value="3500 Mega Cab"> 3500 Mega Cab </option>
									<option value="3500 Regular Cab"> 3500 Regular Cab </option>
									<option value="C/V"> C/V </option>
									<option value="C/V Tradesman"> C/V Tradesman </option>
									<option value="Dakota Crew Cab"> Dakota Crew Cab </option>
									<option value="Dakota Extended Cab"> Dakota Extended Cab </option>
									<option value="ProMaster 1500 Cargo"> ProMaster 1500 Cargo </option>
									<option value="ProMaster 2500 Cargo"> ProMaster 2500 Cargo </option>
									<option value="ProMaster 3500 Cargo"> ProMaster 3500 Cargo </option>
									<option value="ProMaster Cargo Van"> ProMaster Cargo Van </option>
									<option value="ProMaster City"> ProMaster City </option>
									<option value="ProMaster Window Van"> ProMaster Window Van </option>
								</select>
								</div>
								<div class="form-group-hidden" id="renault-dropdown">
									<label for="name">Model</label>
								<select id="renault" name="renault" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Avantime"> Avantime </option>
									<option value="Captur"> Captur </option>
									<option value="Clio"> Clio </option>
									<option value="Duster"> Duster </option>
									<option value="Espace"> Espace </option>
									<option value="Fluence"> Fluence </option>
									<option value="Fuego"> Fuego </option>
									<option value="Kadjar"> Kadjar </option>
									<option value="Koleos"> Koleos </option>
									<option value="Kwid"> Kwid </option>
									<option value="Laguna"> Laguna </option>
									<option value="Latitude"> Latitude </option>
									<option value="Logan"> Logan </option>
									<option value="Luxmore"> Luxmore </option>
									<option value="Medallion"> Medallion </option>
									<option value="Megane"> Megane </option>
									<option value="Modus"> Modus </option>
									<option value="Pulse"> Pulse </option>
									<option value="Rodeo"> Rodeo </option>
									<option value="Safrane"> Safrane </option>
									<option value="Sandero"> Sandero </option>
									<option value="Scenic"> Scenic </option>
									<option value="Sport Spider"> Sport Spider </option>
									<option value="Talisman"> Talisman </option>
									<option value="Thalia"> Thalia </option>
									<option value="Triber"> Triber </option>
									<option value="Twingo"> Twingo </option>
									<option value="Twizy"> Twizy </option>
									<option value="Vel Satis"> Vel Satis </option>
									<option value="Wind"> Wind </option>
									<option value="Zoe"> Zoe </option>
								</select>
								</div>
								<div class="form-group-hidden" id="saab-dropdown">
									<label for="name">Model</label>
								<select id="saab" name="saab" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="900"> 900 </option>
									<option value="9000"> 9000 </option>
									<option value="9-2X"> 9-2X </option>
									<option value="9-3"> 9-3 </option>
									<option value="9-4X"> 9-4X </option>
									<option value="9-5"> 9-5 </option>
									<option value="9-7X"> 9-7X </option>
								</select>
								</div>
								<div class="form-group-hidden" id="saturn-dropdown">
									<label for="name">Model</label>
								<select id="saturn" name="saturn" class="form-control" onchange="getVals(this, 'model_field');"> 
									<option value="" selected="selected"> Choose One </option>
									<option value="Astra"> Astra </option>
									<option value="Aura"> Aura </option>
									<option value="Ion"> Ion </option>
									<option value="L-Series"> L-Series </option>
									<option value="Outlook"> Outlook </option>
									<option value="Relay"> Relay </option>
									<option value="Sky"> Sky </option>
									<option value="S-Series"> S-Series </option>
								</select>
								</div>
								<div class="form-group-hidden" id="scion-dropdown">
									<label for="name">Model</label>
								<select id="scion" name="scion" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="FR-S"> FR-S </option>
									<option value="iA"> iA </option>
									<option value="iM"> iM </option>
									<option value="iQ"> iQ </option>
									<option value="tC"> tC </option>
									<option value="xA"> xA </option>
									<option value="xB"> xB </option>
									<option value="xD"> xD </option>
								</select>
								</div>
								<div class="form-group-hidden" id="subaru-dropdown">
									<label for="name">Model</label>
								<select id="subaru" name="subaru" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Ascent"> Ascent </option>
									<option value="B9 Tribeca"> B9 Tribeca </option>
									<option value="Baja"> Baja </option>
									<option value="BRZ"> BRZ </option>
									<option value="Crosstrek"> Crosstrek </option>
									<option value="Forester"> Forester </option>
									<option value="Impreza"> Impreza </option>
									<option value="Justy"> Justy </option>
									<option value="Legacy"> Legacy </option>
									<option value="Loyale"> Loyale </option>
									<option value="Outback"> Outback </option>
									<option value="SVX"> SVX </option>
									<option value="Tribeca"> Tribeca </option>
									<option value="WRX"> WRX </option>
									<option value="XV Crosstrek"> XV Crosstrek </option>
								</select>
								</div>
								<div class="form-group-hidden" id="suzuki-dropdown">
									<label for="name">Model</label>
								<select id="suzuki" name="suzuki" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Aerio"> Aerio </option>
									<option value="Equator Crew Cab"> Equator Crew Cab </option>
									<option value="Equator Extended Cab"> Equator Extended Cab </option>
									<option value="Esteem"> Esteem </option>
									<option value="Forenza"> Forenza </option>
									<option value="Grand Vitara"> Grand Vitara </option>
									<option value="Kizashi"> Kizashi </option>
									<option value="Reno"> Reno </option>
									<option value="Samurai"> Samurai </option>
									<option value="Sidekick"> Sidekick </option>
									<option value="Swift"> Swift </option>
									<option value="SX4"> SX4 </option>
									<option value="Verona"> Verona </option>
									<option value="Vitara"> Vitara </option>
									<option value="X-90"> X-90 </option>
									<option value="XL7"> XL7 </option>
									<option value="XL-7"> XL-7 </option>
								</select>
								</div>
								<div class="form-group-hidden" id="tatamotors-dropdown">
									<label for="name">Model</label>
								<select id="tatamotors" name="tatamotors" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Altroz"> Altroz </option>
									<option value="Aria"> Aria </option>
									<option value="Bolt"> Bolt </option>
									<option value="Estate"> Estate </option>
									<option value="EVision"> EVision </option>
									<option value="Gravitas"> Gravitas </option>
									<option value="Harrier"> Harrier </option>
									<option value="Hexa"> Hexa </option>
									<option value="Hornbill"> Hornbill </option>
									<option value="Indica"> Indica </option>
									<option value="Indigo Marina"> Indigo Marina </option>
									<option value="Indigo"> Indigo </option>
									<option value="Manza"> Manza </option>
									<option value="Nano"> Nano </option>
									<option value="Nexon"> Nexon </option>
									<option value="Safari"> Safari </option>
									<option value="Safari Storme"> Safari Storme </option>
									<option value="Sierra"> Sierra </option>
									<option value="Spacio"> Spacio </option>
									<option value="Sumo Grande"> Sumo Grande </option>
									<option value="Sumo"> Sumo </option>
									<option value="Telcoline"> Telcoline </option>
									<option value="Tiago"> Tiago </option>
									<option value="Tigor"> Tigor </option>
									<option value="Venture"> Venture </option>
									<option value="Vista"> Vista </option>
									<option value="Winger"> Winger </option>
									<option value="Xenon"> Xenon </option>
									<option value="Zest"> Zest </option>
								</select>
								</div>
								<div class="form-group-hidden" id="tesla-dropdown" >
									<label for="name">Model</label>
								<select id="tesla" name="tesla" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Model 3"> Model 3 </option>
									<option value="Model S"> Model S </option>
									<option value="Model X"> Model X </option>
								</select>
								</div>
								<div class="form-group-hidden" id="toyota-dropdown">
									<label for="name">Model</label>
								<select id="toyota" name="toyota" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="86"> 86 </option>
									<option value="4Runner"> 4Runner </option>
									<option value="Avalon"> Avalon </option>
									<option value="Avalon Hybrid"> Avalon Hybrid </option>
									<option value="Camry"> Camry </option>
									<option value="Camry Hybrid"> Camry Hybrid </option>
									<option value="Celica"> Celica </option>
									<option value="C-HR"> C-HR </option>
									<option value="Corolla"> Corolla </option>
									<option value="Corolla Hatchback"> Corolla Hatchback </option>
									<option value="Corolla Hybrid"> Corolla Hybrid </option>
									<option value="Corolla iM"> Corolla iM </option>
									<option value="Cressida"> Cressida </option>
									<option value="Echo"> Echo </option>
									<option value="FJ Cruiser"> FJ Cruiser </option>
									<option value="GR Supra"> GR Supra </option>
									<option value="Highlander"> Highlander </option>
									<option value="Highlander Hybrid"> Highlander Hybrid </option>
									<option value="Land Cruiser"> Land Cruiser </option>
									<option value="Matrix"> Matrix </option>
									<option value="Mirai"> Mirai </option>
									<option value="MR2"> MR2 </option>
									<option value="Paseo"> Paseo </option>
									<option value="Previa"> Previa </option>
									<option value="Prius"> Prius </option>
									<option value="Prius c"> Prius c </option>
									<option value="Prius Plug-in Hybrid"> Prius Plug-in Hybrid </option>
									<option value="Prius Prime"> Prius Prime </option>
									<option value="Prius v"> Prius v </option>
									<option value="RAV4"> RAV4 </option>
									<option value="RAV4 Hybrid"> RAV4 Hybrid </option>
									<option value="Regular Cab"> Regular Cab </option>
									<option value="Sequoia"> Sequoia </option>
									<option value="Sienna"> Sienna </option>
									<option value="Solara"> Solara </option>
									<option value="Supra"> Supra </option>
									<option value="T100 Regular Cab"> T100 Regular Cab </option>
									<option value="T100 Xtracab"> T100 Xtracab </option>
									<option value="Tacoma Access Cab"> Tacoma Access Cab </option>
									<option value="Tacoma Double Cab"> Tacoma Double Cab </option>
									<option value="Tacoma Regular Cab"> Tacoma Regular Cab </option>
									<option value="Tacoma Xtracab"> Tacoma Xtracab </option>
									<option value="Tercel"> Tercel </option>
									<option value="Tundra Access Cab"> Tundra Access Cab </option>
									<option value="Tundra CrewMax"> Tundra CrewMax </option>
									<option value="Tundra Double Cab"> Tundra Double Cab </option>
									<option value="Tundra Regular Cab"> Tundra Regular Cab </option>
									<option value="Venza"> Venza </option>
									<option value="Xtra Cab"> Xtra Cab </option>
									<option value="Yaris"> Yaris </option>
									<option value="Yaris Hatchback"> Yaris Hatchback </option>
									<option value="Yaris iA"> Yaris iA </option>
								</select>
								</div>
								<div class="form-group-hidden" id="volkswagen-dropdown">
									<label for="name">Model</label>
								<select id="volkswagen" name="volkswagen" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="Arteon"> Arteon </option>
									<option value="Atlas"> Atlas </option>
									<option value="Beetle"> Beetle </option>
									<option value="Cabrio"> Cabrio </option>
									<option value="Cabriolet"> Cabriolet </option>
									<option value="CC"> CC </option>
									<option value="Corrado"> Corrado </option>
									<option value="e-Golf"> e-Golf </option>
									<option value="Eos"> Eos </option>
									<option value="Eurovan"> Eurovan </option>
									<option value="Fox"> Fox </option>
									<option value="GLI"> GLI </option>
									<option value="Golf"> Golf </option>
									<option value="Golf Alltrack"> Golf Alltrack </option>
									<option value="Golf GTI"> Golf GTI </option>
									<option value="Golf III"> Golf III </option>
									<option value="Golf R"> Golf R </option>
									<option value="Golf SportWagen"> Golf SportWagen </option>
									<option value="GTI"> GTI </option>
									<option value="Jetta"> Jetta </option>
									<option value="Jetta GLI"> Jetta GLI </option>
									<option value="Jetta III"> Jetta III </option>
									<option value="Jetta SportWagen"> Jetta SportWagen </option>
									<option value="New Beetle"> New Beetle </option>
									<option value="Passat"> Passat </option>
									<option value="Phaeton"> Phaeton </option>
									<option value="R32"> R32 </option>
									<option value="Rabbit"> Rabbit </option>
									<option value="Routan"> Routan </option>
									<option value="Tiguan"> Tiguan </option>
									<option value="Tiguan Limited"> Tiguan Limited </option>
									<option value="Touareg"> Touareg </option>
									<option value="Touareg 2"> Touareg 2 </option>
								</select>
								</div>
								<div class="form-group-hidden" id="volvo-dropdown">
									<label for="name">Model</label>
								<select id="volvo" name="volvo" class="form-control" onchange="getVals(this, 'model_field');">
									<option value="" selected="selected"> Choose One </option>
									<option value="240"> 240 </option>
									<option value="740"> 740 </option>
									<option value="850"> 850 </option>
									<option value="940"> 940 </option>
									<option value="960"> 960 </option>
									<option value="C30"> C30 </option>
									<option value="C70"> C70 </option>
									<option value="S40"> S40 </option>
									<option value="S60"> S60 </option>
									<option value="S70"> S70 </option>
									<option value="S80"> S80 </option>
									<option value="S90"> S90 </option>
									<option value="V40"> V40 </option>
									<option value="V50"> V50 </option>
									<option value="V60"> V60 </option>
									<option value="V70"> V70 </option>
									<option value="V90"> V90 </option>
									<option value="XC40"> XC40 </option>
									<option value="XC60"> XC60 </option>
									<option value="XC70"> XC70 </option>
									<option value="XC90"> XC90 </option>
								</select>
								</div>
							<div class="form-group-hidden" id="astonmartin-dropdown">
							<label for="name">Make</label>
                                   	              <select id="astonmartin" name="astonmartin" class="form-control" onchange="getVals(this, 'model_field');">
												  <option value="" selected="selected"> Choose One </option>
												  <option value="DB11"> DB11 </option>
												  <option value="DB9"> DB9 </option>
												  <option value="DB9 GT"> DB9 GT </option>
												  <option value="DBS"> DBS </option>
												  <option value="Rapide"> Rapide </option>
												  <option value="Rapide S"> Rapide S </option>
												  <option value="Vanquish"> Vanquish </option>
												  <option value="Vanquish S"> Vanquish S </option>
												  <option value="Vantage"> Vantage </option>
												  <option value="Virage"> Virage </option>
											   </select>
                              
							 </div>

							 
								 <div class="form-group">
                                    <label for="name">Year</label>
                                    <select  id="year" name="year" required="" class="form-control required" onchange="getVals(this, 'year_field');">
					                   <option value="" selected="selected">Choose One</option>
									   <option value="2022">2022</option>
									   <option value="2021">2021</option>
									   <option value="2020">2020</option>
									   <option value="2019">2019</option>
									   <option value="2018">2018</option>
									   <option value="2017">2017</option>
									   <option value="2016">2016</option>
									   <option value="2015">2015</option>
									   <option value="2014">2014</option>
									   <option value="2013">2013</option>
									   <option value="2012">2012</option>
									   <option value="2011">2011</option>
									   <option value="2010">2010</option>
									   <option value="2009">2009</option>
									   <option value="2008">2008</option>
									   <option value="2007">2007</option>
									   <option value="2006">2006</option>
									   <option value="2005">2005</option>
									   <option value="2004">2004</option>
									   <option value="2003">2003</option>
									   <option value="2002">2002</option>
									   <option value="2001">2001</option>
									   <option value="2000">2000</option>
									   <option value="1999">1999</option>
									   <option value="1998">1998</option>
									   <option value="1997">1997</option>
									   <option value="1996">1996</option>
									   <option value="1995">1995</option>
									   <option value="1994">1994</option>
									   <option value="1993">1993</option>
									   <option value="1992">1992</option>
									   <option value="1991">1991</option>
									   <option value="1990">1990</option>
									   <option value="1989">1989</option>
									   <option value="1988">1988</option>
									</select>
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
												<td>Car Details:</td>
												<td><span id="master-dropdown_field"></span>&nbsp;<span id="model_field"></span>&nbsp;<span id="year_field"></span></td>
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