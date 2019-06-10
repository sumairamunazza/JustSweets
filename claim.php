<?php
include("lib/DBConn.php");
include("lib/variables.php");
?>
<?php
     if(isset($_REQUEST['BtnSave']))
    {
		
				$username = $_POST['username'];
				$email = $_POST['email'];
				
				$to_email = "sumairamunazza38@gmail.com,".$_POST['Txtemail'];
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'From:JustSweet <info@nextgensol.net>' . "\r\n";
				$subject = "Contact Us";
				$emailmessage =  $_REQUEST['formfildsname header']."\r\n".
				"your Actual Product :".$_REQUEST['TxtOrder']."\r\n".
				"your Wrong Order :".$_REQUEST['TxtWrong']."\r\n".
				"your Email :".$_REQUEST['TxtEmail']."\r\n".
				"We have recieved your Query we will contact you soon";
               
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
                
              
		
				$Order = $_REQUEST['TxtOrder'];
				$Wrong = $_REQUEST['TxtWrong'];
				$Email = $_REQUEST['TxtEmail'];
				$Query = "INSERT INTO claim ".
				"(actual_order,wrong_order,email) "."VALUES ".
				"('$Order','$Wrong','$Email')";
				mysqli_query($conn, $Query);
		//echo $Query;
		//die;
?>
        <script>
            alert('Record has been Successfully Inserted in Database');
            window.location.href='claim.php?success';
            </script>
<?php
    }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?php echo SiteTitle; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="online sweets,order sweets ,manue" />
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
		<li class="breadcrumb-item active">Claim Now</li>
	</ol>
	<!--/main-->
	<section class="banner-bottom">

		<h3 class="tittle">Claim Now</h3>
		<p class="sub text-center">If we place a wrong order then no need to panic...</p>
		
		<div class="container">
			<div class="contact_grid_right">
				<form action="#" method="post">
					<div class="row contact_left_grid">
						<div class="col-md-6 con-left">
							<div class="form-group" data-aos="fade-down">
								<label for="validationCustom01 my-2">Actual Order</label>
								<input class="form-control" type="text" name="TxtOrder" placeholder="" required="">
							</div>
							<div class="form-group" data-aos="fade-down">
								<label for="exampleFormControlInput1">Wrong Order</label>
								<input class="form-control" type="text" name="TxtWrong" placeholder="" required="">
							</div>
							</div>
						<div class="col-md-6 con-right">
							<div class="form-group" data-aos="fade-down">
								<label for="validationCustom03 my-2">Email</label>
								<input class="form-control" type="email" name="TxtEmail" placeholder="" required="">
							</div><br>
							<input class="form-control" type="submit" value="Claim Now" name="BtnSave">

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