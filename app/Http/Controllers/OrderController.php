<?php

namespace App\Http\Controllers;

use App\Order;
use App\orderdProduct;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function confirm(){
        $this->validate(\request(),[

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'city' => 'required',
            'street' => 'required',
            'building' => 'required',
            'zip' => 'required',
            'payment' => 'required',
            'promo' => 'required',
            'total' => 'required',
            'user_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',



        ]);


        Order::create([
            'name' => \request('name'),
            'email' => \request('email'),
            'phone' => \request('phone'),
            'country' => \request('country'),
            'city' => \request('city'),
            'street' => \request('street'),
            'building' => \request('building'),
            'zip' => \request('zip'),
            'payment' => \request('payment'),
            'promo' => \request('promo'),
            'total' => \request('total'),
            'user_id' => \request('user_id'),
            'status' => 'pending'
        ]);

        $order_row = Order::where('user_id',\request('user_id'))->get();

        $order_id = $order_row->last()->id;

        $carts = \Cart::session(Auth::user()->id)->getContent();

        foreach($carts as $cart){
            orderdProduct::create([

                'product_id' => $cart->id,

                'quantity' => $cart->quantity,

                'order_id' =>$order_id

            ]);
        }


        return redirect()->back();



    }

    public function deleteOrder($id){
        Order::find($id)->delete();
        orderdProduct::where('order_id',$id)->delete();
        return redirect()->back();
    }

    public function order_update($id)
    {
        Order::find($id)->update([

            'name' => \request('name'),
            'email' => \request('email'),
            'phone' => \request('phone'),
            'country' => \request('country'),
            'city' => \request('city'),
            'street' => \request('street'),
            'building' => \request('building'),
            'zip' => \request('zip'),
            'payment' => \request('payment'),
            'promo' => \request('promo'),
            'total' => \request('total'),

        ]);







        return redirect('admin/product_order');



    }

    public function order_product_update($id,$product_id){


        $order_products = orderdProduct::where('order_id', $id)->get();
        foreach($order_products as $order_product ){
            if($order_product->product_id == $product_id){
                $order_product->update([
                    'product_id' => \request('product_id'),
                    'quantity' => \request('quantity')
                ]);

}

        }
        return redirect()->back();
    }

    public function order_product_delete($id,$product_id){


        $order_products = orderdProduct::where('order_id', $id)->get();
        foreach($order_products as $order_product ){
            if($order_product->product_id == $product_id){
                $order_product->delete();



            }

        }
        return redirect()->back();
    }

    public function statusChange($id){
        Order::find($id)->update([
            'status' => \request('status')
        ]);

        return redirect()->back();

    }
}
