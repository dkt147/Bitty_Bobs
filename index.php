
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include 'head.php'?>
    <title>NFT Selling Website - Home</title>

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
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s" >
    <div class="container" >
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
              <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
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

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="owl-carousel owl-banner">
                <div class="item header-text">
                  <h6>Welcome, My is Andy Smith </h6>
                  <h2>Professional <em>NFT Creator</em> and Digital Assets <span>Artist</span></h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                  <div class="down-buttons">
                    <div class="main-blue-button-hover">
                      <a href="services.php">Our Services</a>
                    </div>
                    <div class="call-button">
                      <a href="#"><i class="fa fa-phone"></i> 6374-348-0340</a>
                    </div>
                  </div>
                </div>
                
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include 'service-section.php'?>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-image">
            <img src="assets/images/p6.png" alt="Two Girls working together">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Grow your Business Revenue with our <em>most Trending</em> <span>NFT Digital</span> Assets</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
            <div class="row">
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="assets/images/service-icon-01.png" alt="">
                    </div>
                    <div class="count-digit">320</div>
                    <div class="count-title">NFT Projects</div>
                    <p>Lorem ipsum dolor sitti amet, consec tetur ipsum.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="assets/images/service-icon-02.png" alt="">
                    </div>
                    <div class="count-digit">640</div>
                    <div class="count-title">Diigital Assets</div>
                    <p>Lorem ipsum dolor sitti amet, consec tetur ipsum.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="assets/images/service-icon-03.png" alt="">
                    </div>
                    <div class="count-digit">120</div>
                    <div class="count-title">Satisfied Clients</div>
                    <p>Lorem ipsum dolor sitti amet, consec tetur ipsum.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 <?php include 'recent-project.php'?>

  <?php include 'plan.php'?>

  
  <div id="subscribe" class="subscribe">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <h2>Enter Your Email to join Our Newsletter</h2>
                <form id="subscribe" action="_email.php" method="POST">
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                  <button type="submit" id="form-submit" class="main-button " name="subscribe">Subscribe</button>
                  <!-- <input type="submit" id="form-submit" class="main-button " name="subscribe" value="Subscribe"/> -->



                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php include 'contact-section.php'?>

  <div class="footer-dec">
    <img src="assets/images/footer-dec.png" alt="">
  </div>
<?php include 'footer.php'?>


  <script>
  // Acc
    $(document).on("click", ".naccs .menu div", function() {
      var numberIndex = $(this).index();

      if (!$(this).is("active")) {
          $(".naccs .menu div").removeClass("active");
          $(".naccs ul li").removeClass("active");

          $(this).addClass("active");
          $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

          var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
          $(".naccs ul").height(listItemHeight + "px");
        }
    });
  </script>
</body>
</html>