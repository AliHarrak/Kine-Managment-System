<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assistant;

class AssistantController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function addview()
    {
        return view('admin.add_assistant');
    }
    public function upload(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);


        $assistant = new Assistant;

        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);

        $assistant->image = $imagename;
        $assistant->name = $request->name;
        $assistant->phone = $request->phone;
        $assistant->speciality = $request->speciality;

        $assistant->save();
        return redirect()->back()->with('message', 'Assistant Added Successfully');
    }


    public function index()
   {
    $assistant = Assistant::all();
    return view('admin.assistant_info', compact('assistant'));
   }

   public function edit($id)
   {
        $assistant = Assistant::find($id);
        return view('admin.edit_assistant')->with('assistant', $assistant);
   }

   public function updateAssistant(Request $request, $id)
   {
        $assistant = Assistant::find($id);
        $assistant->name = $request->name;
        $assistant->phone = $request->phone;
        $assistant->speciality = $request->speciality;
        
        $image = $request->file;
        if($image)
        {
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorimage', $imagename);
        $assistant->image = $imagename;
        }
        $assistant->update();
        $result = $assistant->save();
        if ($result) {
            return redirect()->back()->with('message','Assistant info Updated');
        }
        return response($assistant, 200);
   }

   public function deleteAssistant(Request $request, $id)
   {
    $assistant = Assistant::find($id);
    $assistant->delete();
    if ($assistant) {
     return redirect()->back()->with('message','Assistant has been deleted');
 }
 return response($assistant, 200);
   }

   public function viewProfile($id)
   {
    $assistant = Assistant::find($id);
    return view('admin.assistant_profile')->with('assistant', $assistant);
   }

}
