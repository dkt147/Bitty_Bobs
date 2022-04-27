<?php

include 'connection.php';
$query = "SELECT * FROM `header`";
$res = mysqli_query($con, $query);

                      if (mysqli_num_rows($res) > 0) {
                          while ($row = mysqli_fetch_assoc($res)) {
            $head1 = $row['h1'];
            $head2 = $row['h2'];
                                }
                        }



            $query = "SELECT * FROM `team`";
            $res = mysqli_query($con, $query);

                                  if (mysqli_num_rows($res) > 0) {
                                      while ($row = mysqli_fetch_assoc($res)) {
                        $team_data = $row['detail'];
                                            }
                                    }
                                    
                                    
                        $query = "SELECT * FROM `about`";
            $res = mysqli_query($con, $query);

                                  if (mysqli_num_rows($res) > 0) {
                                      while ($row = mysqli_fetch_assoc($res)) {
                        $about_data1 =  $row['detail1'];
                        $about_data2 =  $row['detail2'];
                        $about_data3 =  $row['detail3'];
                                            }
                                    }     
                                    
                                    
                       $query = "SELECT * FROM `roadmap`";
            $res = mysqli_query($con, $query);

                                  if (mysqli_num_rows($res) > 0) {
                                      while ($row = mysqli_fetch_assoc($res)) {
                        $roadmap_data1= $row['r1'];
                        $roadmap_data2= $row['r2'];
                        $roadmap_data3= $row['r3'];
                        $roadmap_data4= $row['r4'];
                        $roadmap_data5= $row['r5'];
                        $roadmap_data6= $row['r6'];
                        $roadmap_data7= $row['r7'];
                                            }
                                    }      
                                    
                                    



                                         
                       $query = "SELECT * FROM `traits`";
                       $res = mysqli_query($con, $query);
           
                                             if (mysqli_num_rows($res) > 0) {
                                                 while ($row = mysqli_fetch_assoc($res)) {
                                   $t1= $row['t1'];$t2= $row['t2'];
                                   $t1_1= $row['t1_1'];
                                   $t1_2= $row['t1_2'];
                                   $t1_3= $row['t1_3'];
                                   $t1_4= $row['t1_4'];
                                   $t1_5= $row['t1_5'];

                                   $t2_1= $row['t2_1'];
                                   $t2_2= $row['t2_2'];
                                   $t2_3= $row['t2_3'];

                                   
                                   $t3= $row['t3'];
                                   $c3= $row['c3'];
                                   $t4= $row['t4'];
                                   $c4= $row['c4'];
                                   $t5= $row['t5'];
                                   $c5= $row['c5'];
                                   $t6= $row['t6'];
                                   $c6= $row['c6'];
                                   $t7= $row['t7'];
                                   $c7= $row['c7'];
                                   $t8= $row['t8'];
                                   $c8= $row['c8'];
                                   $t9= $row['t9'];
                                   $c9= $row['c9'];
                                   $t10= $row['t10'];
                                   $c10= $row['c10'];
                                   $t11= $row['t11'];
                                   $c11= $row['c11'];
                                   $t12= $row['t12'];
                                   $c12= $row['c12'];
                                   $t13= $row['t13'];
                                   $c13= $row['c13'];


                                                       }
                                               }    
                                    
                                    
                                    
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Bitty Bobs</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
<link rel="stylesheet" href="assets/css/stylesheet.css">
<link rel="stylesheet" href="assets/css/main_menu.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>
<body>
<header>
<div class="container">
<div class="nav-container">
<div class="brand">
<a href="index.html"><img src="assets/images/logo.png" alt="Brand"></a>
</div>
<nav>
<div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
<ul class="nav-list">
  <li>
    <a href="#">Home</a>
  </li>
  <li>
    <a href="#about">About</a>
  </li>
  <li>
    <a href="#roadmap">Roadmap</a>
  </li>
  <li>
    <a href="#traits">Traits</a>
  </li>
  <li>
    <a href="#team">Team</a>
  </li>
  <li class="contact_btn mgl_65">
    <a href="#contact_us">Contact Us</a>
  </li>
  <li class="opensea_btn mgl_15">
    <a href="https://opensea.io/collection/bitty-bob">OpenSea</a>
  </li>
