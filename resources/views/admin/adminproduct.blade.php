
@extends('layout.adminMaster')



@section('admin_content')


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
                                <div class="gap no-gap">
                                    <div class="inner-bg">
                                        <div class="row remove-70">
                                            @foreach($products as $product)
                                            <div class="col-md-4 col-sm-4">
                                                <div class="woo-product">
                                                    <figure> <img src="{{asset('../assets/img/products/'.$product->image)}}" alt=""> </figure>
                                                    <div class="product-meta">

                                                        <h4><a href="product-detail.html" title="">{{$product->title}}</a></h4>
                                                        <span> <span class="ok-price">{{$product->price}}</span> <span class="del-price">$250.00</span> </span>
                                                        <ul class="add-cart">
                                                            <li><a href="{{url('/admin/'.$product->id.'/product_update')}}" title=""><i class="fa fa-refresh mr-2"></i>Update</a></li>
                                                            <li><a href="{{url('/admin/'.$product->id.'/delete')}}" title=""><i class="fa fa-shopping-basket mr-2"></i>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>

                                    </div>
                                </div>
                            </div>

@endsection