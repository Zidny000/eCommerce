<?php

namespace App\Http\Controllers;

use App\Message;
use App\Order;
use App\orderdProduct;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRouteController extends Controller
{
    public  function adminproduct(){
        $products = Product::all();
        return view('admin.adminproduct',compact('products'));
    }



    public function product_cart(){
        return view('admin.product_cart');
    }

    public function product_add(){
        return view('admin.product_add');
    }

    public function product_detail(){
        $users = User::all();
        $userType = ['admin','mod','user'];
        return view('admin.product_detail',compact(['users','userType']));


    }

    public function product_order(){
        $status_change = ['done','pending','failed'];
        $orders = Order::all();
        $order_products = orderdProduct::all();
        return view('admin.product_order',compact(['orders','order_products','status_change']));
    }

    public function adminDashboard(){
        return view('admin.adminDashboard');
    }

    public function product_update($id){
        $product=Product::find($id);
        $types= ['Laptop','Desktop','tablet'];
        return view('admin.product_update',compact(['product','types']));
    }

    public function order_update_show($id){

        $order = Order::find($id);
        $order_products = orderdProduct::where('order_id',$id)->get();
        return view('admin.order_update' , compact(['order','order_products']));
    }

    public function question(){
        $messages = Message::all();
        return view('admin.question',compact('messages'));
    }






}
