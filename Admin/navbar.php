<?php include 'session.php';?>
<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>

            <!--Title-->
            <a class="navbar-brand" href="javascript:void(0)">Testing Panel</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">

                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <div class="photo">
                            <img src="assets/img/anime3.png" alt="Profile Photo">
                        </div>
                        <b class="caret d-none d-lg-block d-xl-block"></b>
                        <p class="d-lg-none">
                            Log out
                        </p>
                    </a>
                    <ul class="dropdown-menu dropdown-navbar">
                        

                      <!--Username Using Session-->

                        <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item" style="color: blue;">Daniyal</a></li>
                        <li class="dropdown-divider"></li>

                      <!--It will redirect to Login Page and Destroy Login Session-->

                        <li class="nav-link"><a href="logout.php" class="nav-item dropdown-item" style="color: red;">Log out</a></li>
                    </ul>
                </li>
                <li class="separator d-lg-none"></li>
            </ul>
        </div>
    </div>
</nav>