<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DigitalMarketing;
use Image;

class DigitalMarketingController extends Controller
{
    public function DigitalMarketingPage(){
        $digital = DigitalMarketing::find(1);
        return view('home.digital.digital_marketing',compact('digital'));
    }

    public function EditDigitalMarketing(){
        $digital = DigitalMarketing::find(1);
        return view('admin.backend.digital_marketing.edit_digital_marketing',compact('digital'));
    }

    public function UpdateDigitalMarketing(Request $request){
        $digital_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            if (!file_exists(public_path('upload/digital'))) {
                mkdir(public_path('upload/digital'), 0777, true);
            }

            Image::make($image)->resize(526,550)->save(public_path('upload/digital/'.$name_gen));
            $save_url = 'upload/digital/'.$name_gen;

            DigitalMarketing::findOrFail($digital_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Digital Marketing Page Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        } else {
            DigitalMarketing::findOrFail($digital_id)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            $notification = array(
                'message' => 'Digital Marketing Page Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }
    }
}
