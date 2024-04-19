<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function create()
    {
   
        return view('Announcement/add_announcement');
    }

    public function store(Request $request)
    {
        $announcement = new Announcement();
        $announcement->message = $request->input('message');
        $announcement->save();

        return redirect()->back()->with('success', 'Announcement added successfully.');
    }
}
