
@extends('layout.master')

@push('index','class="active"')

@section('content')



  <header>
    <div class="carousel" data-count="3" data-current="3">

      <div class="items">
        <button class="btn btn-control" data-direction="right"> <i class="ion-ios-arrow-right"></i></button>
        <button class="btn btn-control" data-direction="left"> <i class="ion-ios-arrow-left"></i></button>


        <div class="item center-left" data-marker="1">
          <img src="http://localhost:8000/assets/img/carousel/bckg-2.jpg" alt="Background" class="background hidden-xs hidden-sm">
          <img src="http://localhost:8000/assets/img/carousel/bckg-2-xs.jpg" alt="Background" class="background visible-sm">
          <img src="http://localhost:8000/assets/img/carousel/bckg-2-xs.jpg" alt="Background" class="background visible-xs">

          <div class="content">
            <div class="outside-content">
              <div class="inside-content">
                <div class="container align-right">

                  <h1 class="h3 colorful blue hidden-xs">Provide lightweight and powerull</h1>

                  <hr class="offset-sm">
                  <h2 class="h1 lg upp colorful blue">New amazing <br> laptops</h2>
                  <hr class="offset-md">
                  <hr class="offset-md">
                  <a href="http://localhost:8000/./store" rel="nofollow" class="btn btn-primary btn-lg black"> More laptops </a>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="item center-right" data-marker="2">
          <img src="http://localhost:8000/assets/img/carousel/bckg-1.jpg" alt="Background" class="background hidden-xs hidden-sm">
          <img src="http://localhost:8000/assets/img/carousel/bckg-1-sm.jpg" alt="Background" class="background visible-sm">
          <img src="http://localhost:8000/assets/img/carousel/bckg-1-xs.jpg" alt="Background" class="background visible-xs">

          <!-- <img src="assets/img/carousel/newlaptops.jpg" alt="New laptops" title="New laptops" class="item-left hidden-xs"/> -->

          <div class="content">
            <div class="outside-content">
              <div class="inside-content">
                <div class="container">

                  <h1 class="h3 colorful blue hidden-xs">Device is designed for the creative people</h1>
                  <hr class="offset-sm">

                  <h2 class="h1 lg upp colorful blue">Apple <br> iMac 27 Retina</h2>
                  <hr class="offset-md">
                  <hr class="offset-md">
                  <a href="http://localhost:8000/./store" rel="nofollow" class="btn btn-primary btn-lg black"> View products </a>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="item right-center" data-marker="3">
          <img src="http://localhost:8000/assets/img/carousel/bckg-3.jpg" alt="Background" class="background hidden-xs hidden-sm">
          <img src="http://localhost:8000/assets/img/carousel/bckg-3-sm.jpg" alt="Background" class="background visible-sm">
          <img src="http://localhost:8000/assets/img/carousel/bckg-3-xs.jpg" alt="Background" class="background visible-xs">

          <!-- <img src="assets/img/carousel/ipadair2.jpg" alt="Apple Devices" title="Apple Devices" class="item-right hidden-xs"/> -->

          <div class="content">
            <div class="outside-content">
              <div class="inside-content">
                <div class="container align-right">

                  <h1 class="h3 colorful blue hidden-xs">Luxury watches, business tablets and 3D touch: <br> How Apple plans to stay ahead in mobile.</h1>

                  <hr class="offset-sm">
                  <h2 class="h1 lg upp colorful blue">Brand new day <br class="hidden-xs"> for business</h2>
                  <hr class="offset-md">
                  <hr class="offset-md">
                  <a href="{{url('all/store')}}" rel="nofollow" class="btn btn-primary btn-lg black"> View store </a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <ul class="markers">
        <li data-marker="1" data-style="white" class=""></li>
        <li data-marker="2" data-style="white" class=""></li>
        <li data-marker="3" data-style="white" class="active"></li>
      </ul>

    </div>
  </header>
    <hr class="offset-lg">
    <hr class="offset-lg">


    <hr class="offset-lg">
    <hr class="offset-md">



    <section class="products">
      <div class="container">
        <h2 class="h2 upp align-center"> Desktops </h2>
        <hr class="offset-lg">

        <div class="row">
          @foreach($desktops as  $desktop)


              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                  <a href="{{url($desktop->id.'/product')}}"><img src="{{asset('../assets/img/products/'.$desktop->image)}}" alt="Apple iMac 27 Retina"/></a>

                  <div class="content align-center">
                    <p class="price">${{$desktop->price}}</p>
                    <h2 class="h3">{{$desktop->title}}</h2>
                    <hr class="offset-sm">

                    <button class="btn btn-link" href=""> <i class="ion-android-open"></i>
                      <a href="{{url($desktop->id.'/product')}}">Details</a> </button>
                    @if(\Illuminate\Support\Facades\Auth::check())
                      <a href="{{url($desktop->id.'/cart/addCart')}}"><button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button></a>
                    @else
                      <button class="btn btn-primary btn-sm rounded" data-toggle="modal" data-target="#Modal-SignIn"> <i class="ion-bag"></i> Add to cart</button>


                    @endif
                  </div>
                </div>
              </div>

          @endforeach



        </div>


        <div class="align-right align-center-xs">
          <hr class="offset-sm">
          <a href="{{asset('Desktop/store')}}"> <h5 class="upp">View all desktops </h5> </a>
        </div>
      </div>
    </section>


    <section class="products">
      <div class="container">
        <h2 class="h2 upp align-center"> Laptops</h2>
        <hr class="offset-lg">

        <div class="row">

          @foreach($laptops as $laptop)

          <div class="col-sm-6 col-md-4 product">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="{{url($laptop->id.'/product')}}"><img src="{{asset('../assets/img/products/'.$laptop->image)}}" alt="Xiamomi Mi Pad 2"/></a>

              <div class="content align-center">
                <p class="price">${{$laptop->price}}</p>
                <h2 class="h3">{{$laptop->title}}</h2>
                <hr class="offset-sm">

                <button class="btn btn-link" href=""> <i class="ion-android-open"></i>
                  <a href="{{url($laptop->id.'/product')}}">Details</a> </button>
                @if(\Illuminate\Support\Facades\Auth::check())
                  <a href="{{url($laptop->id.'/cart/addCart')}}"><button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button></a>
                @else
                  <button class="btn btn-primary btn-sm rounded" data-toggle="modal" data-target="#Modal-SignIn"> <i class="ion-bag"></i> Add to cart</button>


                @endif
              </div>
            </div>
          </div>

          @endforeach






        </div>
        <div class="align-right align-center-xs">
          <hr class="offset-sm">
          <a href="{{url('Laptop/store')}}"> <h5 class="upp">View all Laptops </h5> </a>
        </div>
      </div>
    </section>






    <section class="products">
      <div class="container">
        <h2 class="h2 upp align-center"> Tablets</h2>
        <hr class="offset-lg">

        <div class="row">



          @foreach($tablets as   $tablet)








              <div class="col-sm-6 col-md-4 product">
                <div class="body">
{{--                  <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>--}}
                  <a href="{{url($tablet->id.'/product')}}"><img src="{{asset('../assets/img/products/'.$tablet->image)}}" alt="Xiamomi Mi Pad 2"/></a>

                  <div class="content align-center">
                    <p class="price">${{$tablet->price}}</p>
                    <h2 class="h3">{{$tablet->title}}</h2>
                    <hr class="offset-sm">

                    <button class="btn btn-link" href=""> <i class="ion-android-open"></i>
                      <a href="{{url($tablet->id.'/product')}}">Details</a> </button>
                    @if(\Illuminate\Support\Facades\Auth::check())
                      <a href="{{url($tablet->id.'/cart/addCart')}}"><button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button></a>
                    @else
                      <button class="btn btn-primary btn-sm rounded" data-toggle="modal" data-target="#Modal-SignIn"> <i class="ion-bag"></i> Add to cart</button>


                    @endif
                  </div>
                </div>
              </div>






          @endforeach









        </div>
        <div class="align-right align-center-xs">
          <hr class="offset-sm">
          <a href="{{url('Tablet/store')}}"> <h5 class="upp">View all tablets </h5> </a>
        </div>
      </div>
    </section>



@endsection




