<?php

namespace App\Http\Controllers;

use App\Models\Room;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;




class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function addview()
    {
        return view('admin.add_room_view');
    }

    public function index()
    {
        $rooms = Room::all();
        return view('admin.rooms', compact('rooms'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'no' => 'required|unique:rooms|max:255',
            'no_beds' => 'required|max:255',
            'availability' => 'required|max:255'
        ],
    [
        'no.unique' => 'this room number already exists',
    ]);

        $room = new Room;

    
            $room->no = $request->no;
            $room->no_beds = $request->no_beds;
            $room->availability = $request->availability;
        

        $room->save();
        return redirect()->back()->with('message', 'Room added successfully');
    }

    public function deleteRoom($id) 
    {
        $room = room::find($id);
        $room->delete();
        if ($room) {
         return redirect()->back()->with('message','Room has been deleted');
     }
     return response($room, 200);
       }

    public function updateRoomAvailability(Request $request)
    {
        $enable = Room::where('id', $request->roomId)->update(array('availability' =>$request->newStatus));

        $data["availability"] = $enable;
        if($enable)
        {
            $data["message"] = "The Room availability status has been updated";
        }
        else {
            $data["message"] = "The Room availability status has not been updated";
        }
       // return redirect()->back()->with('data', $data);
        return response()->json(['data' => $data]);
        
        /* if ($room->availability == "available")
        {
            $room->availability = "occupied";
        }
        else {
            $room->availability = "available";
        }
        return $room->availability;  */
    
   
    
    
    
    
    }

    }
