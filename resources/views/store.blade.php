@extends('layout.master')

@push('store','class="active"')

@section('content')


    <hr class="offset-top">

    <div class="tags">
        <div class="container">


            <p>Search by tags</p>
{{--            <div class="btn-group" data-toggle="buttons">--}}
                <a href="{{url('all/store')}}"><label class="btn btn-default btn-sm active">
                     All products
                </label></a>
                <a href="{{url('Desktop/store')}}"><label class="btn btn-default btn-sm">
                      Desktops
                </label></a>
                <a href="{{url('Laptop/store')}}"> <label class="btn btn-default btn-sm">
                     Laptops
                </label></a>
                <a href="{{url('Tablet/store')}}"><label class="btn btn-default btn-sm">
                      Tablets
                </label></a>

{{--            </div>--}}
        </div>
    </div>



    <div class="container">
        <div class="row">


            <!-- Products -->



                <hr class="offset-lg">

                <div class="products">
                    <div class="row">

                        <p style="display: none">{{$pass ='all'}}</p>


                        @foreach($products as $product)

                         @if($product->type == $type || $pass == $type)

                        <div class="col-sm-6 col-md-4 product">

                            <div class="body">
{{--                                <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>--}}
                                <a href="{{url($product->id.'/product')}}"><img src="{{asset('../assets/img/products/'.$product->image)}}" alt="Apple iMac 27 Retina"/></a>

                                <div class="content">
                                    <h1 class="h3">{{$product->title}}</h1>
                                    <p class="price">${{$product->price}}</p>
                                    <label>{{$product->type}}</label>

                                    <button class="btn btn-link" href="{{url($product->id.'/product')}}"> <i class="ion-android-open"></i>
                                        <a href="{{url($product->id.'/product')}}">Details</a> </button>
                                    @if(\Illuminate\Support\Facades\Auth::check())
                                        <a href="{{url($product->id.'/cart/addCart')}}"><button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button></a>
                                    @else
                                        <button class="btn btn-primary btn-sm rounded" data-toggle="modal" data-target="#Modal-SignIn"> <i class="ion-bag"></i> Add to cart</button>


                                    @endif
                                </div>
                            </div>

                        </div>
                            @endif
                        @endforeach




                    </div>
                </div>

        {{   $products->links() }}

{{--                <nav>--}}
{{--                    <ul class="pagination">--}}
{{--                        <li>--}}
{{--                            <a href="#" aria-label="Previous">--}}
{{--                                <span aria-hidden="true"><i class="ion-ios-arrow-left"></i></span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="active"><a href="#">1</a></li>--}}
{{--                        <li><a href="#">2</a></li>--}}
{{--                        <li><a href="#">3</a></li>--}}
{{--                        <li class="disabled"><a href="#">..</a></li>--}}
{{--                        <li><a href="#">10</a></li>--}}
{{--                        <li>--}}
{{--                            <a href="#" aria-label="Next">--}}
{{--                                <span aria-hidden="true"><i class="ion-ios-arrow-right"></i></span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}

            <!-- /// -->
        </div>
    </div>




    <hr class="offset-lg">
    <hr class="offset-sm">


@endsection