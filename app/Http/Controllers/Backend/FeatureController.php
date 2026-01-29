<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
use Image;
use Carbon\Carbon;

class FeatureController extends Controller
{
    public function AllFeatures(){
        $features = Feature::latest()->get();
        return view('admin.backend.features.all_features',compact('features'));
    } // End Method
    
    public function AddFeatures(){
        return view('admin.backend.features.add_features');
    } // End Method

    public function StoreFeatures(Request $request){
        Feature::insert([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon,
            'created_at' => Carbon::now(),
        ]);

         $notification = array(
            'message' => 'Feature Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.features')->with($notification);
    } // End Method

    public function EditFeatures($id){
        $feature = Feature::findOrFail($id);
        return view('admin.backend.features.edit_features',compact('feature'));
    } // End Method

    public function UpdateFeatures(Request $request){
        $feature_id = $request->id;

        Feature::findOrFail($feature_id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon,
        ]); 
        
        $notification = array(
            'message' => 'Feature Updated Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('all.features')->with($notification);

    } // End Method

    public function DeleteFeatures($id){
        $feature = Feature::findOrFail($id);
        $img = $feature->image;
        @unlink(public_path($img));

        Feature::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Feature Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method
}
