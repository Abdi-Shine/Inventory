<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Barryvdh\DomPDF\Facade\Pdf;
class SliderController extends Controller
{
    // start View_Slider
    public function ViewSlider()
    {
        $sliders = Slider::oldest()->get();
       return view('admin.backend.slider.view_slider', compact('sliders'));
    } 
    // end View_Slider

    // start AddSlider
    public function AddSlider(){
        return view('admin.backend.slider.add_slider');
    }
    // end AddSlider
    
    // start EditSlider
     public function EditSlider($id){
        $slider = Slider::findOrFail($id);
        return view('admin.backend.slider.edit_slider', compact('slider'));
    }
    // end EditSlider



    // start StoreSlider
     public function StoreSlider(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = new Slider();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->link = $request->link;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);
            $img->resize(150,150)->save(public_path('upload/slider/'.$filename));
            
            $data->image = 'upload/slider/'.$filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Slider Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('view_slider')->with($notification);
    }
    // end StoreSlider

    // Start update slider
     public function UpdateSlider(Request $request){
        $slider_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);
            $img->resize(150,150)->save(public_path('upload/slider/'.$filename));
            
            $save_url = 'upload/slider/'.$filename;

            if (file_exists(public_path($old_img))) {
                unlink(public_path($old_img));
            }

            Slider::findOrFail($slider_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'link' => $request->link,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Slider Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('view_slider')->with($notification);

        } else {
            Slider::findOrFail($slider_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'link' => $request->link,
            ]);

            $notification = array(
                'message' => 'Slider Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('view_slider')->with($notification);
        }
    }
    // end update slider

    // Start Delete Slider
    public function DeleteSlider($id){
        $slider = Slider::findOrFail($id);
        $img = $slider->image;
        if (file_exists(public_path($img))) {
            unlink(public_path($img));
        }
        Slider::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Slider Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    // end delete slider
    
    // preview slider
     public function PreviewSlider($id){
        $slider = Slider::findOrFail($id);
        return view('admin.backend.slider.preview_slider', compact('slider'));
    }
    // end preview slider
    
}
