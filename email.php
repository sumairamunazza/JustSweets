<?php
include("lib/DBConn.php");
include("lib/variables.php");
?>
<?php
if(isset($_REQUEST['submit']))
{
				$username = $_POST['username'];
				$email = $_POST['email'];
				
				$to_email = "sumairamunazza38@gmail.com,".$_POST['email'];
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'From:JustSweet <info@nextgensol.net>' . "\r\n";
				$subject = "Contact Us";
				$emailmessage =  $_REQUEST['formfildsname header']."\r\n".
				"your Username :".$_REQUEST['username']."\r\n".
				"your Email :".$_REQUEST['email']."\r\n".
				"We will contact you soon";
               
                $sendmaiil = mail($to_email,$subject,$emailmessage,$headers);
                if($sendmaiil)
                {?>
                <div id="email_hassuccessfully_sent">
                <h2 align="center" style="color:#0C3; padding: 20px 0px 0px 0px;">
                <?PHP echo "Your Email Has Been Sent Successfully!";?>
                </h3>
                </div>
                <?php
                }
                else
                {
                echo "<h1>Sorry Email Fiald</h1>";	
                }
                
                }
    	
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?php echo SiteTitle; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Baked a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
</head>

<body>
	<!--/banner-->
	<?php include("includes/header.php") ?>
	<!--/banner-->
	<div class="banner-inner">
	</div>
	<!--//banner-->
	<!--/nav-->
	<?php
	include("includes/nav.php");
	?>
	<!--//nav-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Mail Us</li>
	</ol>
	<!--/main-->
	<section class="banner-bottom">

		<h3 class="tittle">Contact Us</h3>
		<p class="sub text-center">We love to discuss your idea</p>
		<div class="contact-map inner-sec">

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
			    class="map" style="border:0" allowfullscreen=""></iframe>
		</div>
		<div class="ad-inf-sec">
			<div class="container">
				<div class="address row">

					<div class="col-lg-4 address-grid" data-aos="zoom-in">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Address</h6>
								<p> Sahiwal , Pakistan

								</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 address-grid" data-aos="zoom-in">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Email</h6>
								<p>Email :
									<a href="mailto:example@email.com"> mail@justsweet.com</a>

								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid" data-aos="zoom-in">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Phone</h6>
								<p>0301 1234567</p>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="contact_grid_right">
				<form action="#" method="post">
					<div class="row contact_left_grid">
						<div class="col-md-6 con-left">
							<div class="form-group" data-aos="fade-down">
								<label for="validationCustom01 my-2">Name</label>
								<input class="form-control" type="text" name="username" placeholder="" required="">
							</div>
							<div class="form-group" data-aos="fade-down">
								<label for="exampleFormControlInput1">Email</label>
								<input class="form-control" type="email" name="email" placeholder="" required="">
							</div>
							
							<input class="form-control" type="submit" value="Email" name="submit">

						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!--//main-->
	<!--footer-->
	<?php include("includes/footer.php") ?>
	<!---->

	<!---->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- /js files -->
	<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<script src='js/aos.js'></script>
	<script src="js/aosindex.js"></script>
	<!-- //js files -->
	<!--/ start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!--// end-smoth-scrolling -->
	<script>
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<!-- //Custom-JavaScript-File-Links -->
	<script src="js/bootstrap.js"></script>


</body>

</html>