</ul>
</nav>
</div>
</div>
</header>
<section class="slider_sec">
<div class="container">
<div class="sliderBox">
<div class="header_content">
<h1><?php echo $head1?></h1>
<p><?php echo $head2?></p>
<div class="btns_group">
  <a href="#contact_us">Contact Us</a>
  <a href="https://opensea.io/collection/bitty-bob">OpenSea</a>
</div>
</div>
<div class="sliderMain">
<div class="circle_sm"><img src="assets/images/circle_sm.png"></div>
<div class="swiper-5 swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="slide_img">
        <img src="assets/images/1.png">
      </div>
    </div>
    <div class="swiper-slide">
      <div class="slide_img">
        <img src="assets/images/2.png">
      </div>
    </div>
    <div class="swiper-slide">
      <div class="slide_img">
        <img src="assets/images/3.png">
      </div>
    </div>
    <!--<div class="swiper-slide">-->
    <!--  <div class="slide_img">-->
    <!--    <img src="assets/images/img1.png">-->
    <!--  </div>-->
    <!--</div>-->
  </div>
  <div class="swiper-pagination"></div>
</div>
</div>
</div>
</div>    
</section>

<div id="about" style="float: left; width:100%"></div>
<section class="about_sec">
<div class="container">
<div class="aboutBox">
<div class="about_img">
<div class="circle_lg"><img src="assets/images/circle_lg.png"></div>
<img class="women" src="assets/images/women.png">
</div>
<div class="about_content">
<div class="about_txt">
  <h2>About</h2>
  <p><?php echo $about_data1?>  </p>
  
  <p><?php echo $about_data2?>  </p>
    
    <p><?php echo $about_data3?>  </p>
  <div class="btns_group">
      
  <a href="https://discord.com/invite/Sq6ERK7nw4"><span>Discord</span> <img src="assets/images/icon1.png"></a>
  <a href="https://twitter.com/bittybobs"><span>Twitter</span> <img src="assets/images/icon2.png"></a>
</div>
</div>
</div>
</div>
</div>
</section>

<div id="traits" style="float: left; width:100%"></div>
<section class="traits_sec">
<div class="container">
<div class="traits_heading">
<h2>Traits</h2>
<p>The dolls are distinguished by their wide range of hand-drawn traits as they were designed with <br>representation at the forefront. Our three tiers of traits include</p>
</div>
<div class="traitsBoxs">
<div class="traitsBox">
<div class="traits_cat">
  <h4><?php echo $t1?></h4>
</div>
<div class="traits_content">
  <div class="traits_txt">
    <p><?php echo $t1_1?></p>
    <p><?php echo $t1_2?></p>
    <p><?php echo $t1_3?></p>
    <p><?php echo $t1_4?></p>
    <p><?php echo $t1_5?></p>
  </div>
</div>
</div>
<div class="traitsBox">
  <div class="traits_cat">
    <h4><?php echo $t2?></h4>
  </div>
  <div class="traits_content">
    <div class="traits_txt">
      <p><?php echo $t2_1?></p>
      <p><?php echo $t2_2?></p>
      <p><?php echo $t2_3?></p>
    </div>
  </div>
