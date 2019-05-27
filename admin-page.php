<?php                                                                                     
	session_start();
	if (!isset($_SESSION['user_level']) || ($_SESSION['user_level'] != 1)) { 
		header("Location: sign-in.php");
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
  $show = array("change-password", "users", "sign-out", "search");
  include('header.php'); 
  ?>
</header>

<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Admin Page</h1>
				<nav class="d-flex align-items-center">
					<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="admin-page.php">Admin Page</a>
				</nav>
			</div>
		</div>
	</div>
</section>

<div class="container">

<div class="col-sm-12 my-5">
	<div class="login_form_inner">
		<h3>You have permission to:</h3>
		<p>&#9632;Edit and Delete a record</p>
		<p>&#9632;Use the View Members button to page through all the members</p>
		<p>&#9632;Use the Search button to locate a particular member</p>
		<p>&#9632;Use the New Password button to change your password.</p>
	</div>
</div>


</div>
<footer class="footer-area section_gap">
  <?php include('footer.php'); ?>
</footer>
</body>
</html>
