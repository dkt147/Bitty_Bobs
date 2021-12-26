
<?php include 'session.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>
        Product
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <?php
    //When Product Added Successfully..
        if (isset($_SESSION['msg'])) {

            echo "<script>alert('Product Added Successfully')</script>";
        }

    ?>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php
            include 'navbar.php';
            ?>
            <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card ">
                            <div class="card-header">
                                <h3 class="card-title"> Products</h3><br>
                                <h4 class="card-title"><a class="btn btn-success" href="createproduct.php">Add Product</a></h4><Br>

                            <!--Form-->
                                <form action="product.php" method="POST">
                <div class="col-md-3 pr-md-1">
                    <h4>Search Product</h4>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10"> <input type="text" name="searchproduct" placeholder="Search By Name" class="form-control"></div>
                            <div class="col-md-2"><input type="submit" class="btn btn-fill btn-success" name="searchbtn" value="Search" style="margin-top: 0px;"></div>
                            
                        </div>
                    </div>
               
                  </div>
                </form><br>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table tablesorter " id="">
                                        <thead class=" text-primary">

                                            <tr>

                                                
                                                <th style="text-align: center;">
                                                    PRODUCT ID
                                                </th>
                                                <th style="text-align: center;">
                                                    PRODUCT NAME
                                                </th>
                                                <th style="text-align: center;">
                                                    PRODUCT IMAGE
                                                </th>
                                                <th style="text-align: center;">
                                                    PRODUCT DETAILS
                                                </th>
                                                <th style="text-align: center;">
                                                    CATEGORY NAME
                                                </th>
                                                <th style="text-align: center;">
                                                    EDIT
                                                </th>
                                                <th style="text-align: center;">
                                                    DELETE
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                    //Connection Stablishing...
                      $con = mysqli_connect("localhost", "root", "", "lab_automation") or die("Query Failed!!!");
                      
                    //Checking Validity for Search Query...
                      if(isset($_POST['searchbtn']) && !empty($_POST['searchproduct']))
                          {
                              $id = $_POST['searchproduct']; 
                              
                      $query = "SELECT * FROM `products`,products_catagory where p_Name = '$id' and c_id_fk=cat_id";
                      $res = mysqli_query($con, $query);
                              
                              
                          }
                          else{

                      $query = "SELECT * FROM `products`,products_catagory where c_id_fk=cat_id";
                      $res = mysqli_query($con, $query);

                          }
                                            if (mysqli_num_rows($res) > 0) {
                                                $c = 0;
                                                while ($row = mysqli_fetch_assoc($res)) {

                                                    $c = $c + 1;
                                            ?>
                                                    <tr>
                                                        
                                                        <td style="text-align: center;">
                                                            <?php echo $c ?>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <?php echo $row['p_Name'] ?>
                                                        </td>
                                                       
                                                        <td style="text-align: center;">
                                                            <img src="uploads/<?php echo $row['p_Image'] ?>" width="80px" height="80px" style="border-radius:50px">
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <?php echo $row['p_Details'] ?>
                                                        </td>
                                                         <td style="text-align: center;">
                                                            <?php echo $row['cat_Name'] ?>
                                                        </td>
                                                        <td style="text-align: center;color:white">
                                                            <a href="editproduct.php?id=<?php echo $row['p_Id'] ?>" style="color:white;"><i class="fas fa-edit"></i></a>
                                                        </td>
                                                        <td style="text-align: center;color:white;">
                                                            <a href='deleteproduct.php?id=<?php echo $row['p_Id'] ?>' style="color:white;"><i class="fas fa-trash"></i></a></td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-12">

                    </div>
                    <div class="col-lg-6 col-md-12">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');
                $navbar = $('.navbar');
                $main_panel = $('.main-panel');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



                $('.fixed-plugin a').click(function(event) {
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .background-color span').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data', new_color);
                    }

                    if ($main_panel.length != 0) {
                        $main_panel.attr('data', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data', new_color);
                    }
                });

                $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        sidebar_mini_active = false;
                        blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                    } else {
                        $('body').addClass('sidebar-mini');
                        sidebar_mini_active = true;
                        blackDashboard.showSidebarMessage('Sidebar mini activated...');
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (white_color == true) {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').removeClass('white-content');
                        }, 900);
                        white_color = false;
                    } else {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').addClass('white-content');
                        }, 900);

                        white_color = true;
                    }


                });

                $('.light-badge').click(function() {
                    $('body').addClass('white-content');
                });

                $('.dark-badge').click(function() {
                    $('body').removeClass('white-content');
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "black-dashboard-free"
            });
    </script>
</body>

</html>