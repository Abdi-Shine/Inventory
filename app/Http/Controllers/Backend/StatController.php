<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stat;
use Carbon\Carbon;

class StatController extends Controller
{
    public function AllStats(){
        $stats = Stat::latest()->get();
        return view('admin.backend.stats.all_stats',compact('stats'));
    } // End Method
    
    public function AddStat(){
        return view('admin.backend.stats.add_stat');
    } // End Method

    public function StoreStat(Request $request){
        Stat::insert([
            'title' => $request->title,
            'count' => $request->count,
            'icon' => $request->icon,
            'created_at' => Carbon::now(),
        ]);

         $notification = array(
            'message' => 'Stat Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.stats')->with($notification);
    } // End Method

    public function EditStat($id){
        $stat = Stat::findOrFail($id);
        return view('admin.backend.stats.edit_stat',compact('stat'));
    } // End Method

    public function UpdateStat(Request $request){
        $stat_id = $request->id;

        Stat::findOrFail($stat_id)->update([
            'title' => $request->title,
            'count' => $request->count,
            'icon' => $request->icon,
        ]); 

        $notification = array(
            'message' => 'Stat Updated Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('all.stats')->with($notification);
    } // End Method

    public function DeleteStat($id){
        Stat::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Stat Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method
}
