<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class AddPatientController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function addview()
    {
        return view('admin.add_patient');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|max:255',
            'birthDate' => 'required',
            'gender' => 'required',
        ]);
        $patient = new Patient;

    
            $patient->name = $request->name;
            $patient->phone = $request->phone;
            $patient->email = $request->email;
            $patient->birthDate = $request->birthDate;
            $patient->gender = $request->gender;
        
        $patient->save();
        return redirect()->back()->with('message', 'Patient Added Successfully');
    }
}
