@extends('layout.adminMaster')



@section('admin_content')

    <div class="panel-body">
        <div class="content-area">
            <div class="sub-bar">
                <div class="sub-title">
                    <h4>Dashboard:</h4>
                    <span>Welcome To web Admin Panel!</span>
                </div>
                <ul class="bread-crumb">
                    <li><a href="#" title="">Home</a></li>
                    <li>Dashbord</li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="top-widget">
                        <i class="fa fa-user"></i>
                        <div class="informative">
                            <span>{{\App\User::count()}}</span>
                            <em>total users</em>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="top-widget">
                        <i class="fa fa-window-restore"></i>
                        <div class="informative">
                            <span>{{\App\Product::count()}}</span>
                            <em>total Products </em>
                        </div>
                    </div>
                </div>

            </div>
            <!-- top info widgets -->
        </div>>
        <!-- bottombar -->
    </div>


@endsection