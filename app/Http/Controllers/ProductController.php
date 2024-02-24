<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Image;

class ProductController extends Controller
{
    public function index() {
        return view('admin.product.index');
    }

    public function create() {
        return view('admin.product.create');
    }

    public function insertProduct(Request $request) {
        $product = new Product();
        
        $product->name = $request->name;
        $product->price = $request->price;
        $product->desciption = $request->description;

        if($request->hasFile('image')){
            $fileName = Str::random(10). '.' .$request->file('image')->getClientOriginalExtension();
            
            $request->file('image')->move(public_path().'/backend/upload/', $fileName);

            Image::make(public_path().'/backend/upload/'.$fileName)->resize(480,480)
            ->save(public_path().'/backend/upload/resize/'.$fileName);

            $product->image = $fileName;
        }else{
            $product->image = 'nopic.png';
        }

        $product->save();

        return redirect('admin/product/index');

    }
}
