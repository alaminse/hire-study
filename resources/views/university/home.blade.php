<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Profile</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="../icon/css/all.css">
    <!-- NProgress -->
    <link href="../css/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../css/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav title" style="border: 0;">
              <a href="../index.html" class="site_title"> <img src="../img/logo.png" style="width: 160px;" alt=""> </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../img/diu.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>diu</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Dashboard</h3>
                <ul class="nav side-menu">
                  <li><a href="profile.html"><i class="fas fa-user"></i> Profile</a></li>
                  <li><a href="answer-query.html"><i class="fas fa-question"></i> All Query</a></li>
                  <li><a href="all-posts.html"><i class="fas fa-address-card"></i> All Posts</a></li>
                  <li><a href="create-admission-form.html"><i class="fas fa-address-book"></i> Create Admission Form</a></li>
                  <li><a href="all-application.html"><i class="fas fa-id-card"></i> All Application</a></li>
                  <li><a href="create-post.html"><i class="fas fa-plus-circle"></i> Create Post</a></li>
                  <li><a href="login.html"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>University Profile</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>University Report <small>Activity report</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3  profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" style="height: 220px; width: 220px;" src="../img/diu.png" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>Daffodil International University</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Dhaka Bangladesh
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> University
                        </li>
                      </ul>
                      <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br />

                      <!-- start skills -->
                      <h4>Education</h4>
                      <ul class="list-unstyled user_data">
                          <p>Undergraduation</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="100"></div>
                          </div>
                        </li>
                        <li>
                          <p>Graduation</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="1000"></div>
                          </div>
                        </li>
                        <li>
                            <p>Post Graduation</p>
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                            </div>
                          </li>
                      </ul>
                      <!-- end of skills -->
                    </div>
                    <div class="col-md-9 col-sm-9 ">
                      <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4"disabled>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputAddress">Address</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" disabled>
                        </div>
                        <div class="form-group">
                          <label for="inputAddress2">Address 2</label>
                          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" disabled>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity" disabled>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>
                          <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip" disabled>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
              Copy right by <i class="fas fa-copyright"></i> <a href="../index.html" style="color: red;">Hire Study</a>
            </div>
            <div class="clearfix"></div>
          </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../js/nprogress.js"></script>
    <!-- morris.js -->
    <script src="../js/raphael.min.js"></script>
    <script src="../js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../js/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../js/moment.min.js"></script>
    <script src="../js/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../js/custom.min.js"></script>

  </body>
</html>