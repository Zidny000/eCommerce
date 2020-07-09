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
            <div class="gap no-gap">
                <div class="inner-bg">
                    <div class="element-title">
                        <h4>Product Orders</h4>
                    </div>
                    <table class="cart-table table table-responsive">
                        <thead>
                        <tr>
                            <th>Order ID </th>
                            <th>customer</th>
                            <th>product id</th>
                            <th>product name</th>
                            <th>qty</th>
                            <th>status</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->name}}</td>

                            <td>
                                @foreach($order_products as $order_product)
                                    @if($order->id == $order_product->order_id)
                                <li>
                                    {{$order_product->product_id}}
                                </li>
                                    @endif
                                @endforeach
                            </td>

                            <td>
                                @foreach($order_products as $order_product)
                                    @if($order->id == $order_product->order_id)
                                        <li>
                                            {{\App\Product::find($order_product->product_id)->title}}
                                        </li>
                                    @endif
                                @endforeach
                            </td>

                            <td>
                                @foreach($order_products as $order_product)
                                    @if($order->id == $order_product->order_id)
                                        <li>
                                            {{$order_product->quantity}}
                                        </li>
                                    @endif
                                @endforeach
                            </td>


                            <td>
                                    <form method="POST" action="{{url('/admin/'.$order->id.'/statusChange')}}">
                                    {{csrf_field()}}

                                    <select name="status" id="">
                                        @foreach($status_change as $c)
                                            @if($c == $order->status)
                                                <option selected class="failed" value="{{$order->status}}">{{$c}}</option>
                                            @else
                                                <option value="{{$c}}">{{$c}}</option>

                                            @endif
                                        @endforeach
                                    </select>
                                    <input type="submit" name="submit" value="update" class="failed">
                                </form>
                                </td>
                            <td><a href="{{url('admin/'.$order->id.'/order/delete')}}" title=""><i class="icon-trash"></i></a> <a href="{{url('admin/'.$order->id.'/order_update')}}" title=""><i class="icon-pencil"></i></a></td>
                        </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>

@endsection