@extends('layout.master')

@push('product','class="active"')

@section('content')

    <hr class="offset-lg">
    <hr class="offset-lg">
    <hr class="offset-lg hidden-xs">



    <section class="product">
        <div class="container">

            <div class="row">

                <div class="col-sm-7 col-md-7 white no-padding">

                    <div class="carousel" data-count="3" data-current="1">

                        <div class="items">



                            <div class="item center" data-marker="1">
                                <img src="{{asset('../assets/img/products/'.$product->image)}}" alt="Microsoft Surface Studio" class="background"/>

                            </div>


                        </div>

                        <ul class="markers">
                            <li data-marker="1" data-style="white" class="active"></li>

                        </ul>

                    </div>
                </div>
                <div class="col-sm-5 col-md-5 no-padding-xs">
                    <div class="caption">
                        <img src="../assets/img/brands/microsoft.png" alt="Microsoft" class="brand hidden-xs hidden-sm" />

                        <h1>{{$product->title}}</h1>

                        <p> {{$product->sort1}}</p>
                        <p> {{$product->sort2}}</p>
                        <p> {{$product->sort3}}</p>
                        <hr class="offset-md hidden-sm">
                        <hr class="offset-sm visible-sm">
                        <hr class="offset-xs visible-sm">

                        <p class="price">${{$product->price}}</p>
                        <p class="price through">$3 449.99</p>
                        <hr class="offset-md">
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <a href="{{url($product->id.'/cart/addCart')}}"><button class="btn btn-primary rounded"> <i class="ion-bag"></i> Add to cart</button></a>
                        @else
                            <button class="btn btn-primary rounded" data-toggle="modal" data-target="#Modal-SignIn"> <i class="ion-bag"></i> Add to cart</button>
                        @endif
                    </div>
                </div>

            </div>
            <hr class="offset-sm hidden-xs">

            <div class="row">
                <div class="col-sm-7 white sm-padding">
                    <hr class="offset-sm visible-xs">

                    <h2 class="h1">{{$product->title}}</h2>
                    <br>

                    <p>
                        {{$product->details}}
                    </p>
                    <br>

                    <h2>Product specifications</h2>
                    <br>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Operating System</label> </div>
                        <div class="col-sm-8"> <p>{{$product->operating}}</p> </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Display</label> </div>
                        <div class="col-sm-8">
                            <p>
                                {{$product->display}}
                            </p>
                        </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Processor</label> </div>
                        <div class="col-sm-8"> <p>{{$product->processor}}</p> </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Processor technology</label> </div>
                        <div class="col-sm-8"> <p>{{$product->processor_tech}}</p> </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Graphics</label> </div>
                        <div class="col-sm-8"> <p>{{$product->graphics}}</p> </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Memory</label> </div>
                        <div class="col-sm-8"> <p>{{$product->memory}}</p> </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Hard drive</label> </div>
                        <div class="col-sm-8"> <p>{{$product->hard_drive}}</p> </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Wireless</label> </div>
                        <div class="col-sm-8">
                            <p>
                                {{$product->wireless}}
                            </p>
                        </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Power supply</label> </div>
                        <div class="col-sm-8"> <p>{{$product->power_supply}}</p> </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Battery</label> </div>
                        <div class="col-sm-8"> <p>{{$product->battery}}</p> </div>
                    </div>

                    <hr class="offset-lg">
                </div>

                <div class="col-sm-5 no-padding-xs">
                    <div class="talk white">
                        <h2 class="h3">Do you have any questions?</h2>
                        <p class="">Whatsuping now with our manager</p>
                        <hr class="offset-md">

                        <a href="tel:+80005554465" class="btn btn-primary btn-sm"> <i class="ion-social-whatsapp"></i> 8000 555-44-65 </a>
                        <hr class="offset-md visible-xs">
                    </div>
                    <hr class="offset-sm hidden-xs">

                    <div class="comments white">
                        <h2 class="h3">What do you think? </h2>
                        <br>


                        <div class="wrapper">
                            <div class="content">

                                @foreach($comments as $comment )
                                @if($comment->user_id == $product->id)
                                <h3>{{ $comment->name }}</h3>
                                <label>{{$comment->created_at->diffForHumans()}}</label>
                                <p>
                                    {{$comment->comment}}
                                </p>

                                @endif


                                @endforeach





                            </div>
                        </div>
                        <hr class="offset-lg">
                        <hr class="offset-md">

                        @if(\Illuminate\Support\Facades\Auth::check())
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Modal-Comment"> <i class="ion-chatbox-working"></i> Add comment </button>
                        @else
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Modal-SignIn"> <i class="ion-chatbox-working"></i> Add comment </button>
                        @endif
                        <hr class="offset-md visible-xs">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="offset-lg">

    <section class="products">
        <div class="container">
            <h2 class="upp align-center-xs"> Related products </h2>
            <hr class="offset-lg">

            <div class="row">




            <p style="display: none"> {{$relates = \App\Product::where('type',$product->type)->get()}}</p>

            @foreach($relates as $relate)
                @if($relate->id !== $product->id)
                    <div class="col-sm-6 col-md-3 product">
                        <div class="body">
                            {{--                <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>--}}
                            <a href="{{url($relate->id.'/product')}}"><img src="{{asset('../assets/img/products/'.$relate->image)}}" alt="Apple iMac 27 Retina"/></a>

                            <div class="content align-center">
                                <p class="price">${{$relate->price}}</p>
                                <h2 class="h3">{{$relate->title}}</h2>
                                <hr class="offset-sm">

                                <button class="btn btn-link" href=""> <i class="ion-android-open"></i>
                                    <a href="{{url($relate->id.'/product')}}">Details</a> </button>
                                @if(\Illuminate\Support\Facades\Auth::check())
                                    <a href="{{url($relate->id.'/cart/addCart')}}"><button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button></a>
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
    </section>


    <hr class="offset-lg">
    <hr class="offset-sm">



    <div class="modal fade" id="Modal-Comment" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header align-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
                    <h1 class="h4 modal-title">Add your comment</h1>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form class="join" action="{{url('/user/comments')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">


                                <input type="hidden" name="user_id" value="{{$product->id}}">

                                <div class="col-sm-12 ">
                                    <textarea name="comment" placeholder="Type here" required="" class="form-control" rows="5"></textarea>
                                    <br>
                                </div>
                                @if(\Illuminate\Support\Facades\Auth::check())
                                <div class="col-sm-12 ">
                                    <input type="hidden" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" placeholder="Name" required="" class="form-control" />
                                </div>

                                @endif


                                <div class="col-sm-12">
                                    <div class="align-center">
                                        <br>
                                        <button type="submit" class="btn btn-primary btn-sm"> <i class="ion-android-send"></i> Send</button>
                                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal"> <i class="ion-android-share"></i> No, thanks </button>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
