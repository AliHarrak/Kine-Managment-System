<?php

namespace App\Http\Controllers;

use App\Models\Appointement;
use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
public function index()
{  $appoint = appointement::take(5)->get();
   $appt2 = appointement::all();
    return view('admin.dashboard', compact('appoint', 'appt2'));
    
}
}
