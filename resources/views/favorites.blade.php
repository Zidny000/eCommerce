@extends('layout.master')



@section('content')


    <hr class="offset-lg">
    <hr class="offset-lg">
    <hr class="offset-lg hidden-xs">

    <div class="container">
        <div class="row">
            <!-- Products -->
            <div class="col-sm-12">
                <hr class="offset-lg">

                <div class="products">
                    <div class="row">

                        <div class="col-sm-6 col-md-4 product">
                            <div class="body">
                                <a href="#favorites" class="favorites" data-favorite="active"><i class="ion-ios-heart-outline"></i></a>
                                <a href="{{asset('/product')}}"><img src="{{asset('../assets/img/products/lenovo-yoga.jpg')}}" alt="Lenovo Yoga 900"/></a>

                                <div class="content align-center">
                                    <p class="price">$1899.99</p>
                                    <h2 class="h3">Lenovo Yoga 900</h2>
                                    <hr class="offset-sm">

                                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 product">
                            <div class="body">
                                <a href="#favorites" class="favorites" data-favorite="active"><i class="ion-ios-heart-outline"></i></a>
                                <a href="{{asset('/product')}}"><img src="{{asset('../assets/img/products/surface-pro.jpg')}}" alt="Surface Pro"/></a>

                                <div class="content align-center">
                                    <p class="sale">$2099.99</p>
                                    <p class="price through">$2499.99</p>
                                    <h2 class="h3">Microsoft Surface Pro</h2>
                                    <hr class="offset-sm">

                                    <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <nav>
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </nav>
            </div>
            <!-- /// -->
        </div>
    </div>




    <hr class="offset-lg">
    <hr class="offset-sm">


@endsection
