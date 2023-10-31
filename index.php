<?php
session_start();
error_reporting(0);
include('connect.php');

date_default_timezone_set('Africa/Lagos');
$current_date = date('Y-m-d H:i:s');

if(isset($_POST['btnsubmit']))
{

$pin = $_POST['txtpin'];
$serial = $_POST['txtserial'];

 $sql = "SELECT * FROM scratchcard WHERE pin='" .$pin . "' and serial = '".$serial."' and status = '0'";
     $result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
 ($row = mysqli_fetch_assoc($result));
$_SESSION["serial"] = $row['serial'];
	
header("Location: apply/admission.php"); 
    }else { 
?>
<script>
alert('Invalid Scratch Card Details or Has Already been Used');

</script>
<?php 
         }
    
   }

?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>The University of Zambia|Online Student Admission System</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
<!--
.style1 {color: #000000}
-->
    </style>
    </head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Start Admission Process here </h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Enter receipt details</a></li>
									<img src="grad.jpg" alt="" height="100" width="100"/>

				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
					<?php
			include('form.php');
					?>
					</div>
					
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img height="25%" width="25%" src="images/unzalogo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<ul class="nav navbar-nav navbar-right">
                        <li>
						<a class="nav-item"
						 style="margin-right: 30px;" href="#" 
						 data-toggle="modal"
						  data-target="#login">
						  Apply
						  </a>
						  </li>
						<li class="nav-item"><a class="nav-link" href="user/index.php">Dashboard</a></li>

						</ul>
						
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('confu.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2>The University of Zambia</h2>
	<p class="lead">The University of Zambia is the highest learning institution in Zambia.</p>
											
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url();">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">The University of Zambia</h2>
										<p class="lead" data-animation="animated fadeInLeft">We inculcate positive values and offer service and excellence for a better future. </p>
										
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('gra.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">The University of Zambia</h2>
										<p class="lead" data-animation="animated fadeInLeft">All our courses are accredited by ZUC</p>
										
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Who we are </h3>
                    <p align="justify" class="lead style1">Some thought had been given in the early 1950s to the establishment of a University college in Lusaka, but such proposals as there may have been abandoned in 1953 with the creation of the Federation of Rhodesia and Nyasaland and the related political decision to establish a University college in Salisbury (now Harare). Almost ten years were to pass before the question of a University for the then Northern Rhodesia was formally re-opened. This was done by the government which came into power in December 1962, and which for the first time consisted of a majority from the two nationalist parties, the United National Independence Party and the African National Congress. In March 1963, this Government appointed a Commission under the Chairmanship of Sir John Lockwood, a former Vice-Chancellor of the University of London, to advise on the development of a University. In its report, which was submitted in November 1963, the Lockwood Commission unanimously recommended the establishment of a University in Lusaka.

In January 1964, the Government signified that it accepted the recommendations of the Lockwood Commission and within four months there was an inaugural meeting of the Provisional Council of the University, the body charged with bringing the University into being.
In July 1964, the former Rhodes-Livingstone Institute, a research institute with an international reputation for scholarly research and publications in the field of social anthropology dating back to 1938, came under the jurisdiction of the Provisional Council. In July 1965, Dr. D.G. Anglin, of Carleton University in Canada, was appointed as Vice-Chancellor. A month later, the Oppenheimer College of Social Service was incorporated into the University at a time when extensive additions to its premises in John Mbita Road, in the Ridgeway area of Lusaka, were already well underway.

In October 1965, His Excellency the President of the Republic of Zambia gave his assent to Act Number 66 of 1965, and its commencement on 12 November 1965 of the same year brought the University of Zambia into legal existence.
Under a reconstituted Provisional Council, recruitment of staff had been proceeding apace against the deadline set for the first intake of students, namely 17 March 1966. On that day the first academic session commenced at the Ridgeway Campus.
					</p>
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>The University of Zambia (UNZA) </h4>
                        <h2>Welcomes you to the Online Student Admission System </h2>
                        <p>&nbsp;</p>

                        <a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="confu.jpg" alt="" width="530" height="420" class="img-fluid img-rounded">                    </div>
                    <!-- end media -->
                </div><!-- end col -->
			</div>
		  <div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn"></div>
                    <!-- end media -->
                </div><!-- end col -->
              <!-- end col -->
            </div>
			<!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <!-- end section -->
    <!-- end section -->
    <!-- end section -->
    <!-- end section -->


    

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>