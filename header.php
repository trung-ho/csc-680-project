<div class="main_menu">
	<nav class="navbar navbar-expand-lg navbar-light main_box">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<a class="navbar-brand logo_h" href="index.php">Trung and Ahmad</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
				<ul class="nav navbar-nav menu_nav ml-auto">
					<?php
						if(!isset($show)){
							$show = array("home");
						}
					?>

					<?php 
						if (in_array("home", $show)) { ?> 
							<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
					<?php } ?>

					<?php 
						if (in_array("search", $show)) { ?> 
							<li class="nav-item"><a class="nav-link" href="search.php">Search</a></li>
					<?php } ?>

					<?php 
						if (in_array("users", $show)) { ?> 
							<li class="nav-item"><a class="nav-link" href="users.php">All Users</a></li>
					<?php } ?>

					<?php 
						if (in_array("sign-in", $show)) { ?> 
							<li class="nav-item"><a class="nav-link" href="sign-in.php">Sign In</a></li>
					<?php } ?>

					<?php 
						if (in_array("sign-up", $show)) { ?> 
							<li class="nav-item"><a class="nav-link" href="sign-up.php">Sign Up</a></li>
					<?php } ?>

					<?php 
						if (in_array("address", $show)) { ?> 
							<li class="nav-item"><a class="nav-link" href="search-address.php">Address</a></li>
					<?php } ?>
					
					<?php 
						if (in_array("change-password", $show)) { ?> 
							<li class="nav-item"><a class="nav-link" href="edit-user-password.php">Change Password</a></li>
					<?php } ?>


					<?php 
						if (in_array("earse-sign-up", $show)) { ?> 
							<li class="nav-item"><a class="nav-link" href="sign-up.php">Erase Entries</a></li>
					<?php } ?>

					<?php 
						if (in_array("earse-change-password", $show)) { ?> 
							<li class="nav-item"><a class="nav-link" href="edit-user-password.php">Erase Entries</a></li>
					<?php } ?>

					<?php 
						if (in_array("earse-sign-in", $show)) { ?> 
							<li class="nav-item"><a class="nav-link" href="sign-in.php">Erase Entries</a></li>
					<?php } ?>


					<?php 
						if (in_array("cancel", $show)) { ?> 
							<li class="nav-item"><a class="nav-link" href="index.php">Cancel</a></li>
					<?php } ?>

					<?php 
						if (in_array("sign-out", $show)) { ?> 
							<li class="nav-item"><a class="nav-link" href="sign-out.php">Sign Out</a></li>
					<?php } ?>
					
					<!-- <li class="nav-item submenu dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						 aria-expanded="false">Shop</a>
						<ul class="dropdown-menu">
							<li class="nav-item"><a class="nav-link" href="sign-up.php">Sign In</a></li>
							<li class="nav-item"><a class="nav-link" href="sign-in.php">Sign Up</a></li>
							<li class="nav-item"><a class="nav-link" href="change-password.php">Change Password</a></li>
						</ul>
					</li> -->
					<!-- <li class="nav-item submenu dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						 aria-expanded="false">Blog</a>
						<ul class="dropdown-menu">
							<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
							<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
						</ul>
					</li> -->
					<!-- <li class="nav-item submenu dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						 aria-expanded="false">Pages</a>
						<ul class="dropdown-menu">
							<li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
							<li class="nav-item"><a class="nav-link" href="tracking.html">Tracking</a></li>
							<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
						</ul>
					</li> -->
					<!-- <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
				</ul>
				<!-- <ul class="nav navbar-nav navbar-right">
					<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
					<li class="nav-item">
						<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
					</li>
				</ul> -->
			</div>
		</div>
	</nav>
</div>
<!-- <div class="search_input" id="search_input_box">
	<div class="container">
		<form class="d-flex justify-content-between">
			<input type="text" class="form-control" id="search_input" placeholder="Search Here">
			<button type="submit" class="btn"></button>
			<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
		</form>
	</div>
</div> -->