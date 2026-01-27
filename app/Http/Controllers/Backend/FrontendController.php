<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display the frontend management view.
     */
    public function ViewFrontend()
    {
        return view('admin.backend.frontend.view_frontend');
    }

    /**
     * Show the form for editing the frontend component.
     */
    public function EditFrontend($id)
    {
        // Placeholder for edit logic
        return view('admin.backend.frontend.edit_frontend', compact('id'));
    }

    /**
     * Display the About Us page on the frontend.
     */
    public function AboutUs()
    {
        return view('home.about.about_us');
    }
}