</div>
</div>
</div>
<div class="container">
<div class="super_traitsBoxs">
<div class="super_traits_heading">
<h3>Super Rare Traits</h3>
</div>
<div class="super_traitsBox">
<ul>
  <li>
    <div class="dollBox">
      <div class="doll_info">
        <p><?php echo $t3?></p>
      </div>
      <div class="doll_numbers">
        <p><?php echo $c3?> dolls</p>
      </div>
    </div>
  </li>
  <li>
    <div class="dollBox">
      <div class="doll_info">
        <p><?php echo $t4?></p>
      </div>
      <div class="doll_numbers">
        <p><?php echo $c4?> dolls</p>
      </div>
    </div>
  </li>
  <li>
    <div class="dollBox">
      <div class="doll_info">
        <p><?php echo $t5?></p>
      </div>
      <div class="doll_numbers">
        <p><?php echo $c5?> dolls</p>
      </div>
    </div>
  </li>
  <li>
    <div class="dollBox">
      <div class="doll_info">
        <p><?php echo $t6?></p>
      </div>
      <div class="doll_numbers">
        <p><?php echo $c6?> dolls</p>
      </div>
    </div>
  </li>
  <li>
    <div class="dollBox">
      <div class="doll_info">
        <p><?php echo $t7?></p>
      </div>
      <div class="doll_numbers">
        <p><?php echo $c7?> dolls</p>
      </div>
    </div>
  </li>
  <li>
    <div class="dollBox">
      <div class="doll_info">
        <p><?php echo $t8?></p>
      </div>
      <div class="doll_numbers">
        <p><?php echo $c8?> dolls</p>
      </div>
    </div>
  </li>
  <li>
    <div class="dollBox">
      <div class="doll_info">
        <p><?php echo $t9?></p>
      </div>
      <div class="doll_numbers">
        <p><?php echo $c9?> dolls</p>
      </div>
    </div>
  </li>
  <li>
    <div class="dollBox">
      <div class="doll_info">
        <p><?php echo $t10?></p>
      </div>
      <div class="doll_numbers">
        <p><?php echo $c10?> dolls</p>
      </div>
    </div>
  </li>
  <li>
    <div class="dollBox">
      <div class="doll_info">
        <p><?php echo $t11?></p>
      </div>
      <div class="doll_numbers">
        <p><?php echo $c11?> dolls</p>
      </div>
    </div>
  </li>
  <li>
    <div class="dollBox">
      <div class="doll_info">
        <p><?php echo $t12?></p>
      </div>
      <div class="doll_numbers">
        <p><?php echo $c12?> dolls</p>
      </div>
    </div>
  </li>
  <li>
    <div class="dollBox">
      <div class="doll_info">
        <p><?php echo $t13?></p>
      </div>
      <div class="doll_numbers">
        <p><?php echo $c13?> dolls</p>
      </div>
    </div>
  </li>
</ul>
</div>
</div>
<div class="dollBoxs">
<p>Bitty Bobs were designed to represent all women. Every NFT you purchase from our collection is more than just an investment, it’s your digital identity</p>
<div class="circle_sm"><img src="assets/images/circle_sm.png"></div>
<div class="dollsBox">

<?php

include 'connection.php';
            $query = "SELECT * FROM `product`";
            $res = mysqli_query($con, $query);

                                  if (mysqli_num_rows($res) > 0) {
                                      while ($row = mysqli_fetch_assoc($res)) {
                                  ?>

<div class="doll_img">
  <img src="Admin/uploads/<?php echo $row['image']?>" style="height: 482;width:600">
</div>

<?php
                                      }
                                    }
?>
<!-- <div class="doll_img">
  <img src="assets/images/img3.jpg">
</div>
<div class="doll_img">
  <img src="assets/images/img4.jpg">
</div>
<div class="doll_img">
  <img src="assets/images/img5.jpg">
</div>
<div class="doll_img">
  <img src="assets/images/img6.jpg">
</div> -->

</div>
</div>
</div>
</section>

<div id="roadmap" style="float: left; width:100%"></div>
<section class="roadmap_sec">
<div class="container">
<div class="roadmap_heading">
<h2><span>Roadmap</span></h2>
<p>Fostering a safe and positive community</p>
</div>
<div class="roadmap_timeline">
<div class="timelineBox_L">
<div class="timeline_txt">
  
