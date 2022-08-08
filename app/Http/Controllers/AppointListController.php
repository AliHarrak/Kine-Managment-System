<?php

namespace App\Http\Controllers;

use App\Models\Appointement;
use Illuminate\Http\Request;

class AppointListController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
   {
    $appoint = appointement::all();
    return view('admin.appoint_list', compact('appoint'));
   }

   public function edit($id)
   {
        $appoint = appointement::find($id);
        return view('admin.edit_appoint', compact('appoint'));
   }

   public function updateAppoint(Request $request, $id)
   {
        $appoint = appointement::find($id);
        $appoint->update($request->all());
        $result = $appoint->save();
        if ($result) {
            return redirect()->back()->with('message', 'Appointement Updated');
        }
        return response($appoint, 200);

   }


   public function deleteAppoint($id)
   {
    $appoint = appointement::find($id);
    $appoint->delete();
    if($appoint) {
        return redirect()->back()->with('message', 'Appointement has been Canceled');
    }
    return response()->json(null, 204);

   }
}
