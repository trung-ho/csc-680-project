<?php											
	session_start();
	if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1)) {
		header("Location: login.php");
		exit();
	}
?>
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
  $show = array("sign-out", "change-password", "users", "search", "address");
  include('header.php');
  ?>
</header>

<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Search Address</h1>
				<nav class="d-flex align-items-center">
					<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="search.php">Search Address</a>
				</nav>
			</div>
		</div>
	</div>
</section>

<div class="container">

<div class="col-sm-12 my-5">
	<div class="login_form_inner container">
		<h5>Search for an Address or Phone Number</h5>
		<h5 style="color: red;">Both Names are required items</h5>
		<form action="view_found_addresses.php" method="post" name="searchform" id="searchform">
		  <div class="form-group row">
		    <label for="first_name" class="col-sm-4 col-form-label text-right">First Name:</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="first_name" name="first_name" 
			  placeholder="First Name" maxlength="30" required
			   value=
				"<?php if (isset($_POST['first_name'])) 
				echo htmlspecialchars($_POST['first_name'], ENT_QUOTES); ?>" >
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="last_name" class="col-sm-4 col-form-label text-right">Last Name:</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="last_name" name="last_name" 
			  placeholder="Last Name" maxlength="40" required
			  value=
				"<?php if (isset($_POST['last_name'])) 
				echo htmlspecialchars($_POST['last_name'], ENT_QUOTES); ?>" >
		    </div>
		  </div>
			<div class="form-group row">
		    <div class="col-sm-12">
				<input id="submit" class="btn primary-btn" type="submit" name="submit" value="Search">
		    </div>
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
