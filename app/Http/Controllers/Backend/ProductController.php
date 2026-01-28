<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Image;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function AllProduct(){
        $products = Product::latest()->get();
        return view('admin.backend.product.all_product', compact('products'));
    } // End Method

    public function AddProduct(){
        return view('admin.backend.product.add_product');
    } // End Method

    public function StoreProduct(Request $request){
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload/product'), $name_gen);
        $save_url = 'upload/product/'.$name_gen;

        Product::insert([
            'title' => $request->title,
            'slug' => strtolower(str_replace(' ', '-', $request->title)),
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Product Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.product')->with($notification);
    } // End Method
    
    public function EditProduct($id){
        $product = Product::findOrFail($id);
        return view('admin.backend.product.edit_product', compact('product'));
    } // End Method

    public function UpdateProduct(Request $request){
        $product_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/product'), $name_gen);
            $save_url = 'upload/product/'.$name_gen;

            Product::findOrFail($product_id)->update([
                'title' => $request->title,
                'slug' => strtolower(str_replace(' ', '-', $request->title)),
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'image' => $save_url, 
            ]);

            $notification = array(
                'message' => 'Product Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.product')->with($notification);

        } else {

            Product::findOrFail($product_id)->update([
                'title' => $request->title,
                'slug' => strtolower(str_replace(' ', '-', $request->title)),
                'short_description' => $request->short_description,
                'long_description' => $request->long_description, 
            ]);

            $notification = array(
                'message' => 'Product Updated Without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.product')->with($notification);
        }
    } // End Method

    public function DeleteProduct($id){
        $product = Product::findOrFail($id);
        $img = $product->image;
        unlink($img);

        Product::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method
}
