<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Image;
use Carbon\Carbon;

class ServiceController extends Controller
{
    public function AllService(){
        $services = Service::latest()->get();
        return view('admin.backend.service.all_service', compact('services'));
    } // End Method

    public function AddService(){
        return view('admin.backend.service.add_service');
    } // End Method

    public function StoreService(Request $request){
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload/service'), $name_gen);
        $save_url = 'upload/service/'.$name_gen;

        Service::insert([
            'title' => $request->title,
            'slug' => strtolower(str_replace(' ', '-', $request->title)),
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Service Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.service')->with($notification);
    } // End Method
    
    public function EditService($id){
        $service = Service::findOrFail($id);
        return view('admin.backend.service.edit_service', compact('service'));
    } // End Method

    public function UpdateService(Request $request){
        $service_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/service'), $name_gen);
            $save_url = 'upload/service/'.$name_gen;

            Service::findOrFail($service_id)->update([
                'title' => $request->title,
                'slug' => strtolower(str_replace(' ', '-', $request->title)),
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'image' => $save_url, 
            ]);

            $notification = array(
                'message' => 'Service Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.service')->with($notification);

        } else {

            Service::findOrFail($service_id)->update([
                'title' => $request->title,
                'slug' => strtolower(str_replace(' ', '-', $request->title)),
                'short_description' => $request->short_description,
                'long_description' => $request->long_description, 
            ]);

            $notification = array(
                'message' => 'Service Updated Without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.service')->with($notification);
        }
    } // End Method

    public function DeleteService($id){
        $service = Service::findOrFail($id);
        $img = $service->image;
        unlink($img);

        Service::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Service Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method
}
