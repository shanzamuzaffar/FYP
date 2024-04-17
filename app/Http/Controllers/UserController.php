<?php

namespace App\Http\Controllers;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index(){
        $userdatas=User::all();
  $roles = Role::all(); 


        return view('Userdata.Userdata ',compact('userdatas','roles'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

       

        $userdata  = new User();
        $userdata ->name = $validatedData['name'];
        $userdata ->email = $validatedData['email'];
        $userdata ->password = $validatedData['password'];
        $userdata ->save();

        return redirect()->back()->with('success', 'users added successfully');
    }

 

public function update(Request $request, $id)

{
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|string',
        'password' => 'required|string',
    ]);
    $userdata  = User::findOrFail($id);

    $userdata ->name = $request->input('name');
    $userdata ->email = $request->input('email');
    $userdata ->password = $request->input('password');
    $userdata ->save();

    return redirect()->back()->with('success', 'users updated successfully');
}


public function destroy($id)
{
    $userdata = User::findOrFail($id);
    $userdata ->delete();

    return redirect()->back()->with('success', 'userdata  deleted successfully');
}


}

