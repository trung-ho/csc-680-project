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
  $show = array("sign-in", "sign-up");
  include('header.php'); 
  ?>
</header>

<?php include('home-banner.php'); ?>

<div class="container">

  <section class="features-area section_gap">
    <div class="container">
      <div class="row features-inner">
        <!-- single features -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-features">
            <div class="f-icon">
              <img src="img/features/f-icon1.png" alt="">
            </div>
            <h6>Free Delivery</h6>
            <p>Free Shipping on all order</p>
          </div>
        </div>
        <!-- single features -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-features">
            <div class="f-icon">
              <img src="img/features/f-icon2.png" alt="">
            </div>
            <h6>Return Policy</h6>
            <p>Free Shipping on all order</p>
          </div>
        </div>
        <!-- single features -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-features">
            <div class="f-icon">
              <img src="img/features/f-icon3.png" alt="">
            </div>
            <h6>24/7 Support</h6>
            <p>Free Shipping on all order</p>
          </div>
        </div>
        <!-- single features -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-features">
            <div class="f-icon">
              <img src="img/features/f-icon4.png" alt="">
            </div>
            <h6>Secure Payment</h6>
            <p>Free Shipping on all order</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end features Area -->

  <!-- Start category Area -->
  <section class="category-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12">
          <div class="row">
            <div class="col-lg-8 col-md-8">
              <div class="single-deal">
                <div class="overlay"></div>
                <img class="img-fluid w-100" src="img/category/c1.jpg" alt="">
                <a href="img/category/c1.jpg" class="img-pop-up" target="_blank">
                  <div class="deal-details">
                    <h6 class="deal-title">Sneaker for Sports</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="single-deal">
                <div class="overlay"></div>
                <img class="img-fluid w-100" src="img/category/c2.jpg" alt="">
                <a href="img/category/c2.jpg" class="img-pop-up" target="_blank">
                  <div class="deal-details">
                    <h6 class="deal-title">Sneaker for Sports</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="single-deal">
                <div class="overlay"></div>
                <img class="img-fluid w-100" src="img/category/c3.jpg" alt="">
                <a href="img/category/c3.jpg" class="img-pop-up" target="_blank">
                  <div class="deal-details">
                    <h6 class="deal-title">Product for Couple</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-8 col-md-8">
              <div class="single-deal">
                <div class="overlay"></div>
                <img class="img-fluid w-100" src="img/category/c4.jpg" alt="">
                <a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
                  <div class="deal-details">
                    <h6 class="deal-title">Sneaker for Sports</h6>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-deal">
            <div class="overlay"></div>
            <img class="img-fluid w-100" src="img/category/c5.jpg" alt="">
            <a href="img/category/c5.jpg" class="img-pop-up" target="_blank">
              <div class="deal-details">
                <h6 class="deal-title">Sneaker for Sports</h6>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
<footer class="footer-area section_gap">
  <?php include('footer.php'); ?>
</footer>
</body>
</html>
