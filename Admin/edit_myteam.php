<?php include 'session.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>
        Edit My Team
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
                    <div class="col-md-1"></div>
                    <div class="col-md-7">
                        <div class="card pl-5" style="padding-left: 500px;">
                            <div class="card-header">
                                <h3 class="title">Update My Team</h3>
                            </div>
                            <div class="card-body">
                                <?php
                        
       //Stablishing Connection...
       include 'connection.php';  
                                  //Getting Data to edit...
                                        $query = "SELECT * FROM `my_team`";
                                    $res = mysqli_query($con, $query);

                                    if (mysqli_num_rows($res) > 0) {

                                        while ($row1 = mysqli_fetch_assoc($res)) {
                                ?>
                                    <!--Form-->
                                            <form action="updatemyteam.php" method="POST" enctype="multipart/form-data">
                                                <div class="row">

                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">

                                                            <input type="hidden" class="form-control" value="<?php echo $row1['id']; ?>" name="id" placeholder="" >
                                                        </div>
                                                    </div>

                                                </div>

                                                <!--First Member-->

                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 1 Image</label>
                                                            <img class="form-control" src="uploads/<?php echo $row1['image1']; ?>" style="height: 200px" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class=" row">
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group" style="color: white;z-index:10;">
                                                <input type="submit" class="btn btn-fill btn-warning" value="Add Image">
                                                <input type="file" name="myFile1"><br><br>
                                            </div>
                                        </div>

                                    </div>
                                                   

                                    <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 1 Name</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['name1']; ?>" name="name1" placeholder="Name 1" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 1 Role</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['role1']; ?>" name="role1" placeholder="Role 1" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 1 Description</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['description1']; ?>" name="description1" placeholder="Description 1" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>


                                                <!--Second Member-->

                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 2 Image</label>
                                                            <img class="form-control" src="uploads/<?php echo $row1['image2']; ?>" style="height: 200px" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class=" row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group" style="color: white;z-index:10;">
                                                            <input type="submit" class="btn btn-fill btn-warning" value="Add Image">
                                                            <input type="file" name="myFile2"><br><br>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 2 Name</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['name2']; ?>" name="name2" placeholder="Name 2" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 2 Role</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['role2']; ?>" name="role2" placeholder="Role 2" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 2 Description</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['description2']; ?>" name="description2" placeholder="Description 2" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>



                                                <!--Third Member-->

                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 3 Image</label>
                                                            <img class="form-control" src="uploads/<?php echo $row1['image3']; ?>" style="height: 200px" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class=" row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group" style="color: white;z-index:10;">
                                                            <input type="submit" class="btn btn-fill btn-warning" value="Add Image">
                                                            <input type="file" name="myFile3"><br><br>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 3 Name</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['name3']; ?>" name="name3" placeholder="Name 3" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 3 Role</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['role3']; ?>" name="role3" placeholder="Role 3" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 3 Description</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['description3']; ?>" name="description3" placeholder="Description 3" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>



                                                <!--Fourth Member-->

                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 4 Image</label>
                                                            <img class="form-control" src="uploads/<?php echo $row1['image4']; ?>" style="height: 200px" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class=" row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group" style="color: white;z-index:10;">
                                                            <input type="submit" class="btn btn-fill btn-warning" value="Add Image">
                                                            <input type="file" name="myFile4"><br><br>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 4 Name</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['name4']; ?>" name="name4" placeholder="Name 4" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 4 Role</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['role4']; ?>" name="role4" placeholder="Role 4" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 4 Description</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['description4']; ?>" name="description4" placeholder="Description 4" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>


                                                <!--Fifth Member-->

                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 5 Image</label>
                                                            <img class="form-control" src="uploads/<?php echo $row1['image5']; ?>" style="height: 200px" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class=" row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group" style="color: white;z-index:10;">
                                                            <input type="submit" class="btn btn-fill btn-warning" value="Add Image">
                                                            <input type="file" name="myFile5"><br><br>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 5 Name</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['name5']; ?>" name="name5" placeholder="Name 5" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 5 Role</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['role5']; ?>" name="role5" placeholder="Role 5" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 5 Description</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['description5']; ?>" name="description5" placeholder="Description 5" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>


                                                <!--Sixth Member-->

                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 6 Image</label>
                                                            <img class="form-control" src="uploads/<?php echo $row1['image6']; ?>" style="height: 200px" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class=" row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group" style="color: white;z-index:10;">
                                                            <input type="submit" class="btn btn-fill btn-warning" value="Add Image">
                                                            <input type="file" name="myFile6"><br><br>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 6 Name</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['name6']; ?>" name="name6" placeholder="Name 6" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 6 Role</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['role6']; ?>" name="role6" placeholder="Role 6" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 6 Description</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['description6']; ?>" name="description6" placeholder="Description 6" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>


                                                <!--Seventh Member-->

                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 7 Image</label>
                                                            <img class="form-control" src="uploads/<?php echo $row1['image7']; ?>" style="height: 200px" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class=" row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group" style="color: white;z-index:10;">
                                                            <input type="submit" class="btn btn-fill btn-warning" value="Add Image">
                                                            <input type="file" name="myFile7"><br><br>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 7 Name</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['name7']; ?>" name="name7" placeholder="Name 7" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 7 Role</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['role7']; ?>" name="role7" placeholder="Role 7" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 7 Description</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['description7']; ?>" name="description7" placeholder="Description 7" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>


                                                <!--Eight Member-->

                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 8 Image</label>
                                                            <img class="form-control" src="uploads/<?php echo $row1['image8']; ?>" style="height: 200px" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class=" row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group" style="color: white;z-index:10;">
                                                            <input type="submit" class="btn btn-fill btn-warning" value="Add Image">
                                                            <input type="file" name="myFile8"><br><br>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 8 Name</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['name8']; ?>" name="name8" placeholder="Name 8" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 8 Role</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['role8']; ?>" name="role8" placeholder="Role 8" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Member 8 Description</label>
                                                            <input type="text" class="form-control" value="<?php echo $row1['description8']; ?>" name="description8" placeholder="Description 8" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>



                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <input type="submit" class="btn btn-fill btn-success" name="update" value="Update">

                                                    </div>

                                                </div>
                                                <br>

                                            </form>
                                <?php }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

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