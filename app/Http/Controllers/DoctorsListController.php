<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;



class DoctorsListController extends Controller
{
     public function __construct()
     {
         $this->middleware(['auth']);
     }
     
   public function index()
   {
    $doctor = doctor::all();
    return view('admin.doctor_info', compact('doctor'));
   }

   public function edit($id)
   {
        $doctor = doctor::find($id);
        return view('admin.edit_doctor')->with('doctor', $doctor);
   }

   public function updateDoctor(Request $request, $id)
   {
        $doctor = doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        
        $image = $request->file;
        if($image)
        {
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorimage', $imagename);
        $doctor->image = $imagename;
        }
        $doctor->update();
        $result = $doctor->save();
        if ($result) {
            return redirect()->back()->with('message','Doctor info Updated');
        }
        return response($doctor, 200);
   }

   public function deleteDoctor(Request $request, $id)
   {
    $doctor = doctor::find($id);
    $doctor->delete();
    if ($doctor) {
     return redirect()->back()->with('message','Doctor has been deleted');
 }
 return response($doctor, 200);
   }

   public function viewProfile($id)
   {
    $doctor = doctor::find($id);
    return view('admin.doctor_profile')->with('doctor', $doctor);
   }
}
