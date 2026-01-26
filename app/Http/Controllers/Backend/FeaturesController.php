<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Features;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Barryvdh\DomPDF\Facade\Pdf;
class FeaturesController extends Controller
{
    // start View_Feature
    public function ViewFeature()
    {
        $feature = Features::oldest()->get();
       return view('admin.backend.feature.view_feature', compact('feature'));
    } 
    // end View_Feature

    // start AddFeature
    public function AddFeature(){
        return view('admin.backend.feature.add_feature');
    }
    // end AddFeature

    // start EditFeature
     public function EditFeature($id){
        $feature = Features::findOrFail($id);
        return view('admin.backend.feature.edit_feature', compact('feature'));
    }
    // end EditFeature

     // start StoreFeature
     public function StoreFeature(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);

        $data = new Features();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->icon = $request->icon;

        if ($request->file('icon')) {
            $file = $request->file('icon');
            $filename = date('YmdHi').$file->getClientOriginalName();
            
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);
            $img->resize(150,150)->save(public_path('upload/feature/'.$filename));
            
            $data->icon = 'upload/feature/'.$filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Feature Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('view_feature')->with($notification);
    }
    // end StoreFeature
    
    // Start update slider
     public function UpdateFeature(Request $request){
        $feature_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('icon')) {
            $file = $request->file('icon');
            $filename = date('YmdHi').$file->getClientOriginalName();
            
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);
            $img->resize(150,150)->save(public_path('upload/feature/'.$filename));
            
            $save_url = 'upload/feature/'.$filename;

            if (file_exists(public_path($old_img))) {
                unlink(public_path($old_img));
            }

            Features::findOrFail($feature_id)->update([
                'title' => $request->title,
                'description' => $request->description,               
                'icon' => $save_url,
            ]);

            $notification = array(
                'message' => 'Feature Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('view_feature')->with($notification);

        } else {
            Features::findOrFail($feature_id)->update([
                'title' => $request->title,
                'description' => $request->description,               
            ]);

            $notification = array(
                'message' => 'Feature Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('view_feature')->with($notification);
        }
    }
    // end update feature
    
    // Start Delete feature
    public function DeleteFeature($id){
        $feature = Features::findOrFail($id);
        $img = $feature->icon;
        if (file_exists(public_path($img))) {
            unlink(public_path($img));
        }
        Features::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Feature Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    // end delete feature

    // preview feature
     public function PreviewFeature($id){
        $feature = Features::findOrFail($id);
        return view('admin.backend.feature.preview_feature', compact('feature'));
    }
    // end preview feature

}
