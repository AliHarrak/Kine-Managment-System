<?php

namespace App\Http\Controllers;

use App\Models\Appointement;
use Illuminate\Http\Request;

class AddAppointController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function addview()
    {
        return view('admin.add_appoint');
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'Date' => 'required',
        ]);
    $appoint = new Appointement;

    $appoint->name = $request->name;
    $appoint->email = $request->email;
    $appoint->phone = $request->phone;
    $appoint->Date = $request->Date;
    $appoint->therapy = $request->therapy;
    $appoint->description = $request->description;

    $appoint->save();
    return redirect()->back()->with('message', 'Appointement Added Successfully');
    
    
    
    }

}
