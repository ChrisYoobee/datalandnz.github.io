<?php require 'header.php'; ?>

<body>

	<div class="content" id="page-top">
		<?php require 'nav.php'; ?>
		<div class="container-fluid">
			<div class="row">
				<div class="splash">
					<div class="wave">
							<img	src="assets/background.svg" alt="background image for splash page" >
					</div>

					<div class="logo-pic col-lg-4 col-xs-12">
						<img class="col-xs-12 pic v-align" src="assets/logo.png" alt="Logo png">
						<p>UX Design <br> Web Development </p>
					</div>
				</div>


			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="ux col-lg-12" >
					<div class="row v-align">
						<div class=" col-xs-10  col-xs-offset-1 smsd">
							<div class="design-text col-xs-12 col-md-6">
								<h2>UX/UI DESIGNER</h2>
								<hr>
								<p>My name is Chris Hughes. I’m a UX/UI designer living in Wellington with a huge passion for technology and the design space. I’m always looking at the latest trends and enjoying learning more about it every-day. I have a mix of education and freelance
									related work I have done over the years to showcase my experience and thought process.
									<br>
									<br> I prvide professional standard web solutions, with a higtthly refined UX process from market research and sketches all the way to finished mockups or finished website, deoending on the clients needs.
								</p>
							</div>
							<div class="ux-icon col-s-12 col-md-6">
								<img src="assets/website-icon.png" alt="website icon">
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class=" dev-container col-lg-12">
					<div class="row v-align">
						<div class="col-xs-10  col-xs-offset-1">
							<div class="developer-text col-xs-12 col-md-6 align-items-start">
								<h2>WEB DEVELOPER</h2>
								<hr>
								<p>My coding skills compliments my design skills. I can code up a website but it also means I make all the designs myself and have the code in the mind so I won’t make the development for the website outlandish with hard or impossible to code designs.
									This also means that I have the ability to see the big picture when working on projects.
									<br>
									<br>​Knowing front-end code adds another powerful toolbox to my arsenal with knowledge in HTML5, CSS3 and Javascript. I have worked with APIs, made multiple web applications and always insure my websites are responsive.
								</p>
							</div>
							<div class="developer-icon col-xs-12 col-md-6">
								<h2>< / ></h2>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="latest-work col-lg-10">
				<div class="row">
					<div class="container-1 col-xs-10 col-md-offset-1">
						<h2>LATEST WORK</h2>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="container-1 col-md-10 col-md-offset-1">
						<div class="work-box col-xs-12 col-md-4 col-sm-6">
							<img src="assets/pocket.png" alt="pocket">
							<h3>Pocket | Teenage Banking App</h3>
							<a href="http://localhost/Portfolio/web-design-development.php#pocket"> <div class=" button btn">See Project</div></a>
						</div>

						<div class="work-box box-2 col-xs-12 col-md-4 col-sm-6">
							<img src="assets/flat-smart.png" alt="Flat smart icon">
							<h3>Flat Smart | Web App</h3>
							<a href="http://localhost/Portfolio/web-design-development.php#flat-smart"> <div class=" button btn">See Project</div></a>
						</div>

						<div class="work-box col-xs-12 col-md-4 col-sm-6">
							<img src="assets/traveler-icon.png" alt="Traveler app icon">
							<h3>Traveller | Web App</h3>
							<a href="http://localhost/Portfolio/web-design-development.php#traveler"> <div class=" button btn">See Project</div></a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="container-1 col-xs-10 col-md-offset-1">
						<div class="work-box col-xs-12 col-md-4 col-sm-6">
							<img src="assets/psl-icon.png" alt="PSL Icon">
							<h3>PSL | Website Re-Design</h3>
							<a href="http://localhost/Portfolio/psl.php"><div class="button btn">See Project</div></a>
						</div>

						<div class="work-box col-xs-12 col-md-4 col-sm-6">
							<img src="assets/LSB-icon.png" alt="LSB Icon">
							<h3>Leeds Street Bakery | Ordering App</h3>
							<a href="http://localhost/Portfolio/web-design-development.php#lsb"> <div class=" button btn">See Project</div></a>
						</div>


					</div>
				</div>

			</div>
		</div>


	</div>


	<div class="container-fluid">
		<div class="row">
			<div class="contact col-lg-12" id="contact-form">
				<div class="row">
					<div class="col-xs-10  col-xs-offset-1">
						<h2>CONTACT</h2>
						<div class="contact-message">
							<p>Looking for someone to make a website or a talented junior designer / developer to join your team?</p>
							<p>Get in touch!</p>
						</div>

						<?php
							// Message Vars
							$msg = '';
							$msgClass = '';

							// Check For Submit
							if(filter_has_var(INPUT_POST, 'submit')){
								// Get Form Data
								$name = htmlspecialchars($_POST['name']);
								$email = htmlspecialchars($_POST['email']);
								$message = htmlspecialchars($_POST['message']);

								// Check Required Fields
								if(!empty($email) && !empty($name) && !empty($message)){
									// Passed
									// Check Email
									if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
										// Failed
										$msg = 'Please use a valid email';
										$msgClass = 'alert-danger';
									} else {
										// Passed
										$toEmail = 'hugheschrisnz@gmail.com';
										$subject = 'Contact Request From '.$name;
										$body = '<h2>Contact Request</h2>
											<h4>Name</h4><p>'.$name.'</p>
											<h4>Email</h4><p>'.$email.'</p>
											<h4>Message</h4><p>'.$message.'</p>
										';

										// Email Headers
										$headers = "MIME-Version: 1.0" ."\r\n";
										$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

										// Additional Headers
										$headers .= "From: " .$name. "<".$email.">". "\r\n";

										if(mail($toEmail, $subject, $body, $headers)){
											// Email Sent
											$msg = 'Your email has been sent';
											$msgClass = 'alert-success';
										} else {
											// Failed
											$msg = 'Your email was not sent';
											$msgClass = 'alert-danger';
										}
									}
								} else {
									// Failed
									$msg = 'Please fill in all fields';
									$msgClass = 'alert-danger';
								}
							}
						?>

						    <div class="modal-body">
						    	<?php if($msg != ''): ?>
						    		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
						    	<?php endif; ?>
						      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							      <div class="form-group">
								      <label>Name</label>
								      <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
							      </div>
							      <div class="form-group">
							      	<label>Email</label>
							      	<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
							      </div>
							      <div class="form-group">
							      	<label>Message</label>
							      	<textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
							      </div>
							      <br>
								  <div class="but">
								  	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
								  </div>

						      </form>
						    </div>


					</div>
				</div>
			</div>

		</div>
	</div>
	</div>


	<footer>
		<p class="v-align">Copyright © 2017 | Designed & Developed by Chris Hughes</p>
		<h5 class="btt v-align"><a href="#page-top">back to top</a></h5>
	</footer>







	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/scrollme/jquery.scrollme.js"></script>
	<script src="js/ScrollTrigger.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>

</html>
