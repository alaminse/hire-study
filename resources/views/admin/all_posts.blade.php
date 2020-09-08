@extends('admin.admin_layouts')

@section('admin_content')

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
        <div class="title_left">
            <h3 style="padding-left: 30px">All <small>Posts</small></h3>
        </div>
    </div>
    



    <div class="row">
        <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Posts</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">


            <!-- start project list -->
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">#</th>
                    <th style="width: 20%">Post Title</th>
                    <th style="width: 20%">Thumbnail</th>
                    <th>Date</th>
                    <th style="width: 20%">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($posts as $row)
                    <tr>
                        <td>#</td>
                        <td>
                            {{$row->post_title}}
                        </td>
                        <td>
                        <img src="{{ URL::to($row->post_image) }}" height="50px;" width="50px;">
                        </td>
                        <td>
                            <small>{{$row->created_at}}</small>
                        </td>
                        <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="{{ URL::to('delete/posts/'.$row->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- end project list -->

            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- /page content -->
@endsection