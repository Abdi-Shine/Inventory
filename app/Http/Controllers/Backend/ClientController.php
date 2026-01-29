<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Image;
use Carbon\Carbon;

class ClientController extends Controller
{
    public function AllClients(){
        $clients = Client::latest()->get();
        return view('admin.backend.clients.all_clients',compact('clients'));
    } // End Method
    
    public function AddClients(){
        return view('admin.backend.clients.add_clients');
    } // End Method

    public function StoreClients(Request $request){
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload/client'), $name_gen);
        $save_url = 'upload/client/'.$name_gen;

        Client::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

         $notification = array(
            'message' => 'Client Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.clients')->with($notification);
    } // End Method

    public function EditClients($id){
        $client = Client::findOrFail($id);
        return view('admin.backend.clients.edit_clients',compact('client'));
    } // End Method

    public function UpdateClients(Request $request){
        $client_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/client'), $name_gen);
            $save_url = 'upload/client/'.$name_gen;

            Client::findOrFail($client_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $save_url,
            ]); 
            $notification = array(
                'message' => 'Client Updated with Image Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->route('all.clients')->with($notification);

        } else{
            Client::findOrFail($client_id)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]); 
            $notification = array(
                'message' => 'Client Updated without Image Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->route('all.clients')->with($notification);
        } // end Else
    } // End Method

    public function DeleteClients($id){
        $client = Client::findOrFail($id);
        $img = $client->image;
        @unlink(public_path($img));

        Client::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Client Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method
}
