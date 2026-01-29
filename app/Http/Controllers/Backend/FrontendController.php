<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Product;
use App\Models\About;
use App\Models\MultiImage;

class FrontendController extends Controller
{
    public function AboutUs()
    {
        $about = About::find(1);
        $multiImage = MultiImage::all();
        return view('home.about.about_us',compact('about','multiImage'));
    }

    public function ServiceDetails($slug){
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('frontend.service_details', compact('service'));
    }

    public function ProductDetails($slug){
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('frontend.product_details', compact('product'));
    } // End Method

    public function ContactUs()
    {
        return view('home.contact.contact_us');
    }
     public function ContactMessage(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        $notification = array(
            'message' => 'Your message has been sent successfully.',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    
    // Show edit title form
    //-------------------------------------------------------------------//
     // start View_Slider
    public function ViewAnswer()
    {
        $contact = Contact::oldest()->get();
       return view('admin.backend.answer.view_answer', compact('contact'));
    } 
    // end View_Slider

    // start AddSlider
    public function AddAnswer(){
        return view('admin.backend.answer.add_answer');
    }
    // end AddSlider
    
    // start EditSlider
     public function EditAnswer($id){
        $contact = Contact::findOrFail($id);
        return view('admin.backend.answer.edit_answer', compact('contact'));
    }
    // end EditSlider

    public function ReplyMessage(Request $request){
        $request->validate([
            'subject' => 'required',
            'reply_message' => 'required',
        ]);

        $email = $request->email;
        $subject = $request->subject;
        $message = $request->reply_message;

        $data = [
            'name' => $request->name,
            'message' => $request->reply_message
        ];

        \Mail::send('mail.contact_reply', ['data' => $data], function($mail) use ($email, $subject){
            $mail->to($email)->subject($subject);
        });

        Contact::where('id',$request->id)->update([
            'status' => '1',
            'reply_message' => $request->reply_message,
        ]);

        $notification = array(
            'message' => 'Reply Sent Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('view_answer')->with($notification);
    }

    public function DeleteAnswer($id){
        Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Message Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

}
