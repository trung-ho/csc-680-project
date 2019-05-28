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
  $show = array("earse-sign-up", "cancel");
  include('header.php'); 
  ?>
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

<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	 require('create-user.php');
	}
?>

<div class="col-sm-12 my-5">
	<div class="login_form_inner">
		<?php
		try {
		  require_once("mysqli_connect.php");
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
		<form action="sign-up.php" method="post" onsubmit="return checked();" name="regform" id="regform" class="container sign-in-form login_form ">
			<div class="form-group row">
		    <label for="first_name" class="col-sm-4 col-form-label">*First Name:</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" maxlength="30" required
		      value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'], ENT_QUOTES); ?>" >
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="last_name" class="col-sm-4 col-form-label">*Last Name:</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" maxlength="40" required
		      value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'], ENT_QUOTES); ?>" >
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="email" class="col-sm-4 col-form-label">*E-mail:</label>
		    <div class="col-sm-8">
		      <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" maxlength="60" required
		       value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email'], ENT_QUOTES); ?>" >
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="password1" class="col-sm-4 col-form-label">*Password:</label>
		    <div class="col-sm-8">
		      <input type="password" class="form-control" id="password1" name="password1" placeholder="Password" minlength="8" maxlength="12" required
		      value="<?php if (isset($_POST['password1'])) echo htmlspecialchars($_POST['password1'], ENT_QUOTES); ?>" >
		      <span id='message'>Between 8 and 12 characters.</span>
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="password2" class="col-sm-4 col-form-label">*Confirm Password:</label>
		    <div class="col-sm-8">
		      <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password" minlength="8" maxlength="12" required
		      value="<?php if (isset($_POST['password2'])) echo htmlspecialchars($_POST['password2'], ENT_QUOTES); ?>" >
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="level" class="col-sm-4 col-form-label">*Membership Class</label>
		    <div class="col-sm-8">
		      <select id="level" name="level" class="form-control" required>
		        <option value="0" >-Select-</option>
		        <?php
		          for ($j = 0, $i = 0; $j < 5; $j++, $i = $i + 2) {
		            echo '<option value="' . htmlspecialchars($row[$i], ENT_QUOTES) . '" ';
		            if ((isset($_POST['level'])) && ($_POST['level'] == $row[$i])) {
		        ?>
		          selected
		          <?php
		            }
		            echo ">" . $yearsarray[$j] . " " . htmlspecialchars($row[$i], ENT_QUOTES) . " &pound; GB, " . htmlspecialchars($row[$i + 1], ENT_QUOTES) . "&dollar; US</option>";
		          }
		          echo "here";
		        ?>
		      </select>
		    </div>
		  </div>
			<div class="row form-group">
				<div class="col-sm-12">
					<input id="submit" class="primary-btn" type="submit" name="submit" value="Register">
				</div>
			</div>
		</form>
		<?php
		  if (!isset($errorstring)) {
		    echo '<aside class="col-sm-2">';
		    include('includes/info-col-cards.php');
		    echo '</aside>';
		    echo '</div>';
		    echo '<footer class="jumbotron text-center row col-sm-14"
		        style="padding-bottom:1px; padding-top:8px;">';
		  } else {
		    echo '<footer class="jumbotron text-center col-sm-12"
		    style="padding-bottom:1px; padding-top:8px;">';
		  }
		  include('includes/footer.php');
		  echo "</footer>";
		  echo "</div>";
		}
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
	</div>
</div>


</div>
<footer class="footer-area section_gap">
  <?php include('footer.php'); ?>
</footer>
</body>
</html>
