<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RouteController extends Controller
{
    public function index(){
        $desktops = Product::where('type','Desktop')->paginate(3);
        $laptops = Product::where('type','Laptop')->paginate(3);
        $tablets = Product::where('type','Tablet')->paginate(3);
        return view('index',compact(['desktops','laptops','tablets']));
    }

//

    public function store($type){


        $products = Product::latest()->paginate(9);



//        dd($type);

        return view('store',compact(['products' , 'type' ]));
    }

    public function stores(){
        $type = 'all';
        $search = \request('search');
        $products = Product::where('title','LIKE', '%'.$search.'%')->paginate(9);
        return view('store', compact(['products' , 'type' ]));
    }

    public function contacts(){
        return view('contacts');
    }

    public function product($id){

        $product = Product::find($id);
        $comments = Comment::latest()->get();
        return view('product',compact(['product','comments']));
    }



    public function favorites(){
        return view('favorites');

    }
}
