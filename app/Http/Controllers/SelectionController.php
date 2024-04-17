<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Selection; // Assuming you have a Selection model
use App\Models\Supervisor;

class SelectionController extends Controller
{

    public function index(){
        $supervisors=Supervisor::all();
        return view('TitleSelection',compact('supervisors'));
    }

    public function store(Request $request)
    {
        // Validate the form data
$s_id = $request['supervisor_id'];

        $available = Supervisor::findOrFail($s_id);
        if($available->available_slot!=0) {   
        $request->validate([
            'title' => 'required|string',
            'class_name' => 'required|string',
            'group_member_1' => 'required|string',
            'group_member_2' => 'required|string',
            'group_member_3' => 'required|string',
            'supervisor_id' => 'required',
        ]);

        $selection = new Selection();
        $selection->title = $request['title'];
        $selection->class_name = $request['class_name'];
        $selection->group_member_1 = $request['group_member_1'];
        $selection->group_member_2 = $request['group_member_2'];
        $selection->group_member_3 = $request['group_member_3'];
        $selection->supervisor_id = $request['supervisor_id'];

        // Save the Selection instance
   $selection->save();
    }
// $available = Supervisor::findOrFail($s_id);

// Check if available slots are greater than 0 before decrementing
if ($available->available_slots > 0) {
    $available->available_slots = $available->available_slots - 1;
    $available->save();
} else {
     return redirect()->back()->withErrors(['error' => 'No available slots left.']);
}

        // Optionally, you can redirect the user to another page after successful submission
         return back()->with('success', 'Selection submitted successfully!');
    }

    public function finalized(){
        $selections = Selection::with('supervisor')->get();
        return view('finalizesupervisor',compact('selections'));
    }
}
