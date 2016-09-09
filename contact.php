<?php include 'resources/includes/header.php' ?>

<body id="contact">

<?php include 'resources/includes/navbar.php' ?>

<!-- start intro section -->
<section class="intro">
	<div class="container">

		<div class="row">		
			<div class="col-md-12 text-center">
				<div class="intro-content">
					<h1>Let’s Get in <strong>Touch</strong></h1>
					<h2>If you have any questions, please feel free to drop me a line. </h2>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- end intro section -->

<!-- begin aboutme section -->
<section class="aboutme">
	<div class="container">

		
		<div class="row">

			<div class="col-md-9">
				<h3>Fill in the contactform</h3>
				<p>

					<form method="post" action="resources/scripts/contact.php" name="contactform" class="contactform" id="contactform">

						<fieldset>
							<div class="col-md-6 nopadding">
								<p>Your name *</p>
								<input name="name" type="text" class="author" id="name" size="30" value="" />
								<p>Your email address *</p>
								<input name="email" type="text" class="email" id="email" size="30" value="" />
								<p>Company (Optional)</p>
								<input name="company" type="text" class="author" id="compnay" size="30" value="" />
								
							</div>
							
							<div class="col-md-6 nopadding">
								<p>Your message *</p>
								<textarea name="comments" cols="45" rows="3" class="write-comments" id="comments"></textarea>
								<button type="submit" class="btn btn-border submit" id="submit" value="submit" />
									<i class="fa fa-rocket"></i>
									Send
								</button>
							</div>

						</fieldset>

					</form>

					<div id="message"></div>

				</p>
			</div>

			<div class="col-md-3">
				<div class="sidebar">
					<span class="name">
						Email
						<span class="value">mads@vouzalis.com</span>
					</span>
					<span class="name">
						Telephone
						<span class="value">+4530483603</span>
					</span>
				</div>
			</div>
	
		</div>
	</div>
</section>
<!-- end aboutme section -->

<?php include 'resources/includes/footer.php' ?>

