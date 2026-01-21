<?php

namespace App\Http\Controllers\Backend;
use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ReviewController extends Controller
{
    public function AllReview(){

      $reviews = Review::latest()->get();
       return view('admin.backend.review.all_review' , compact('reviews'));

    }

    public function AddReview(){
        return view('admin.backend.review.add_review');
    }

    public function StoreReview(Request $request){
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'message' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = new Review();
        $data->name = $request->name;
        $data->position = $request->position;
        $data->message = $request->message;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);
            $img->resize(150,150)->save(public_path('upload/review/'.$filename));
            
            $data->image = 'upload/review/'.$filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Review Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all_review')->with($notification);
    }

    public function EditReview($id){
        $review = Review::findOrFail($id);
        return view('admin.backend.review.edit_review', compact('review'));
    }

    public function UpdateReview(Request $request){
        $review_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);
            $img->resize(150,150)->save(public_path('upload/review/'.$filename));
            
            $save_url = 'upload/review/'.$filename;

            if (file_exists(public_path($old_img))) {
                unlink(public_path($old_img));
            }

            Review::findOrFail($review_id)->update([
                'name' => $request->name,
                'position' => $request->position,
                'message' => $request->message,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Review Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all_review')->with($notification);

        } else {
            Review::findOrFail($review_id)->update([
                'name' => $request->name,
                'position' => $request->position,
                'message' => $request->message,
            ]);

            $notification = array(
                'message' => 'Review Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all_review')->with($notification);
        }
    }

    public function DeleteReview($id){
        $review = Review::findOrFail($id);
        $img = $review->image;
        if (file_exists(public_path($img))) {
            unlink(public_path($img));
        }

        Review::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Review Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
