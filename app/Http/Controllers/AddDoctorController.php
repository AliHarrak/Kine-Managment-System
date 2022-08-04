<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AddDoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'speciality' => 'required',
            'image' => 'required',
        ]);
        $doctor = new Doctor;
    

    Doctor::create([
        $doctor->name => $request->name,
        $doctor->phone => $request->phone,
        $doctor->speciality => $request->speciality,
        $doctor->image =>$request->image, 
        ]);
  $doctor->save();
        return redirect()->back()->with('message', 'Doctor Added Successfully');
    }
}
