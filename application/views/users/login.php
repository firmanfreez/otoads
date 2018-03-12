<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Otoads</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<?php if ($this->session->flashdata('login_failed')): ?>
			<?php echo '<div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
													<div class="alert-icon">
															<span class="icon-checkmark-circle"></span>
													</div>
													'.$this->session->flashdata('login_failed').'
													<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
											</div>' ?>
		<?php endif; ?>
		<?php if ($this->session->flashdata('user_loggedout')): ?>
			<?php echo '<div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
													<div class="alert-icon">
															<span class="icon-checkmark-circle"></span>
													</div>
													'.$this->session->flashdata('user_loggedout').'
													<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
											</div>' ?>
		<?php endif; ?>
		<div class="container-login100">
			<div class="wrap-login100">
				<?php echo form_open('users/login'); ?>
					<span class="login100-form-title p-b-26">
						<?= $title ?>
					</span>
					<span class="login100-form-title p-b-48">
						<i>OTOADS</i>
					</span>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="email" required autofocus>
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="password" required autofocus>
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

  <!-- <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h1 class="text-center"><?php echo $title; ?></h1>
        <div class="form-group">
          <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="button">Login</button>
    </div>
  </div> -->
