<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;


class SearchController extends Controller
{
  public function index(Request $request)
    {
      return view('patient_list_view');




        /* if(request()->ajax())
     {
      if(!empty($request->filter_gender))
      {
       $data = DB::table('patients')
         ->select('name', 'email', 'phone', 'gender', 'birthDate')
         ->where('gender', $request->filter_gender)
         ->where('name', $request->filter_name)
         ->get();
      }
      else
      {
       $data = DB::table('patients')
         ->select('name', 'email', 'phone', 'gender', 'birthDate')
         ->get();
      }
      return datatables()->of($data)->make(true);
     }

        $patient_name = DB::table('patients')
                            ->select('name')
                            ->groupBy('name')
                            ->orderBy('namer', 'ASC')
                            ->get();

        return view('search', compact('patient_name')); */
    } 

    public function selectSearch(Request $request)
    {
    	$patients = [];

        if($request->has('q')){
            $search = $request->q;
            $patients =Patient::select("id", "name")
            		->where('name', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($patients);
    }

   
}
