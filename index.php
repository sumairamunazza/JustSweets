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
	<meta name="keywords" content="sweets,menue,online sweets, " />
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
	<?php include("includes/header.php") ?>
	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#canrouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-caption">
						<h3>Taste Of Tredition
							<span>Tredtional sweets</span>
						</h3>

					</div>
				</div>
				<div class="carousel-item item2">
					<div class="carousel-caption">
						<h3>Fresh Sweets
							<span>Every day!</span>
						</h3>

					</div>
				</div>
				<div class="carousel-item item3">
					<div class="carousel-caption">
						<h3>Sweets Delight Your
							<span>Local sweets</span>
						</h3>

					</div>
				</div>
				<div class="carousel-item item4">
					<div class="carousel-caption">
						<h3>Sweets
							<span>Symbol Of Delight</span>
						</h3>

					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<?php
	include("includes/nav.php");
	?>
	<section class="banner-bottom">
		<div class="container">
			<h3 class="tittle">Our History</h3>
			<div class="row inner-sec">
				<?php
						$Query = "SELECT * FROM history";
						//echo $Query;
						$result1 = mysqli_query($conn, $Query);
						while ($row = mysqli_fetch_array($result1))
						{
				?>

				<div class="col-lg-6 about-img" data-aos="flip-right">
					<img src="images/ab.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 about-info text-left" data-aos="flip-left" >
					<h4 class="sub-hd mb-4"><?php echo $row['title'];?></h4>
					<p><?php echo $row['description'];?></p>
					
					<div class="view my-4">
					</div>

				</div>
			</div>
			<?php
		}
		?>
		</div>
	</section>
	<section class="grid-info-section" style="background-color: #1cbbb4;">
		<div class="container">
			<h3 class="tittle">Best Seller</h3>
			<div class="row inner-sec">
				<ul id="flexiselDemo1">
					<?php
						$Query = "SELECT * FROM best_seller";
						//echo $Query;
						$result1 = mysqli_query($conn, $Query);
						while ($row = mysqli_fetch_array($result1))
						{
				?>

					<li>
						<div class="blog-item text-center">
							<img src="admin/<?php echo $row['image'];?>" alt=" " class="img-fluid rounded-circle" />
							<div class="floods-text">
								<h3><?php echo $row['title'];?></h3>

							</div>
						</div>
					</li>
					<?php
				}
				?>
					
				</ul>
			</div>
		</div>
	</section>
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
										<a href = "order.php?id=<?php echo $row['id'];?>" class="btn btn-primary read-m">Order Now</a>
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
	<section class="banner-bottom">
		<div class="container">
			<h3 class="tittle">Our Gallery</h3>
			<div class="row inner-sec">
				<?php
					$Query = "SELECT * FROM gallery  ORDER BY id DESC LIMIT 0,6";
					$result1 = mysqli_query($conn, $Query);
					while ($row = mysqli_fetch_array($result1))
					{
				?>
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a href="admin/<?php echo $row['image'];?>">
							<div class="section_1_gallery_grid1">
								<img src="admin/<?php echo $row['image'];?>" alt=" " class="img-fluid" height="350" width="370" />
								<div class="proj_gallery_grid1_pos">
									<h3><?php echo $row['title'];?></h3>
									<p><?php echo $row['description'];?></p>
								</div>
							</div>
						</a>
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
	
	<?php include("includes/footer.php") ?>
	<script src="js/jquery-2.2.3.min.js"></script>
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
	<script src="js/simpleLightbox.js"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>
	<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<script src='js/aos.js'></script>
	<script src="js/aosindex.js"></script>
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
	<script>
		$(document).ready(function () {
			
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<script src="js/bootstrap.js"></script>
</body>
</html>