<p><?php echo $roadmap_data1?>  </p>
</div>
<div class="emptyBox"></div>
</div>
<div class="timeline_img_L">
<img src="assets/images/timline_L.png">
</div>
</div>
<div class="roadmap_timeline mrg_0">
<div class="timelineBox_R">
<div class="emptyBox"></div>
<div class="timeline_txt">
<p><?php echo $roadmap_data2?>  </p>
</div>
</div>
<div class="timeline_img_R">
<img src="assets/images/timline_R.png">
</div>
</div>
<div class="roadmap_timeline mrg_0">
<div class="timelineBox_L">
<div class="timeline_txt">
<p><?php echo $roadmap_data3?>  </p>
</div>
<div class="emptyBox"></div>
</div>
<div class="timeline_img_L">
<img src="assets/images/timline_L.png">
</div>
</div>
<div class="roadmap_timeline mrg_0">
<div class="timelineBox_R">
<div class="emptyBox"></div>
<div class="timeline_txt">
<p><?php echo $roadmap_data4?>  </p>
</div>
</div>
<div class="timeline_img_R">
<img src="assets/images/timline_R.png">
</div>
</div>
<div class="roadmap_timeline mrg_0">
<div class="timelineBox_L">
<div class="timeline_txt">
<p><?php echo $roadmap_data5?>  </p>
</div>
<div class="emptyBox"></div>
</div>
<div class="timeline_img_L">
<img src="assets/images/timline_L.png">
</div>
</div>
<div class="roadmap_timeline mrg_0">
<div class="timelineBox_R">
<div class="emptyBox"></div>
<div class="timeline_txt">
<p><?php echo $roadmap_data6?>  </p>
</div>
</div>
<div class="timeline_img_R">
<img src="assets/images/timline_R.png">
</div>
</div>
<div class="roadmap_timeline mrg_0">
<div class="timelineBox_L">
<div class="timeline_txt">
<p><?php echo $roadmap_data7?>  </p>
</div>
<div class="emptyBox"></div>
</div>
</div>
</div>
</section>

<div id="team" style="float: left; width:100%"></div>
<section class="team_member_sec">
<div class="container">
<div class="team_member_heading">
<h2>Team Member</h2>
</div>
<div class="team_profile_imgBox">
<div class="circle_sm"><img src="assets/images/circle_sm.png"></div>
<div class="profile_imgBox">
<img src="assets/images/img7.jpg">
</div>
<div class="team_socialbox">
<h5>AMANDA</h5>
<ul>
  <li>
    <a href="https://twitter.com/bittybobs"><img src="assets/images/tw_icon.png"></a>
  </li>
  <li>
    <a href="https://www.instagram.com/bitty.bobs/"><img src="assets/images/insta_icon.png"></a>
  </li>
  <li>
    <a href="https://discord.com/invite/Sq6ERK7nw4"><img src="assets/images/com_icon.png"></a>
  </li>
</ul>
</div>
<div class="userMeta">
<p>Founder</p>
</div>
</div>
<div class="userInfoBox">
<div class="emptyBox"></div>
<div class="userInfo">
<div class="circle_sm"><img src="assets/images/circle_sm.png"></div>
<p><?php echo $team_data?></p>
</div>
<div class="emptyBox"></div>
</div>
</div>
</section>

<div id="contact_us" style="float: left; width:100%"></div>
<footer>
<div class="container">
<div class="helpBox">
<h3>Can we help you?</h3>
<p>For collaboration or press inquiries, click the button below and come say hi. We promise we don’t bite.</p>
<a href="https://discord.gg/CtpTfrKE"><img src="assets/images/com_icon.png"> <span>Join the community</span></a>
  <a href="https://www.instagram.com/bitty.bobs/"><span>Instagram</span> <img src="assets/images/insta_icon.png"></a>
</div>
</div>
<div class="copyrightBox">
<div class="container">
<div class="copyBox">
<div class="footer_logo">
  <img src="assets/images/logo.png">
</div>
<div class="copy_txt">
  <p>&copy; 2022 Bity Bobs, All Rights Reserved</p>
</div>
</div>
</div>
</div>
</footer>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js'></script>
<script  src="assets/js/script.js"></script>
</body>
</html>