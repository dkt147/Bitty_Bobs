<?php

include 'connection.php';
$query = "SELECT * FROM `header`";
$res = mysqli_query($con, $query);

if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        $head1 = $row['h1'];
        $head2 = $row['h2'];
        $head_image = $row['image'];
    }
}



$query = "SELECT * FROM `team`";
$res = mysqli_query($con, $query);

if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        $team_data = $row['detail'];
        $team_image = $row['image'];
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
        $roadmap_title= $row['title'];
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
        $s1= $row['s1'];$t1= $row['t1'];$t2= $row['t2'];
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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />
    <style>
        i.fa {
            width: 35px;
            height: 35px;
  display: inline-block;
  border-radius: 60px;
  box-shadow: 0 0 2px orange;
  padding: 0.59em  0.6em;
color: orange;
margin: 2px;
}
    </style>
</head>
<body>

<!-- For social icon  -->
    <div class="container" style="margin-top: 5px;">
        <div class="row" >
        <a href="https://twitter.com/bittybobs" style="float: right;"  target="_blank"><i class="fa fa-brands fa-instagram" ></i></a>
        <a href="https://discord.com/invite/Sq6ERK7nw4" style="float: right"  target="_blank"><i class="fa fa-brands fa-discord" ></i></a>
        <a href="https://www.instagram.com/bitty.bobs/" style="float: right"  target="_blank"><i class="fa fa-brands fa-twitter" ></i></a>
        </div>
    </div>
<!-- social icon end -->

<!-- For navbar  -->
<header style="margin-top: 45px;">
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
<!-- navbar end -->




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
                <h3><?php echo $s1?></h3>
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
            <h2><span><?php echo $roadmap_title?></span></h2>
        </div>
        
        <div class="roadmap_timeline mrg_0" style="margin-top:20px">
            <h2 class="myClass" style="float: right;margin-right: 29%">Phase 1</h2>
            <div class="timelineBox_R">
                <div class="emptyBox"></div>
                <div class="timeline_txt">
                    <p ><?php echo "<b><u>BUILDING </u></b><br>".$roadmap_data6?>  </p>
                </div>
            </div>
            <div class="timeline_img_R">
                <img src="assets/images/timline_R.png">
            </div>
        </div>
        <div class="roadmap_timeline mrg_0">
            <h2 class="myClass" style="margin-left: 30%">Phase 2</h2>
            <div class="timelineBox_L">
                <div class="timeline_txt">
                    <p ><?php echo "<b><u>MINTING </u></b><br>".$roadmap_data1?>  </p>
                </div>
                <div class="emptyBox"></div>
            </div>
            <div class="timeline_img_L">
                <img src="assets/images/timline_L.png">
            </div>
        </div>
        <div class="roadmap_timeline mrg_0">
            <h2 class="myClass" style="float: right;margin-right: 29%">Phase 3</h2>
            <div class="timelineBox_R">
                <div class="emptyBox"></div>
                <div class="timeline_txt">
                    <p ><?php echo "<b><u>METAVERSE BAR </u></b><br>".$roadmap_data2?>  </p>
                </div>
            </div>
            <div class="timeline_img_R">
                <img src="assets/images/timline_R.png">
            </div>
        </div>
        <div class="roadmap_timeline mrg_0">
            <h2 class="myClass" style="margin-left: 30%">Phase 4</h2>
            <div class="timelineBox_L">
                <div class="timeline_txt">
                    <p ><?php echo "<b><u>BITTY BOBS MERCH</u></b><br>".$roadmap_data3?>  </p>
                </div>
                <div class="emptyBox"></div>
            </div>
            <div class="timeline_img_L">
                <img src="assets/images/timline_L.png">
            </div>
        </div>
        <div class="roadmap_timeline mrg_0">
            
        <h2 class="myClass" style="float: right;margin-right: 29%">Phase 5</h2>
            <div class="timelineBox_R">
                <div class="emptyBox"></div>
                <div class="timeline_txt">
                    <p ><?php echo "<b><u>GIVING </u></b><br>".$roadmap_data4?>  </p>
                </div>
            </div>
            <div class="timeline_img_R">
                <img src="assets/images/timline_R.png">
            </div>
        </div>
        <div class="roadmap_timeline mrg_0">
            <h2 class="myClass" style="margin-left: 30%">Phase 6</h2>
            <div class="timelineBox_L">
                <div class="timeline_txt">
                    <p><?php echo "<b><u>UNVEILING</u></b><br>".$roadmap_data5?>  </p>
                </div>
            </div>

        </div>
        <!--<div class="timeline_img_R">-->
        <!--<img src="assets/images/timline_R.png">-->
        <!--</div>-->
    </div>
    <!--<div class="roadmap_timeline mrg_0">-->
    <!--<div class="timelineBox_L">-->
    <!--<div class="timeline_txt">-->
    <!--<p><?php echo $roadmap_data7?>  </p>-->
    <!--</div>-->
    <!--<div class="emptyBox"></div>-->
    <!--</div>-->
    <!--</div>-->
    </div>
