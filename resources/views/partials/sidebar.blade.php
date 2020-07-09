

@if(\Illuminate\Support\Facades\Auth::check())


<div class="cart" data-toggle="inactive">


    <div class="label">
        <i class="ion-bag"></i> {{\Cart::session(\Illuminate\Support\Facades\Auth::user()->id)->getContent()->count()}}
    </div>


    <div class="overlay"></div>

    <div class="window">
        <div class="title">
            <button type="button" class="close"><i class="ion-android-close"></i></button>
            <h4>Shopping cart</h4>
        </div>

        <div class="content">



            <p style="display: none">{{$carts = \Cart::session(\Illuminate\Support\Facades\Auth::user()->id)->getContent()}}</p>

            @if(\Cart::session(\Illuminate\Support\Facades\Auth::user()->id)->getContent()->count() > 0)

            @foreach($carts as $cart)

            <div class="media">
                <div class="media-left">


                    <a href="#">
                        <img class="media-object" src="{{asset('assets/img/products/'.\App\Product::find($cart->id)->image)}}" alt="HP Chromebook 11"/>
                    </a>

                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{$cart->name}}</h4>

                    <label>{{\App\Product::find($cart->id)->type}}</label>
                    <p class="price">${{$cart->price}}</p>
                </div>
                <div class="controls">
                    <div class="input-group">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="minus"><i class="ion-minus-round"></i></button>
                </span>
                        <input type="text" class="form-control input-sm" placeholder="Qty" value="{{$cart->quantity}}" readonly="">
                        <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="plus"><i class="ion-plus-round"></i></button>
                </span>
                    </div><!-- /input-group -->

                    <a href="{{url( $cart->id.'/cart/deleteCart')}}"> <i class="ion-trash-b"></i> Remove </a>
                </div>
            </div>
            @endforeach

            @endif



        </div>

        <div class="checkout container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 align-right">
                    <a class="btn btn-primary" href="{{asset('/checkout')}}"> Checkout order </a>
                </div>
            </div>
        </div>
    </div>
</div>



@endif
