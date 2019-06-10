<?php
include("lib/DBConn.php");
include("lib/variables.php");

if(isset($_GET['id'])){
            $id = $_GET['id'];
    }

     if(isset($_POST['BtnSave']))
    {
		$id = $_POST['BtnSave'];
        $Name = $_POST['Txtname'];
        $Price = $_REQUEST['TxtPrice'];
        $Description = $_POST['TxtDes'];
        $Weight = $_POST['TxtWeight'];
        $CustomerName = $_POST['TxtCustomername'];
        $Email = $_POST['TxtEmail'];
        $Query = "INSERT INTO `customerorder`( `name`, `price`, `description`, `weight`, `customer_name`, `email`) VALUES (' $Name','$Price','$Description','$Weight ','$CustomerName','$Email')";
         $confirm_status = mysqli_query($conn,$Query);
       if($confirm_status)
       {
?>
        <script>
            alert('Thanks for your order,  we will contact you soon! ');
            window.location.href='index.php?success';
            </script>
<?php
    }
    else
    {
        ?>
        <script type="text/javascript">alert('not working');</script>
        <?php
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
	<?php include("includes/header.php") ?>
	<div class="banner-inner">
	</div>
	<?php
	include("includes/nav.php");
	?>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Order Now</li>
	</ol>
	<section class="banner-bottom">

		<h3 class="tittle">Order Now</h3>
		<p class="sub text-center">We love to discuss your idea</p>
		
		<div class="container">
			<div class="contact_grid_right">
				    <?php
                                        
                                    $Query = "SELECT * FROM menu WHERE id = ".$id;
                                              
                                    $result = mysqli_query($conn, $Query);
                                    $row = mysqli_fetch_array($result);
                                    // var_dump($Query);
                                    // exit;
                                ?>
				<form action="#" method="post" enctype="multipart/form-data">
					<div class="row contact_left_grid">
						<div class="col-md-6 con-left">
							
							<div class="form-group" data-aos="fade-down">
								<label for="exampleFormControlInput1">Weight(KG)</label>
								<select name="TxtWeight">
									  <option value="1(kg)">1</option>
									  <option value="2(kg)">2</option>
									  <option value="3(kg)">3</option>
									  <option value="4(kg)">4</option>
									  <option value="5(kg)">5</option>
									  <option value="6(kg)">6</option>
									  <option value="7(kg)">7</option>
									  <option value="8(kg)">8</option>
									  <option value="9(kg)">9</option>
									  <option value="10(kg)">10</option>
									</select><br><br>
									<div class="form-group" data-aos="fade-down">
								<label for="validationCustom01 my-2">Customer Name</label>
								<input class="form-control" type="text" name="TxtCustomername" placeholder="" required="">
							</div><br>
							<div class="form-group" data-aos="fade-down">
								<label for="validationCustom01 my-2"> Email</label>
								<input class="form-control" type="text" name="TxtEmail" placeholder="" required="">
							</div><br><br>
							<input class="form-control" type="submit" value="Add To Cart" name="BtnSave"> 
							</div>
						</div>
						<div class="col-md-6 con-right">
							<div class="form-group" data-aos="fade-down">
								<label for="validationCustom01 my-2">Product Name</label>
								<input class="form-control" type="text" name="Txtname" placeholder="" required="" value="<?php echo $row['title'];?>">
							</div>
							<div class="form-group" data-aos="fade-down">
								<label for="exampleFormControlInput1">Price</label>
								<input class="form-control" type="text" name="TxtPrice" placeholder="" required="" value="<?php echo $row['price'];?>">
							</div>
							<div class="form-group" data-aos="fade-down">
								<label for="textarea">Description</label>
								<textarea id="textarea" placeholder="" name="TxtDes"><?php echo $row['description'];?></textarea>
							</div>
							
							
							
					</div>
				</form>
				<?php
				?>
			</div>
		</div>
	</section>
	<?php include("includes/footer.php") ?>
	<script src="js/jquery-2.2.3.min.js"></script>
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