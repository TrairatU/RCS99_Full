<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Image;
use File;

class ProductController extends Controller
{
    public function index() {
        $product = Product::orderBy('created_at','desc')->Paginate(5);
        return view('admin.product.index', compact('product'));
    }

    public function create() {
        return view('admin.product.create');
    }

    public function insertProduct(Request $request) {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'description' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ],[
            'name.required' => 'กรุณากรอกชื่อสินค้า',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
            'price.required' => 'กรุณากรอกราคาสินค้า',
            'price.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
            'description.required' => 'กรุณากรอกรายละเอียดสินค้า',
            'image.mimes' => 'อัพโหลดได้เฉพาะไฟล์ที่มีนามสกุล .jpg, .jpeg และ .png เท่านั้น',
           
        ]);
        $product = new Product();
        
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        if($request->hasFile('image')){
            $fileName = Str::random(10). '.' .$request->file('image')->getClientOriginalExtension();
            
            $request->file('image')->move(public_path().'/backend/upload/', $fileName);

            Image::make(public_path().'/backend/upload/'.$fileName)->resize(480,480)
            ->save(public_path().'/backend/upload/resize/'.$fileName);

            $product->image = $fileName;
        }else{
            $product->image = 'nopic.png';
        }

        alert()->success('บันทึกข้อมูลสินค้าแล้ว','บันทึกข้อมูลสินค้าในฐานข้อมูลแล้ว');
        $product->save();
        return redirect('admin/product/index');

        

    }

    public function delete($id) {
        $product = Product::find($id);
        if($product->image != 'nopic.png'){
            File::delete(public_path().'/backend/upload/'.$product->image);
            File::delete(public_path().'/backend/upload/resize/'.$product->image);
        }
        alert()->success('ลบข้อมูลสินค้าแล้ว','ลบข้อมูลสินค้าในฐานข้อมูลแล้ว');
        $product->delete();
        return  redirect('admin/product/index');
    }

    public function edit($id) {
        $product = Product::find($id);
        return  view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'description' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ],[
            'name.required' => 'กรุณากรอกชื่อสินค้า',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
            'price.required' => 'กรุณากรอกราคาสินค้า',
            'price.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
            'description.required' => 'กรุณากรอกรายละเอียดสินค้า',
            'image.mimes' => 'อัพโหลดได้เฉพาะไฟล์ที่มีนามสกุล .jpg, .jpeg และ .png เท่านั้น',
           
        ]);
        
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        if($request->hasFile('image')){
            if($product->image != 'nopic.png'){
                File::delete(public_path().'/backend/upload/'.$product->image);
                File::delete(public_path().'/backend/upload/resize/'.$product->image);
            }
            $fileName = Str::random(10). '.' .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/backend/upload/', $fileName);
            Image::make(public_path().'/backend/upload/'.$fileName)->resize(480,480)
            ->save(public_path().'/backend/upload/resize/'.$fileName);

            $product->image = $fileName;
        }
        alert()->success('แก้ไขข้อมูลสินค้าแล้ว','ข้อมูลสินค้าถูกแก้ไขในฐานข้อมูลแล้ว');
        $product->update();

        return redirect('admin/product/index');
    }
}
