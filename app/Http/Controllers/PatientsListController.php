<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Alert;



class PatientsListController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
   {
    $patient = patient::all();
    return view('admin.patient_list', compact('patient'));
   }

   public function edit($id)
   {
        $patient = patient::find($id);
        return view('admin.edit_patient')->with('patient', $patient);
   }
   public function updatePatient(Request $request, $id)
   {
        $patient = patient::find($id);
        $patient->update($request->all());
        $result = $patient->save();
        if ($result) {
            return view('admin.patient_profile', compact('patient'))->with('message', 'Patient Updated');
        }
        else
        return response()->json(null, 204);

   }

   
   public function deletePatient($id)
   {
    $patient = patient::find($id);
    $patient->delete();
    if($patient) {

        return redirect()->back()->with('message', 'Patient has been Deleted');
    }
    return response()->json(null, 204);

   }

  public function viewProfile($id)
  {
    $patient = patient::find($id);
    return view('admin.patient_profile')->with('patient', $patient);
  }


  

 
}
