<?php
include("lib/DBConn.php");
include("lib/variables.php");
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
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
</head>

<body>
	<!--/banner-->
	<!-- header start -->
     <?php include("includes/header.php") ?>
	<!---->
	<!-- header end -->

	<!--/banner-->
	<div class="banner-inner">
	</div>
	<!--//banner-->
	<!--/nav-->
	<div class="header_top" id="home">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php">Menu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="blog.php">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="gallery.php">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="services.php">Services</a>
					</li>
					<!-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
						    aria-expanded="false">
							Drop Down
						</a> -->
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#"></a>
								<a class="dropdown-item" href="gallery.php">Gallery</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="404.php">Services</a>
	
							</div>
					<!-- </li> -->
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>

				</ul>
			</div>
		</nav>

	</div>
	<!--//nav-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Signin</li>
	</ol>
	<!--/main-->
	<section class="banner-bottom">
		<div class="container">
			<h3 class="tittle">Register Now</h3>
			<div class="inner-sec">
				<div class="login p-5 bg-dark mx-auto mw-100">
					<form action="#" method="post">
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="validationCustom01">First name</label>

								<input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationCustom02">Last name</label>
								<input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="exampleInputPassword1 mb-2">Password</label>
								<input type="password" class="form-control" id="password1" placeholder="" required="">
							</div>
							<div class="form-group col-md-6">
								<label for="exampleInputPassword2 mb-2">Confirm Password</label>
								<input type="password" class="form-control" id="password2" placeholder="" required="">
							</div>

						</div>
						<button type="submit" class="btn btn-primary submit mb-4">Register</button>
						<p>
							<a href="#">By clicking Register, I agree to your terms</a>
						</p>
					</form>

				</div>
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
	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
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