<?php include 'session.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>
        Edit Header
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
                                <h3 class="title">Update Traits</h3>
                            </div>
                            <div class="card-body">
                                <?php
                          
       //Stablishing Connection...
       include 'connection.php';      
        //Getting data to edit...
                                    $query = "SELECT * FROM `traits`";
                                    $res = mysqli_query($con, $query);

                                    if (mysqli_num_rows($res) > 0) {

                                        while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                    <!--Form-->
                                            <form action="updatetrait.php" method="POST">
                                                <div class="row">

                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">

                                                            <input type="hidden" class="form-control" value="<?php echo $row['id']; ?>" name="id" placeholder="" required>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>Super Title</label>
                                                            <input type="text" class="form-control" value="<?php echo $row['s1']; ?>" name="s1"  required>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6 pr-md-1">
                                                        <div class="form-group">
                                                            <label>First Title</label>
                                                            <input type="text" class="form-control" value="<?php echo $row['t1']; ?>" name="t1"  required>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Paragraph 1</label>
        <textarea  name="t1_1" rows="8" cols="50" class="form-control"  required><?php echo $row['t1_1']; ?></textarea>    
                                                
    </div>
</div>

</div>
<div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Paragraph 2</label>
        <textarea  name="t1_2" rows="8" cols="50" class="form-control"  required><?php echo $row['t1_2']; ?></textarea>    
        </div>
</div>

</div>
<div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Paragraph 3</label>
        <textarea  name="t1_3" rows="8" cols="50" class="form-control"  required><?php echo $row['t1_3']; ?></textarea>    
    
    </div>
</div>

</div>
<div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Paragraph 4</label>
        <textarea  name="t1_4" rows="8" cols="50" class="form-control"  required><?php echo $row['t1_4']; ?></textarea>    
       
    </div>
</div>

</div>
<div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Paragraph 5</label>
        <textarea  name="t1_5" rows="8" cols="50" class="form-control"  required><?php echo $row['t1_5']; ?></textarea>    
       
    </div>
</div>

</div>
        
        
<div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Second Title</label>
        <input type="text" class="form-control" value="<?php echo $row['t2']; ?>" name="t2"  required>
    </div>
</div>

</div>
<div class="row">

<div class="col-md-6 pr-md-1">
<div class="form-group">
<label>Paragraph 1</label>
<textarea  name="t2_1" rows="8" cols="50" class="form-control"  required><?php echo $row['t2_1']; ?></textarea>    

</div>
</div>

</div>
<div class="row">

<div class="col-md-6 pr-md-1">
<div class="form-group">
<label>Paragraph 2</label>
<textarea  name="t2_2" rows="8" cols="50" class="form-control"  required><?php echo $row['t2_2']; ?></textarea>    
</div>
</div>

</div>
<div class="row">

<div class="col-md-6 pr-md-1">
<div class="form-group">
<label>Paragraph 3</label>
<textarea  name="t2_3" rows="8" cols="50" class="form-control"  required><?php echo $row['t2_3']; ?></textarea>    

</div>
</div>

</div>

   
<div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Trait 1</label>
        <input type="text" class="form-control" value="<?php echo $row['t3']; ?>" name="t3"  required>
        <input type="text" class="form-control" value="<?php echo $row['c3']; ?>" name="c3"  required>
    </div>
</div>

</div>


<div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Trait 2</label>
        <input type="text" class="form-control" value="<?php echo $row['t4']; ?>" name="t4"  required>
        <input type="text" class="form-control" value="<?php echo $row['c4']; ?>" name="c4"  required>
    </div>
</div>

</div>


<div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Trait 3</label>
        <input type="text" class="form-control" value="<?php echo $row['t5']; ?>" name="t5"  required>
        <input type="text" class="form-control" value="<?php echo $row['c5']; ?>" name="c5"  required>
    </div>
</div>

</div>
        

<div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Trait 4</label>
        <input type="text" class="form-control" value="<?php echo $row['t6']; ?>" name="t6"  required>
        <input type="text" class="form-control" value="<?php echo $row['c6']; ?>" name="c6"  required>
    </div>
</div>

</div>


<div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Trait 5</label>
        <input type="text" class="form-control" value="<?php echo $row['t7']; ?>" name="t7"  required>
        <input type="text" class="form-control" value="<?php echo $row['c7']; ?>" name="c7"  required>
    </div>
</div>

</div>


<div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Trait 6</label>
        <input type="text" class="form-control" value="<?php echo $row['t8']; ?>" name="t8"  required>
        <input type="text" class="form-control" value="<?php echo $row['c8']; ?>" name="c8"  required>
    </div>
</div>

</div>


<div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Trait 7</label>
        <input type="text" class="form-control" value="<?php echo $row['t9']; ?>" name="t9"  required>
        <input type="text" class="form-control" value="<?php echo $row['c9']; ?>" name="c9"  required>
    </div>
</div>

</div>


<div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Trait 8</label>
        <input type="text" class="form-control" value="<?php echo $row['t10']; ?>" name="t10"  required>
        <input type="text" class="form-control" value="<?php echo $row['c10']; ?>" name="c10"  required>
    </div>
</div>

</div>

<div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Trait 9</label>
        <input type="text" class="form-control" value="<?php echo $row['t11']; ?>" name="t11"  required>
        <input type="text" class="form-control" value="<?php echo $row['c11']; ?>" name="c11"  required>
    </div>
</div>

</div>


<div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Trait 10</label>
        <input type="text" class="form-control" value="<?php echo $row['t12']; ?>" name="t12"  required>
        <input type="text" class="form-control" value="<?php echo $row['c12']; ?>" name="c12"  required>
    </div>
</div>

</div>

<div class="row">

<div class="col-md-6 pr-md-1">
    <div class="form-group">
        <label>Trait 11</label>
        <input type="text" class="form-control" value="<?php echo $row['t13']; ?>" name="t13"  required>
        <input type="text" class="form-control" value="<?php echo $row['c13']; ?>" name="c13"  required>
    </div>
</div>

</div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6 pr-md-1">
                                                        <input type="submit" class="btn btn-fill btn-success" name="Update" value="Update">

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