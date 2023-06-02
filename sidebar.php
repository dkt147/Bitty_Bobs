<?php include 'session.php';?>
<div class="sidebar">

  <div class="sidebar-wrapper">
    <div class="logo">
      <a href="dashboard.php?id=1" class="simple-text logo-mini">

      </a>
      <!--Title Of Project-->
      <a href="dashboard.php?id=1" class="simple-text logo-normal">
        Admin Panel
      </a>
    </div>
    <ul class="nav">
      <?php
    //Checking Click To Active Sidebar...
      if (isset($_GET['id']) and $_GET['id'] == 1) { ?>
        <li class="active">
        <?php
      } else { ?>
        <li>
        <?php
      }
        ?>
        <a href="dashboard.php?id=1">
            <i class="fas fa-user"></i>
          <p>Dashboard</p>
        </a>
        </li>
       
            <?php
            //Checking Click To Active Sidebar...
                if (isset($_GET['id']) and $_GET['id'] == 0) { ?>
                  <li class="active">
                  <?php
                } else { ?>
                  <li>
                  <?php
                }
                  ?>
                  <a href="daily_data.php?id=0">
                    <i class="tim-icons icon-chart-bar-32"></i>
                    <p>Daily Data</p>
                  </a>
                  </li>


        <?php
        //Checking Click To Active Sidebar...
        if (isset($_GET['id']) and $_GET['id'] == 2) { ?>
          <li class="active">
          <?php
        } else { ?>
          <li>
          <?php
        }
          ?>
          <a href="weekly_data.php?id=2">
            <i class="tim-icons icon-calendar-60"></i>
            <p>Weekly Data</p>
          </a>
          </li>


              <?php
              //Checking Click To Active Sidebar...
              if (isset($_GET['id']) and $_GET['id'] == 5) { ?>
                <li class="active">
                <?php
              } else { ?>
                <li>
                <?php
              }
                ?>
                <a href="monthly_data.php?id=5">
                  <i class="tim-icons icon-chart-pie-36"></i>
                  <p>Monthly Data</p>
                </a>
                </li>

                <?php
              //Checking Click To Active Sidebar...
              if (isset($_GET['id']) and $_GET['id'] == 6) { ?>
                <li class="active">
                <?php
              } else { ?>
                <li>
                <?php
              }
                ?>
                <a href="blessing.php?id=6">
                  <i class="tim-icons icon-heart-2"></i>
                  <p>Blessings</p>
                </a>
                </li>


                <?php
              //Checking Click To Active Sidebar...
              if (isset($_GET['id']) and $_GET['id'] == 7) { ?>
                <li class="active">
                <?php
              } else { ?>
                <li>
                <?php
              }
                ?>
                <a href="exercise.php?id=7">
                  <i class="tim-icons icon-atom"></i>
                  <p>Exercise</p>
                </a>
                </li>


                <?php
              //Checking Click To Active Sidebar...
              if (isset($_GET['id']) and $_GET['id'] == 8) { ?>
                <li class="active">
                <?php
              } else { ?>
                <li>
                <?php
              }
                ?>
                <a href="video.php?id=8">
                  <i class="tim-icons icon-video-66"></i>
                  <p>Videos</p>
                </a>
                </li>

    </ul>
  </div>
</div>