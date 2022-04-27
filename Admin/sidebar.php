<?php include 'session.php';?>
<div class="sidebar">

  <div class="sidebar-wrapper">
    <div class="logo">
      <a href="dashboard.php?id=1" class="simple-text logo-mini">
        NFT
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
          <i class="tim-icons icon-chart-pie-36"></i>
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
                  <a href="product_category.php?id=0">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>Product Category</p>
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
          <a href="product.php?id=2">
            <i class="tim-icons icon-atom"></i>
            <p>Product's</p>
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
                <a href="testing_batch.php?id=5">
                  <i class="tim-icons icon-single-02"></i>
                  <p>Contact</p>
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
                <a href="edit_header.php?id=6">
                  <i class="tim-icons icon-badge"></i>
                  <p>Header</p>
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
                <a href="edit_about.php?id=7">
                  <i class="tim-icons icon-link-72"></i>
                  <p>About</p>
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
                <a href="edit_roadmap.php?id=8">
                  <i class="tim-icons icon-paper"></i>
                  <p>RoadMap</p>
                </a>
                </li>


                <?php
              //Checking Click To Active Sidebar...
              if (isset($_GET['id']) and $_GET['id'] == 9) { ?>
                <li class="active">
                <?php
              } else { ?>
                <li>
                <?php
              }
                ?>
                <a href="edit_team.php?id=9">
                  <i class="tim-icons icon-user-run"></i>
                  <p>Team</p>
                </a>
                </li>


                <?php
              //Checking Click To Active Sidebar...
              if (isset($_GET['id']) and $_GET['id'] == 10) { ?>
                <li class="active">
                <?php
              } else { ?>
                <li>
                <?php
              }
                ?>
                <a href="edit_trait.php?id=10">
                  <i class="tim-icons icon-check-2"></i>
                  <p>Traits</p>
                </a>
                </li>
                              
    </ul>
  </div>
</div>