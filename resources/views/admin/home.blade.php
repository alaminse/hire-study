@extends('admin.admin_layouts')

@section('admin_content')
    <!-- page content -->
<div class="right_col" role="main">
          <br>
          <br>
          <br>
          <h3>Dashboard</h3>
          <div class="">
            <div class="row" style="display: inline-block;">
            <div class="top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fas fa-question"></i></div>
                  <div class="count">179</div>
                  <h3>Total Querys</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments"></i></div>
                  <div class="count">179</div>
                  <h3>Total Comments</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-address-card"></i></div>
                  <div class="count">179</div>
                  <h3>Total Posts</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-user-graduate"></i></div>
                  <div class="count">179</div>
                  <h3>Total Students</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-university"></i></div>
                  <div class="count">179</div>
                  <h3>Total University</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row" style="display: inline-block;">
            
            <div class="top_tiles">
                <h1 style="color: greenyellow; padding: 10px; background-color:rgba(255, 255, 255, 0.979) ;">Weekly Summary</h1>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-question"></i></div>
                  <div class="count">179</div>
                  <h3>New Querys</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments"></i></div>
                  <div class="count">179</div>
                  <h3>New Comments</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-address-card"></i></div>
                  <div class="count">179</div>
                  <h3>New Posts</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-user-graduate"></i></div>
                  <div class="count">179</div>
                  <h3>New Students</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-university"></i></div>
                  <div class="count">179</div>
                  <h3>New University</h3>
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
@endsection
