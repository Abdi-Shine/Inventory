<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\About;
use App\Models\MultiImage;
use Carbon\Carbon;
use Image;

class AboutController extends Controller
{
    public function AboutPage(){
        $about = About::find(1);
        return view('admin.backend.about.View_mission',compact('about'));
    }

    public function EditAboutPage(){
        $about = About::find(1);
        return view('admin.backend.about.Edit_mission',compact('about'));
    }

    public function UpdateAbout(Request $request){
        $about_id = $request->id;

        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/home_about'), $name_gen);
            $save_url = 'upload/home_about/'.$name_gen;

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_description' => $request->short_description,
                'long_title' => $request->long_title,
                'long_description' => $request->long_description,
                'about_image' => $save_url,
            ]); 
            $notification = array(
                'message' => 'About Page Updated with Image Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        } else{
            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_description' => $request->short_description,
                'long_title' => $request->long_title,
                'long_description' => $request->long_description,
            ]); 
            $notification = array(
                'message' => 'About Page Updated without Image Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        } // end Else

    } // End Method


    public function AboutMultiImage(){
        $allMultiImage = MultiImage::all();
        return view('admin.backend.about.all_multiimage',compact('allMultiImage'));
    }

    public function AddMultiImage(){
        return view('admin.backend.about.add_multiimage');
    }

    public function StoreMultiImage(Request $request){
        $request->validate([
             'image' => 'required',
        ]);
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload/home_about'), $name_gen);
        $save_url = 'upload/home_about/'.$name_gen;

        MultiImage::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]); 
        $notification = array(
            'message' => 'Multi Image Inserted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function EditMultiImage($id){
        $multiImage = MultiImage::findOrFail($id);
        return view('admin.backend.about.edit_multiimage',compact('multiImage'));
    }

    public function UpdateMultiImage(Request $request){
        $multi_image_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/home_about'), $name_gen);
            $save_url = 'upload/home_about/'.$name_gen;

            MultiImage::findOrFail($multi_image_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $save_url,
            ]); 
            $notification = array(
                'message' => 'Multi Image Updated Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->route('about.multi.image')->with($notification);

        } else{
            MultiImage::findOrFail($multi_image_id)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]); 
            $notification = array(
                'message' => 'Multi Image Updated Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->route('about.multi.image')->with($notification);

        } // end Else
    } // End Method

    public function DeleteMultiImage($id){
        $multi = MultiImage::findOrFail($id);
        $img = $multi->image;
        @unlink($img);

        MultiImage::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Multi Image Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
