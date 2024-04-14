<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Selection; // Assuming you have a Selection model

class SelectionController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'class_name' => 'required|string',
            'group_member_1' => 'required|string',
            'group_member_2' => 'required|string',
            'group_member_3' => 'required|string',
            'supervisor' => 'required|string',
        ]);

        // Create a new Selection instance
        $selection = new Selection();
        $selection->title = $validatedData['title'];
        $selection->class_name = $validatedData['class_name'];
        $selection->group_member_1 = $validatedData['group_member_1'];
        $selection->group_member_2 = $validatedData['group_member_2'];
        $selection->group_member_3 = $validatedData['group_member_3'];
        $selection->supervisor = $validatedData['supervisor'];

        // Save the Selection instance
        $selection->save();

        // Optionally, you can redirect the user to another page after successful submission
 return back()->with('success', 'Selection submitted successfully!');
    }
}
