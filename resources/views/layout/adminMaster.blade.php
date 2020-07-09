<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Web Admin panel</title>
    <link rel="icon" type="image/png" href="{{asset('images/fav.png')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.datepicker.min.css')}}">
    <!-- calander -->
    <link rel="stylesheet" href="{{asset('css/flatweather.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>
<body>
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<div class="panel-layout">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-page">
               @include('admin.partials.sidebar')
                <!-- side header -->

                    <div class="main-content">
                    @include('admin.partials.topbar')
                    <!-- responsive header -->
                        <div class="panel-body">
                            @yield('admin_content')

                            <div class="bottombar">
                                <span>© 2019. Dewwater. All Rights Reserved.</span>
                            </div>
                            <!-- bottombar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('js/chart.min.js')}}"></script>
<script src="{{asset('js/echart.min.js')}}"></script>
<script src="{{asset('js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('js/custom2.js')}}"></script>
<script src="{{asset('js/flatweather.min.js')}}"></script>
<script src="{{asset('js/html5lightbox.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script><!-- scripts -->

</body>
</html>
