
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>NFT Portfolio Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="assets/images/logo.png">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="index.php" >Home</a></li>
              <li class="scroll-to-section"><a href="services.php">Services</a></li>
              <li class="scroll-to-section"><a href="about.php">About</a></li>
              <li class="scroll-to-section"><a href="portfolio.php">Portfolio</a></li>
              <li class="scroll-to-section"><div class="main-red-button-hover"><a href="contact.php">Contact Us Now</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="bread-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 text-center">
              <h2>Contact Us
                <span class="underline"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path fill="#473BF0" d="M15.2,133.3L15.2,133.3c121.9-7.6,244-9.9,366.1-6.8c34.6,0.9,69.1,2.3,103.7,4"></path></svg></span>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'contact-section.php'?>
  <?php include 'newsletter.php'?>
<?php include 'footer.php'?>
</body>
</html>