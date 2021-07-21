


<div class="toplinks">
    @if(\Illuminate\Support\Facades\Auth::check())
        <a href="{{url('/user/logout')}}" > <i class="ion-person"></i>({{\Illuminate\Support\Facades\Auth::user()->name}}) Logout</a>
    @else
    <a href="#signin" data-toggle="modal" data-target="#Modal-Registration"> <i class="ion-person"></i> Registration</a>
    <a href="#signin" data-toggle="modal" data-target="#Modal-SignIn"> <i class="ion-unlocked"></i> Sign In</a>
    @endif

    
</div>


<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./"> Unistore Pro </a>
            @if(\Illuminate\Support\Facades\Auth::check())
            <a class="navbar-brand pull-right hidden-sm hidden-md hidden-lg" href="#open-cart"> <i class="ion-bag"></i> {{\Cart::session(\Illuminate\Support\Facades\Auth::user()->id)->getContent()->count()}} </a>
            @endif
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li @stack('index') ><a href="{{asset('/index')}}">Home</a></li>
                <li @stack('store') ><a href="{{asset('all/store')}}">Store</a></li>
                @if(\Illuminate\Support\Facades\Auth::check())
                <li @stack('checkout') ><a href="{{asset('/checkout')}}">Checkout</a></li>
                @endif
                <li @stack('contacts') ><a href="{{asset('/contacts')}}">Contacts</a></li>

            </ul>
        </div><!--/.nav-collapse -->

        <form action="{{url('/search')}}" method="GET">
        <div class="search hidden-xs" data-style="hidden">
            <div class="input">

                <button type="button"><i class="ion-ios-search"></i></button>

                <input type="text" name="search" value="" placeholder="Type here..." />

            </div>
        </div>
        </form>
    </div><!--/.container-fluid -->
</nav>

