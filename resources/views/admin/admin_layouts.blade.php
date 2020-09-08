<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Dashboard</title>

    <!-- Bootstrap -->
    <link href="{{ asset('public/design/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('public/design/css/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('public/design/css/daterangepicker.css') }}" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="{{ asset('public/design/icon/css/all.css') }}">
    <!-- Custom Theme Style -->
    <link href="{{ asset('public/design/css/custom.min.css') }}" rel="stylesheet">
 
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('public/design/css/style.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('public/design/css/animate.css') }}">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="{{asset('public/design/fonts/font-awesome.css') }}">
    <!-- Menu -->
    <link href="{{asset('public/design/css/flexy-menu.css') }}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{asset('public/design/css/green.css') }}" rel="stylesheet">


    <!-- Font  -->
    <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- toastr sweetalert -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

  </head>
  @guest

  @else
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav title" style="border: 0;">
              <a  href="{{url('admin/home')}}" class="site_title"><span>Hire Study</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('public/design/img/profile.jpeg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Hasan Yousuf</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="{{url('admin/home')}}"><i class="fas fa-home"></i> Dashboard</a></li>
                  <li><a href="answer-query.html"><i class="fas fa-question"></i> Answer Query</a></li>
                  <li><a href="all-comments.html"><i class="fas fa-comments"></i> All Comments</a></li>
                  <li><a href="{{ route('admin.all.posts')}}"><i class="fas fa-address-card"></i> All Posts</a></li>
                  <li><a href="student-list.html"><i class="fas fa-user-graduate"></i> Student List</a></li>
                  <li><a href="university-list.html"><i class="fas fa-university"></i> University List</a></li>
                  <li><a href="{{ route('admin.create.post')}}"><i class="fas fa-plus-circle"></i> Create Post</a></li>
                  <li><a href="{{ route('admin.logout') }}"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        
      </div>
    </div>

    @endguest

    @yield('admin_content')

    <!-- jQuery -->
    <script src="{{ asset('public/design/js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('public/design/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('public/design/js/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('public/design/js/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('public/design/js/Chart.min.js') }}"></script>
    <!-- jQuery Sparklines -->
    <script src="{{ asset('public/design/js/jquery.sparkline.min.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('public/design/js/jquery.flot.js') }}"></script>
    <script src="{{ asset('public/design/js/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('public/design/js/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('public/design/js/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('public/design/js/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('public/design/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('public/design/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('public/design/js/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{asset('public/design/js/date.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('public/design/js/moment.min.js') }}"></script>
    <script src="{{ asset('public/design/js/daterangepicker.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('public/design/js/custom.min.js') }}"></script>
    <!-- Main jQuery & other 3rd party Library -->
    <script type="text/javascript" src="{{ asset('public/design/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/design/js/bootstrap/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/design/js/library/jquery.easing.1.3.js')}}"></script>
    <!-- UI bottom to top JS -->
    <script type="text/javascript" src="{{ asset('public/design/js/library/jquery.ui.totop.js')}}"></script>	
    <!-- Animation JS -->
    <script type="text/javascript" src="{{ asset('public/design/js/library/wow.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/design/js/library/device.min.js')}}"></script>
    <!-- Menu JS -->
    <script type="text/javascript" src="{{ asset('public/design/js/library/flexy-menu.js')}}"></script>
    <!-- Text rotator JS -->
    <script type="text/javascript" src="{{ asset('public/design/js/library/jquery.simple-text-rotator.min.js')}}"></script>
    <!-- Smooth Scroll JS -->
    <script type="text/javascript" src="{{ asset('public/design/js/library/smoothscroll.js')}}"></script>	
    <!-- Custom script -->
    <script type="text/javascript" src="{{ asset('public/design/js/main.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('public/design/js/bootstrap-progressbar.min.js')}}"></script>


    <!-- toastr sweetalert -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

         <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>  

     <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>



  </body>
</html>