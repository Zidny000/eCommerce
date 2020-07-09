@extends('layout.adminMaster')



@section('admin_content')



    <div class="container checkout">



            <div class="row">




                <div class="col-md-7">
                    <form action="{{url('admin/'.$order->id.'/order_update_confirm')}}" method="post" class="form-group">
                        {{csrf_field()}}

                        <h2>Buyer Info</h2>
                    <hr class="offset-top">

                    <div class="row group">
                        <div class="col-sm-4"><h2 class="h4">Receiver</h2></div>
                        <div class="col-sm-8"> <input type="text" class="form-control" name="name" value="{{$order->name}}" required="" placeholder="" /></div>
                    </div>

                    <div class="row group">
                        <div class="col-sm-4"><h2 class="h4">Phone</h2></div>
                        <div class="col-sm-8"> <input type="text" class="form-control" name="phone" value="{{$order->phone}}" required="" placeholder="" /></div>
                    </div>

                    <div class="row group">
                        <div class="col-sm-4"><h2 class="h4">E-mail</h2></div>
                        <div class="col-sm-8"> <input type="email" class="form-control" name="email" value="{{$order->email}}" required="" placeholder="" /></div>
                    </div>

                    <div class="row group">
                        <div class="col-sm-4"><h2 class="h4">Payment</h2></div>
                        <div class="col-sm-8"> <input class="form-control select" id="payment" name="payment" value="{{$order->payment}}" placeholder="" required="" /></div>
                    </div>

                    <div class="row group">
                        <div class="col-sm-4"><h2 class="h4">Promo Code</h2></div>
                        <div class="col-sm-8"> <input type="text" class="form-control" name="promo" value="{{$order->promo}}" required="" placeholder="" /></div>
                    </div>

                    <div class="row group">
                        <div class="col-sm-4"><h2 class="h4">Total</h2></div>
                        <div class="col-sm-8"> <input type="text" class="form-control" name="total" value="{{$order->total}}" required="" placeholder="" /></div>
                    </div>

                    <div class="row group">
                        <div class="col-sm-4"><h2 class="h4">Choose country</h2></div>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="country" value="{{$order->country}}" required="" placeholder="" />

                          </div>
                    </div>
                    <div class="row group">
                        <div class="col-sm-4"><h2 class="h4">City</h2></div>
                        <div class="col-sm-8"> <input type="text" class="form-control" name="city" value="{{$order->city}}" required="" placeholder="" /></div>
                    </div>
                    <div class="row group">
                        <div class="col-sm-4"><h2 class="h4">Street</h2></div>
                        <div class="col-sm-8"> <input type="text" class="form-control" name="street" value="{{$order->street}}" required="" placeholder="" /></div>
                    </div>
                    <div class="row group">
                        <div class="col-sm-4"><h2 class="h4">Building</h2></div>
                        <div class="col-sm-8"> <input type="text" class="form-control" name="building" value="{{$order->building}}" required="" placeholder="" /></div>
                    </div>
                    <div class="row group">
                        <div class="col-sm-4"><h2 class="h4">Zip</h2></div>
                        <div class="col-sm-8"> <input type="text" class="form-control" name="zip" value="{{$order->zip}}" required="" placeholder="" /></div>
                    </div>



                    <hr class="offset-md">

                    <button class="btn btn-primary pull-right" type="submit">update</button>

                    </form>
                </div>












                <div class="col-md-5 white">
                    <h2> Product Manage</h2>
                    <hr class="offset-md visible-xs visible-sm">




                        <div class="content">


                            @foreach($order_products as $order_product)



                                <div class="">
                                    <form action="{{url('admin/'.$order->id.'/order/'.$order_product->product_id.'/product/update')}}" method="post">
                                        {{csrf_field()}}
                                    <div class="row">

                                        <div class="col-md-4">
                                            <h2 class="h4"> Id</h2>

                                            <input type="text" class="form-control" name="product_id" value="{{$order_product->product_id}}" required="" placeholder="" />
                                        </div>
                                        <div class="col-md-4">
                                            <h2 class="h4">Quantity</h2>

                                            <input type="text" class="form-control" name="quantity" value="{{$order_product->quantity}}" required="" placeholder="" />
                                        </div>
                                        <div class="col-md-4 ">
                                            <h2 class="h4">Action</h2>



                                             <div class="d-flex">

                                                    <button class="btn btn-primary btn-sm" type="submit">update</button>
                                                    <a href="{{url('admin/'.$order->id.'/order/'.$order_product->product_id.'/product/delete')}}" class="btn btn-danger btn-xs" >Delete</a>

                                             </div>



                                        </div>
                                    </div>
                                    </form>

                                </div>



                            @endforeach

                        </div>





                    <hr class="offset-md visible-xs visible-sm">
                </div>












{{--                    <input type="hidden" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" name="user_id">--}}













            </div>






    </div>

@endsection