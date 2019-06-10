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
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
	<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
</head>

<body>
	<!--/banner-->
	<!-- header start -->
	<?php include("includes/header.php") ?>
	<!-- header end -->
	<div class="banner-inner">
	</div>
	<?php
	include("includes/nav.php");
	?>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Menu</li>
	</ol>
	<!--/main-->
	
	<!--/Menu-->
	<section class="banner-bottom menu" id="menu">
		<div class="container">
			<h3 class="tittle">Our Menu</h3>
			<div class="row inner-sec">
				<div class="tabs">
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<div class="menu-grids my-lg-4 my-md-2">
								<div class="row inner-menu mt-4">
									<?php
												$Query = "SELECT * FROM menu";
												//echo $Query;
												$result1 = mysqli_query($conn, $Query);
												while ($row = mysqli_fetch_array($result1))
												{
											?>
									<div class="col-md-6 <?php echo $row['classname'];?>" data-aos="fade-down">
										<div class="row mt-2">
											<div class="col-md-5 menu-img">
												<img src="admin/<?php echo $row['image'];?>" class="img-fluid rounded-circle" alt="">
											</div>
											<div class="col-md-7 menu-img-info mt-4 mt-md-2">
												<h5><?php echo $row['title'];?></h5>
												<p class="sub-meta mt-2">

													<?php echo $row['description'];?>
												</p>
												<p class="sub-meta mt-2">

													<h5>RS:<?php echo $row['price'];?></h5>
												</p>
												<div class="read">
						<a href="order.php" class="btn btn-primary read-m">Order Now</a>
					</div>
											</div>
										</div>

									</div>
									<?php
										}
									?>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//Menu-->

	
	<!--//inner-content-->
	<!--footer-->
	<?php include("includes/footer.php") ?>
	<!---->

	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- /flexisel -->
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<script src="js/jquery.flexisel.js"></script>
	<!-- //flexisel -->
	<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>

	<!-- //flexSlider -->

	<!-- simpleLightbox -->
	<script src="js/simpleLightbox.js"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>
	<!-- //simpleLightbox -->
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