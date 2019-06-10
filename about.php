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
	<meta name="keywords" content="online sweets,sweets products,special sweets" />
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
		<li class="breadcrumb-item active">About</li>
	</ol>
	<!--/main-->
	<section class="banner-bottom">
		<div class="container">
			<h3 class="tittle">About Us</h3>
			<div class="row inner-sec">
				<?php
						$Query = "SELECT * FROM about";
						//echo $Query;
						$result1 = mysqli_query($conn, $Query);
						while ($row = mysqli_fetch_array($result1))
						{
				?>
				<div class="col-lg-6 about-img" data-aos="flip-right">
					<img src="admin/<?php echo $row['imagelocation'];?>" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 about-info text-left" data-aos="flip-left" >
					<h4 class="sub-hd mb-4"><?php echo $row['title'];?></h4>
					<p><?php echo $row['description'];?></p>
					<div class="view my-4">
					</div>

				</div>
				<?php
			}
			?>
			</div>
		</div>
	</section>
	<!--/seller-->
	
	<!--//seller-->
	<section class="banner-bottom">
		<div class="container-fluid">
			<h3 class="tittle">Our Experts</h3>
			<div class="row inner-sec team-sec">
				<?php
						$Query = "SELECT * FROM experts";
						//echo $Query;
						$result1 = mysqli_query($conn, $Query);
						while ($row = mysqli_fetch_array($result1))
						{
				?>
				<div class="col-md-6 team-main">
					<div class="row">
						
						<div class="col-md-5 team-img" data-aos="flip-right">
								<img src="admin/<?php echo $row['image'];?>" alt=" " class="img-fluid" />
						</div>

						<div class="col-md-7 team-info text-left" data-aos="flip-left">
								<h4><?php echo $row['name'];?> </h4>
								<h6><?php echo $row['title'];?></h6>
								<p><?php echo $row['description'];?> </p>
								<br><br><br>
						</div>
					</div>
				</div>
				<br><br>
				<?php
					}
				?>

			</div>
		</div>

	</section>
	
	<!--//main-->
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