<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function addview()
    {
        return view('admin.add_doctor');
    }
    public function upload(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);


        $doctor = new doctor;

        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);

        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;

        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Added Successfully');
    }

    public function profileView()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }
   
    public function editUser()
    {  $user = Auth::user();
        return view('admin.edit_user', compact('user'));
    }

    public function updateUser(Request $request)
   {

   /* $this->validate($request, [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required',
        'address' => 'required',
    ]);*/
        $user = Auth::user();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;


        
        $image = $request->file;
        if($image)
        {
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('profile_photo_path', $imagename);
        $user->image = $imagename;
        }
        $user->update();
        $result = $user->save();
        if ($result) {
            return view('admin.profile', compact('user'))->with('message','User info Updated');
        }
        return response($user, 200);
   }
}