</section>



<div id="traits" style="float: left; width:100%"></div>


<section class="traits_sec">
    <div class="container">
        <div class="traits_heading">
            <h2>Press</h2>
        </div>
    </div>
    </div>
    </div>
    <div class="container">
        <div class="dollBoxs">
            <div class="circle_sm"><img src="assets/images/circle_sm.png"></div>
            <div class="dollsBox">

                <?php

                include 'connection.php';
                $query = "SELECT * FROM `press`";
                $res = mysqli_query($con, $query);

                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                        <?php
                        if(!empty($row['image1'])){
                            ?>
                            <div class="doll_img">
                                <a href="<?php echo $row['link1']?>"><img src="Admin/uploads/<?php echo $row['image1']?>" style="height: 482;width:600"> </a>
                            </div>
                            <?php
                        }
                        if(!empty($row['image2'])){
                            ?>
                            <div class="doll_img">
                                <a href="<?php echo $row['link2']?>"><img src="Admin/uploads/<?php echo $row['image2']?>" style="height: 482;width:600"> </a>
                            </div>
                            <?php
                        }
                        if(!empty($row['image3'])){
                            ?>
                            <div class="doll_img">
                                <a href="<?php echo $row['link3']?>"><img src="Admin/uploads/<?php echo $row['image3']?>" style="height: 482;width:600"> </a>
                            </div>
                            <?php
                        }
                        if(!empty($row['image4'])){
                            ?>
                            <div class="doll_img">
                                <a href="<?php echo $row['link4']?>"><img src="Admin/uploads/<?php echo $row['image4']?>" style="height: 482;width:600"> </a>
                            </div>
                            <?php
                        }
                        if(!empty($row['image5'])){
                            ?>
                            <div class="doll_img">
                                <a href="<?php echo $row['link5']?>"><img src="Admin/uploads/<?php echo $row['image5']?>" style="height: 482;width:600"> </a>
                            </div>
                            <?php
                        }
                        if(!empty($row['image6'])){
                            ?>
                            <div class="doll_img">
                                <a href="<?php echo $row['link6']?>"><img src="Admin/uploads/<?php echo $row['image6']?>" style="height: 482;width:600"> </a>
                            </div>
                            <?php
                        }
                    }
                }
                ?>

            </div>
        </div>
    </div>
</section>








<div id="team" style="float: left; width:100%"></div>
<section class="team_member_sec">
    <div class="container">
        <div class="team_member_heading">
            <h2>Team</h2>
        </div>
        <div class="team_profile_imgBox">
            <div class="circle_sm"><img src="assets/images/circle_sm.png"></div>
            <div class="profile_imgBox">
                <img src="Admin/uploads/<?php echo $team_image?>">
            </div>
            <div class="team_socialbox">
                <h5>AMANDA</h5>
                <ul>
                    <li>
                        <a href="https://www.instagram.com/amandaazarian/"><img src="assets/images/insta_icon.png"></a>
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

