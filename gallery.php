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
	<meta name="keywords" content="Sweets, Sweets Shop, Online line sweets order" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
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
	<?php include("includes/nav.php"); ?>
	<!--//nav-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Gallery</li>
	</ol>
	<!--/main-->
	<!--/Gallry-->
	<section class="banner-bottom">
		<div class="container">
			<h3 class="tittle">Our Gallery</h3>
			<div class="row inner-sec">
				<?php
					$Query = "SELECT * FROM gallery";
					//echo $Query;
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
	<!--//gallery-->
	<!--footer-->
	<?php include("includes/footer.php") ?>
	<!---->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
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