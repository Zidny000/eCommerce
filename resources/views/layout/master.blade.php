<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Unistore Pro &middot; Premium Responsive E-Commerce Template</title>

    <meta name="description" content="Bootstrap template for you store - E-Commerce Bootstrap Template">
    <meta name="keywords" content="unistore, e-commerce bootstrap template, premium e-commerce bootstrap template, premium bootstrap template, bootstrap template, e-commerce, bootstrap template, sunrise digital">
    <meta name="author" content="Sunrise Digital">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.png')}}">

    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/ionicons-2.0.1/css/ionicons.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,100,300' rel='stylesheet' type='text/css'>

    <link href="{{asset('assets/css/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

@include('partials.sidebar')

@include('partials.navbar')

@yield('content')






@include('partials.footer')














<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('assets/js/jquery-latest.min.js')}}"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/core.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/store.js')}}"></script>
<script type="text/javascript" src="{{'assets/js/carousel.js'}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.touchSwipe.min.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/custom-scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>


<script type="text/javascript" src="{{asset('assets/js/jquery-ui-1.11.4.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.ui.touch-punch.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function(){
    });
</script>

</body>

</html>