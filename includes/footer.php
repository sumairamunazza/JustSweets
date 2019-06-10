<?php
if (isset($_REQUEST['btnsub']))
	{
		$query = "INSERT INTO newsletter".
			" (email)".
			" VALUES ('".addslashes($_REQUEST['txtemail'])."')";
		mysqli_query($conn, $query);
	}
?>
<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-grid text-left" data-aos="fade-right">
					<h3>About US</h3>
					<p><?php echo SiteTitle; ?> delicious sweets and are hand crafted to perfection; we have accentuated traditional, centuries old recipes, fusing British seasonal produce into the very heart of our quality to give you an unforgettable taste.</p>
					
				</div>
				<!-- subscribe -->
				<div class="col-lg-8 subscribe-main footer-grid text-left" data-aos="fade-left">
					<h2>Subscribe for hot updates</h2>
					<div class="subscribe-main text-left">
						<div class="subscribe-form">
							<form action="#" method="post" class="subscribe_form">
								<input class="form-control" type="email" placeholder="Enter your email..." required="" name="txtemail">
								<button type="submit" class="btn btn-primary submit" name="btnsub">Submit</button>
							</form>

						</div>
						<p>We respect your privacy.No spam ever!</p>
					</div>
					<!-- //subscribe -->
					<div class="footer-cpy text-left">
						<div class="copyrighttop">
							<ul>
								<li class="mx-lg-3 mx-md-2 mx-1">
									<a class="facebook" href="#">
										<i class="fab fa-facebook-f"></i>
										<span>Facebook</span>
									</a>
								</li>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-twitter"></i>
										<span>Twitter</span>
									</a>
								</li>
								<li class="mx-lg-3 mx-md-2 mx-1">
									<a class="facebook" href="#">
										<i class="fab fa-google"></i>
										<span>Google</span>
									</a>
								</li>
								
							</ul>
						</div>
						<div class="copyrightbottom">
							<p>© 2018 All Rights Reserved | Developed by
								<a href="#"><?php echo DeveloperName; ?></a>
							</p>

						</div>
					</div>
				</div>
			</div>
			<!-- //footer -->
		</div>
	</footer>