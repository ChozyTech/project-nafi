<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url(); ?>" class="site_title"><img src="<?php echo base_url(); ?>assets/img/logo/logo.png" alt="ChozyTech Logo" height="34" width="50"/></i> <span>ChozyTech</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>assets/img/profile/default.png" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo ucfirst($this->session->userdata('username')); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
				  <li><a href="<?php echo base_url(); ?>import"><i class="fa fa-arrow-circle-down"></i> Import Data</a></li>
				  <li><a href="<?php echo base_url(); ?>data"><i class="fa fa-list"></i> List Data</a></li>
                  <li><a><i class="fa fa-newspaper-o"></i> Report <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Report 1</a></li>
                      <li><a href="#">Report 2</a></li>
                      <li><a href="#">Report 3</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span id="btfullscreen" name="btfullscreen" class="glyphicon glyphicon-fullscreen" aria-hidden="true" onclick="toggleFullScreen()"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url(); ?>authentication/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url(); ?>assets/img/profile/default.png"><?php echo ucfirst($this->session->userdata('username')); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="#"> Profile</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="<?php echo base_url(); ?>authentication/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
