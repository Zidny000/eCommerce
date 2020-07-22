<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function checkout(){




         if(\Cart::session(Auth::user()->id)->isEmpty()){
             return view('checkout');
         }else{
             $carts = \Cart::session(Auth::user()->id)->getContent();

             $products = [];
             foreach($carts as $item){
                 $list = [
                     'price_data' => [
                         'currency' => 'usd',
                         'product_data' => [
                             'name' => $item->name
                         ],
                         'unit_amount' => $item->price,
                     ],
                     'quantity' => $item->quantity,
                 ];

                 array_push($products,$list);
             }


             \Stripe\Stripe::setApiKey('sk_test_51H4LzxLRh1ikRvHvLIZiy4f2Q9FkI9aTHPYgi7f9ewtkeUn82y2WzM2L24ZwC6WkCItqJCpoIoYcnhZcenGCFdWE00DAwdcGRr');
             $session = \Stripe\Checkout\Session::create([
                 'payment_method_types' => ['card'],
                 'line_items' => $products,

                 'mode' => 'payment',
                 'success_url' => 'http://localhost:8000',
                 'cancel_url' => 'https://localhost:8000/checkout',
             ]);



             return view('checkout',compact(['session','carts']));

         }






    }


}
