 <!DOCTYPE html>
<html lang="en">

<head>
  <title>Trung and Ahmad</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="css/linearicons.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/nouislider.min.css">
  <link rel="stylesheet" href="css/ion.rangeSlider.css" />
  <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/site.css">
</head>
<body>

<header class="header_area sticky-header"> 
  <?php 
  $show = array("earse-change-password", "cancel");
  include('header.php'); 
  ?>
</header>

<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Change Password</h1>
				<nav class="d-flex align-items-center">
					<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="edit-user-password.php">Change Password</a>
				</nav>
			</div>
		</div>
	</div>
</section>

<div class="container">

<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                //#1
	 require('process-change-password.php');
	}
?>

<div class="col-sm-12 my-5">
	<div class="login_form_inner">
		<form action="edit-user-password.php" method="post" onsubmit="return checked();"
		name="regform" id="regform" class="row login_form ">
			<div class="form-group w-100">
		    <div class="col-sm-12">
		      <input type="email" class="form-control" id="email" name="email" 
			  placeholder="E-mail" maxlength="60" required
			  value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
		    </div>
		  </div>

		  <div class="form-group w-100">
		    <div class="col-sm-12">
		      <input type="password" class="form-control" id="password" name="password" 
			  placeholder="Current Password" minlength="6" maxlength="12" required
			  value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>">
		    </div>
		  </div>
			<div class="form-group  w-100">
		    <div class="col-sm-12">
		      <input type="password" class="form-control" id="password1" name="password1" 
			  placeholder="New Password (Between 6 and 12 characters)" minlength="6" maxlength="12" required
			  value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>">
		    </div>
		  </div>
			<div class="form-group  w-100">
		    <div class="col-sm-12">
		      <input type="password" class="form-control" id="password2" name="password2" 
			  placeholder="Confirm New Password" minlength="6" maxlength="12" required
			  value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>">
		    </div>
		  </div>
			<div class="col-md-12 form-group">
				<input id="submit" class="primary-btn" type="submit" name="submit" value="Register">
			</div>
			</form>
	</div>
</div>


</div>
<footer class="footer-area section_gap">
  <?php include('footer.php'); ?>
</footer>
</body>
</html>
