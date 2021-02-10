<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function addProduct( Request $request){
        $this->validate(request(),[
            'name' => 'required',

            'price' => 'required',
            'type' => 'required',
            'detail' => 'required',
            'operating' => 'required',
            'display' => 'required',
            'processor' => 'required',
            'processor_tech' => 'required',
            'graphics' => 'required',
            'memory' => 'required',
            'hard_drive' => 'required',
            'wireless' => 'required',
            'power_supply' => 'required',
            'battery' => 'required',
            'sort_info1' => 'required',
            'sort_info2' => 'required',
            'sort_info3' => 'required'



        ]);

        $image_name = uniqid().'.jpg';

        $request->image->move('assets/img/products',$image_name);



        Product::create([
            'title' => \request('name'),
            'image' => $image_name,
            'price' => \request('price'),
            'type' => \request('type'),
            'details' => \request('detail'),
            'operating' => \request('operating'),
            'display' =>\request('display') ,
            'processor' => \request('processor'),
            'processor_tech' =>\request('processor_tech') ,
            'graphics' => \request('graphics'),
            'memory' =>\request('memory') ,
            'hard_drive' => \request('hard_drive'),
            'wireless' => \request('wireless'),
            'power_supply' => \request('power_supply'),
            'battery' => \request('battery'),
            'sort1' => \request('sort_info1'),
            'sort2' =>\request('sort_info2') ,
            'sort3' =>\request('sort_info3')
        ]);


        return view('admin/product_add');





    }

    public function update( $id){

        $this->validate(request(),[
            'name' => 'required',

            'price' => 'required',
            'type' => 'required',
            'detail' => 'required',
            'operating' => 'required',
            'display' => 'required',
            'processor' => 'required',
            'processor_tech' => 'required',
            'graphics' => 'required',
            'memory' => 'required',
            'hard_drive' => 'required',
            'wireless' => 'required',
            'power_supply' => 'required',
            'battery' => 'required',
            'sort_info1' => 'required',
            'sort_info2' => 'required',
            'sort_info3' => 'required'



        ]);



        $image_name = uniqid().'.jpg';

        request('image')->move('assets/img/products',$image_name);

        Product::find($id)->update([
            'title' => \request('name'),
            'image' => $image_name,
            'price' => \request('price'),
            'type' => \request('type'),
            'details' => \request('detail'),
            'operating' => \request('operating'),
            'display' =>\request('display') ,
            'processor' => \request('processor'),
            'processor_tech' =>\request('processor_tech') ,
            'graphics' => \request('graphics'),
            'memory' =>\request('memory') ,
            'hard_drive' => \request('hard_drive'),
            'wireless' => \request('wireless'),
            'power_supply' => \request('power_supply'),
            'battery' => \request('battery'),
            'sort1' => \request('sort_info1'),
            'sort2' =>\request('sort_info2') ,
            'sort3' =>\request('sort_info3')
        ]);

        return redirect('admin/showProduct');
    }

    public function delete($id){
        Product::find($id)->delete();
        return redirect()->back();

    }




}
