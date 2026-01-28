<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Titles;

class TitlesController extends Controller
{
    // View all titles
    public function ViewTitle()
    {
        $titles = Titles::oldest()->get();
        return view('admin.backend.title.view_title', compact('titles'));
    } 

    // Show add title form
    public function AddTitle(){
        return view('admin.backend.title.add_title');
    }
    
    // Store new title
    public function StoreTitle(Request $request){
        $request->validate([
            'title1' => 'nullable|string|max:255',
            'description1' => 'nullable|string',
            'title2' => 'nullable|string|max:255',
            'title3' => 'nullable|string|max:255',
            'description3' => 'nullable|string',
            'title4' => 'nullable|string|max:255',
            'description4' => 'nullable|string',
        ]);

        Titles::create($request->all());

        $notification = array(
            'message' => 'Title created successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('view_title')->with($notification);
    }
    
    // Show edit title form
    public function EditTitle($id){
        $title = Titles::findOrFail($id);
        return view('admin.backend.title.edit_title', compact('title'));
    }
    
    // Update title
    public function UpdateTitle(Request $request){
        $request->validate([
            'id' => 'required|exists:titles,id',
            'title1' => 'nullable|string|max:255',
            'description1' => 'nullable|string',
            'title2' => 'nullable|string|max:255',
            'title3' => 'nullable|string|max:255',
            'description3' => 'nullable|string',
            'title4' => 'nullable|string|max:255',
            'description4' => 'nullable|string',
        ]);

        $title = Titles::findOrFail($request->id);
        $title->update($request->all());

        $notification = array(
            'message' => 'Title updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('view_title')->with($notification);
    }
    
    // Delete title
    public function DeleteTitle($id){
        Titles::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Title deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    
    // Preview title
    public function PreviewTitle($id){
        $title = Titles::findOrFail($id);
        return view('admin.backend.title.preview_title', compact('title'));
    }
}
