<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function entry(){
       
        Product::create([
            'title' => request('title'),
            'image' =>request('image'),
            'price' => request('title'),
            'type' => request('title'),

            'details' => request('title'),
            'operating' => request('title'),

            'display' => request('title'),
            'processor' => request('title'),
            'processor_tech' => request('title'),
            'graphics' => request('title'),
            'memory' => request('title'),
            'hard_drive' => request('title'),
            'wireless' => request('title'),
            'power_supply' => request('title'),
            'battery' => request('title'),

            'sort1' => request('title'),
            'sort2' => request('title'),
            'sort3' => request('title'),





        ]);
    }

    public function addComment(){
        $this->validate(\request(),[

            'name'=> 'required',
            'comment'=> 'required',
            'user_id'=>'required'

        ]);

        Comment::create([
            'name' => \request('name'),
            'comment' => \request('comment'),
            'user_id' => \request('user_id')
        ]);


        return redirect()->back();

    }
}
