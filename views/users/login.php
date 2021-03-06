<div class="container view">
	<section id="login">
		<div class="row">
			<center><h1 class="section-title">Login To KirkZay</h1></center>

			<!-- checks username and password, if incorrect throws an error -->

				<?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
	                <div class="alert alert-danger">
	                    <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
	                </div>
	              <?php unset($_SESSION['ERROR_MESSAGE']); ?>
	            <?php endif; ?>

	        <!-- checking to see if user is already signed in, if so success -->
	            <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
	                <div class="alert alert-success">
	                    <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
	                </div>
	              <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
	            <?php endif; ?>


			<div class="col-md-6 col-md-offset-3">
				<p>Login with your email/username and password</p>
				<form method="POST" action="" data-validation data-required-message="This field is required">
					<div class="form-group">
					    <input type="text" class="form-control" id="email_user" name="email_user" placeholder="Email or Username" data-required>
					</div>
					<div class="form-group">
					    <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<button type="/login" class="btn btn-warning">Login</button>
						</div>
						<div class="col-sm-6 text-right">
							<button href="submit" class="btn btn-success">Go To Signup</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>
