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
	<?php include('header.php'); ?>
</header>

<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Sign Up</h1>
				<nav class="d-flex align-items-center">
					<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="sign-up.php">Sign Up</a>
				</nav>
			</div>
		</div>
	</div>
</section>


<div class="container">

  <div class="row">
	  <div class="col-sm-12 my-5 text-center">
	  	<div class='login_form_inner p-3'>
	  	<!--  -->
				<h3 class="h2 text-center" >Thank you for registering</h2>
				<h6 class="text-center">To confirm your registration please verify membership class and pay the membership fee now.</h6>
				<h6 class="text-center">You can use PayPal or a credit/debit card.</h6>
				<p class="text-center" >When you have completed your registration you will be able to login to the member's only pages.</p>
				<?php
				try {
				  require("mysqli_connect.php");
				  $query  = "SELECT * FROM prices";
				  $result = mysqli_query($dbcon, $query); // Run the query.
				  if ($result) { // If it ran OK, display the records.
				    $row        = mysqli_fetch_array($result, MYSQLI_NUM);
				    $yearsarray = array(
				      "Standard one year:",
				      "Standard five year:",
				      "Military one year:",
				      "Under 21 one year:",
				      "Other - Give what you can. Maybe:"
				    );
				    echo '<h6 class="text-center text-danger">Membership classes:</h6>';
				    echo '<h6 class="text-center text-danger small"> ';
				    for ($j = 0, $i = 0; $j < 5; $j++, $i = $i + 2) {
				      
				      echo $yearsarray[$j] . " &pound; " . htmlspecialchars($row[$i], ENT_QUOTES) . " GB, &dollar; " . htmlspecialchars($row[$i + 1], ENT_QUOTES) . " US";
				      
				      if ($j != 4) {
				        if ($j % 2 == 0) {
				          echo "</h6><h6 class='text-center text-danger small'>";
				        } else {
				          echo " , ";
				        }
				      }
				    }
				    echo "</h6>";
				  }
				?>
				<p></p>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="XXXXXXXXXXXXX">
					<div class="form-group row">
				    <label for="level" class="col-sm-4 col-form-label text-right">*Membership Class</label>
				    <div class="col-sm-8">
				    	<select id="level" name="level" class="form-control" required>
				        <option value="0" >-Select-</option>
								<?php
								  $class = htmlspecialchars($_GET['class'], ENT_QUOTES);
								  for ($j = 0, $i = 0; $j < 5; $j++, $i = $i + 2) {
								    
								    echo '<option value="' . htmlspecialchars($row[$i], ENT_QUOTES) . '" ';
								    if ((isset($class)) && ($class == $row[$i])) {
								      
								      echo ' selected ';
								    }
								    echo ">" . $yearsarray[$j] . " " . htmlspecialchars($row[$i], ENT_QUOTES) . " &pound; GB, " . htmlspecialchars($row[$i + 1], ENT_QUOTES) . "&dollar; US</option>";
								  }
								?>
							</select>
						</div>
					</div>
					<div class="form-group row">
				    <div class="col-sm-12">
							<!-- Replace the code below with code provided by PayPal once you obtain a Merchant ID -->
							<input type="hidden" name="currency_code" value="GBP">
							<input style="margin:10px 0 0 40px" type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_buynowCC_LG.gif" name="submit" alt="PayPal  The safer, easier way to pay online.">
							<img alt="" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
							<!-- Replace code above with PayPal provided code -->
						</div>
					</div>
				</form>
				<?php
				} // end try
				catch (Exception $e) // We finally handle any problems here   
				  {
				  // print "An Exception occurred. Message: " . $e->getMessage();
				  print "The system is busy please try later";
				}
				catch (Error $e) {
				//print "An Error occurred. Message: " . $e->getMessage();
				  print "The system is busy please try again later.";
				}
				?>

			<!--  -->
			</div>
	  </div>
	</div>
</div>
<footer class="footer-area section_gap">
  <?php include('footer.php'); ?>
</footer>
</body>
</html>
