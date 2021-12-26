<?php include 'session.php';?>
<div class="sidebar">

  <div class="sidebar-wrapper">
    <div class="logo">
      <a href="dashboard.php?id=1" class="simple-text logo-mini">
        LA
      </a>
      <!--Title Of Project-->
      <a href="dashboard.php?id=1" class="simple-text logo-normal">
        LAB AUTOMATION
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
                if (isset($_GET['id']) and $_GET['id'] == 6) { ?>
                  <li class="active">
                  <?php
                } else { ?>
                  <li>
                  <?php
                }
                  ?>
                  <a href="product_category.php?id=6">
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
                  <p>Testing Batch</p>
                </a>
                </li>

                <?php
                //Checking Click To Active Sidebar...
            if (isset($_GET['id']) and $_GET['id'] == 4) { ?>
              <li class="active">
              <?php
            } else { ?>
              <li>
              <?php
            }
              ?>
              <a href="testing_type.php?id=4">
                <i class="tim-icons icon-bell-55"></i>
                <p>Testing Type</p>
              </a>
              </li>

          <?php
          //Checking Click To Active Sidebar...
          if (isset($_GET['id']) and $_GET['id'] == 3) { ?>
            <li class="active">
            <?php
          } else { ?>
            <li>
            <?php
          }
            ?>
            <a href="testing.php?id=3">
              <i class="tim-icons icon-pin"></i>
              <p>Testing</p>
            </a>
            </li>
            

                
    </ul>
  </div>
</div>