<!--Start Team Section-->
<section class="traits_sec remove_gap">
    <div class="container">
        
    </div>
    </div>
    </div>
    <div class="container">
        <div class="dollBoxs">
            <div class="circle_sm"><img src="assets/images/circle_sm.png"></div>
            <div class="dollsBox flex_divider">

                <?php

                include 'connection.php';
                $query = "SELECT * FROM `my_team`";
                $res = mysqli_query($con, $query);

                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                        <?php
                        if(!empty($row['image1'])){
                            ?>
                            <div class="doll_img">
                                <img src="Admin/uploads/<?php echo $row['image1']?>" >
                                <h2 style="text-align: center"><?php echo $row['name1']?></h2>
                                <p style="text-align: center"><?php echo $row['role1']?></p>
                                <p style="text-align: center"><?php echo $row['description1']?></p>
                            </div>
                            <?php
                        }
                        if(!empty($row['image2'])){
                            ?>
                            <div class="doll_img">
                                <img src="Admin/uploads/<?php echo $row['image2']?>" >
                                <h2 style="text-align: center"><?php echo $row['name2']?></h2>
                                <p style="text-align: center"><?php echo $row['role2']?></p>
                                <p style="text-align: center"><?php echo $row['description2']?></p>
                            </div>
                            <?php
                        }
                        if(!empty($row['image3'])){
                            ?>
                            <div class="doll_img">
                                <img src="Admin/uploads/<?php echo $row['image3']?>" >
                                <h2 style="text-align: center"><?php echo $row['name3']?></h2>
                                <p style="text-align: center"><?php echo $row['role3']?></p>
                                <p style="text-align: center"><?php echo $row['description3']?></p>
                            </div>
                            <?php
                        }
                        if(!empty($row['image4'])){
                            ?>
                            <div class="doll_img">
                                <img src="Admin/uploads/<?php echo $row['image4']?>" >
                                <h2 style="text-align: center"><?php echo $row['name4']?></h2>
                                <p style="text-align: center"><?php echo $row['role4']?></p>
                                <p style="text-align: center"><?php echo $row['description4']?></p>
                            </div>
                            <?php
                        }
                        if(!empty($row['image5'])){
                            ?>
                            <div class="doll_img">
                                <img src="Admin/uploads/<?php echo $row['image5']?>" >
                                <h2 style="text-align: center"><?php echo $row['name5']?></h2>
                                <p style="text-align: center"><?php echo $row['role5']?></p>
                                <p style="text-align: center"><?php echo $row['description5']?></p>
                            </div>
                            <?php
                        }
                        if(!empty($row['image6'])){
                            ?>
                            <div class="doll_img">
                                <img src="Admin/uploads/<?php echo $row['image6']?>" >
                                <h2 style="text-align: center"><?php echo $row['name6']?></h2>
                                <p style="text-align: center"><?php echo $row['role6']?></p>
                                <p style="text-align: center"><?php echo $row['description6']?></p>
                            </div>
                            <?php
                        }
                        if(!empty($row['image7'])){
                            ?>
                            <div class="doll_img">
                                <img src="Admin/uploads/<?php echo $row['image7']?>" >
                                <h2 style="text-align: center"><?php echo $row['name7']?></h2>
                                <p style="text-align: center"><?php echo $row['role7']?></h2>
                                <p style="text-align: center"><?php echo $row['description7']?></p>
                            </div>
                            <?php
                        }
                        if(!empty($row['image8'])){
                            ?>
                            <div class="doll_img">
                                <img src="Admin/uploads/<?php echo $row['image8']?>" >
                                <h2 style="text-align: center"><?php echo $row['name8']?></h2>
                                <p style="text-align: center"><?php echo $row['role8']?></p>
                                <p style="text-align: center"><?php echo $row['description8']?></p>
                            </div>
                            <?php
                        }
                    }
                }
                ?>

            </div>
        </div>
    </div>
</section>
<!--End Team Section-->





<div id="contact_us" style="float: left; width:100%"></div>
<footer>
    <div class="container">
        <div class="helpBox">
            <h3>Can we help you?</h3>
            <p>For collaboration or press inquiries, click the button below and come say hi. We promise we don’t bite.</p>
            <a href="https://discord.com/invite/qMY9VHBjBd"><img src="assets/images/com_icon.png"> <span>Join the community</span></a>
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