<?php

namespace App\Http\Controllers;

use App\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavCartController extends Controller
{
    public function addCart($id){
        $product = Product::find($id);
        $user_id = Auth::user()->id;






        \Cart::session($user_id)->add(array(
            'id' => $product->id,
            'name' => $product->title,
            'price' => $product->price,


            'quantity' => 1,
            'attributes' => array(
                'type' => $product->type
            ),
            'associatedModel' => $product

            ));

        return redirect()->back();


    }

    public function deleteCart($id){

        $user_id = Auth::user()->id;
        \Cart::session($user_id)->remove($id);

        return redirect()->back();
    }
}
