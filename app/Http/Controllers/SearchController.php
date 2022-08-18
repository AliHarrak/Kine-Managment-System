<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;


class SearchController extends Controller
{
  public function index(Request $request)
    {
      //return view('patient_list_view');
      //return view('admin.search');

      $patient = patient::all();
    return view('admin.search', compact('patient'));
    } 

  public function index2()
  {
    return view('admin.datatable');
  }
 
  public function search(Request $request)
  {
    if($request->ajax())
    {
      $output = "";
      $data = DB::table('patients')
         ->select('name', 'email', 'phone', 'gender', 'birthDate')
         ->where('name', 'LIKE','%'.$request->search.'%')
         ->orWhere('email', 'LIKE','%'.$request->search.'%' )
         ->orWhere('phone', 'LIKE','%'.$request->search.'%' )
         ->orWhere('gender', 'LIKE','%'.$request->search.'%' )
         ->orWhere('birthDate', 'LIKE','%'.$request->search.'%' )
         ->orderBy('id', 'desc')
         ->get();

         if($data)
         {
          foreach($data as $key => $patient)
          {
            $output.='<tr>'.
            '<td>'.$patient->id.'</td>'.
            '<td>'.$patient->name.'</td>'.
            '<td>'.$patient->phone.'</td>'. 
            '<td>'.$patient->gender.'</td>'. 
            '<td>'.$patient->birthDate.'</td>'.
            '</tr>';
            return response($output);
          }
         }
    }
  }


        /* if(request()->ajax())
     {
      if(!empty($request->filter_gender))
      {
       
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
    

    /* public function selectSearch(Request $request)
    {
    	$patients = [];

        if($request->has('query')){
            $search = $request->query;
            $patients =Patient::select("id", "name")
            		->where('name', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($patients);
    }
 */
   
}
