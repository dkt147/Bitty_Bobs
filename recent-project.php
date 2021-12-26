<div id="portfolio" class="our-portfolio section">
    <div class="portfolio-left-dec">
      <img src="assets/images/portfolio-left-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Our Recent <em>NFT Projects</em> &amp; Case Studies <span>for Clients</span></h2>
            <span>Our Portfolio</span>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-portfolio">


          <?php

$con = mysqli_connect("localhost", "root", "", "nft") or die("Query Failed!!!");
$query = "SELECT * FROM `product`";
$res = mysqli_query($con, $query);

if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {

?>
        <!-- <option style="color: black;" value="<?php echo $row['id']; ?>"><?php echo $row['catagory']; ?></option>
       -->
      
        <div class="item" >
              <div class="thumb">
                <img src="Admin/uploads/<?php echo $row['image']; ?>" alt="" style="height: 500px;">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="portfolio-detail.php"><h4><?php echo $row['id']; ?></h4></a>
                    <span><?php echo $row['c_id']; ?></span>
                  </div>
                </div>
              </div>
            </div>
<?php
    }
}
?>
           
            
            
          </div>
        </div>
      </div>
    </div>
  </div>