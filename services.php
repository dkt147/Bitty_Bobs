
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <?php include 'head.php' ?>

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
  <?php include 'header.php'?>
  <!-- ***** Header Area End ***** -->

  <div class="bread-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 text-center">
              <h2>Services
                <span class="underline"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path fill="#473BF0" d="M15.2,133.3L15.2,133.3c121.9-7.6,244-9.9,366.1-6.8c34.6,0.9,69.1,2.3,103.7,4"></path></svg></span>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
 <?php include  'service-section.php' ?>

  <?php include 'plan.php' ?>

  <div class="footer-dec">
    <img src="assets/images/footer-dec.png" alt="">
  </div>
<?php include 'footer.php' ?>
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