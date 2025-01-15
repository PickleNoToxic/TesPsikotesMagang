<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Management;
use App\Models\Participant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // $events = Event::where('is_active', 1)->count();
        // $managements = Management::where('is_active', 1)->count();
        // $participants = Participant::count();
        return view('admin.pages.index', [
            "events" => null,
            "managements" => null,
            "participants" => null,
        ]);
    }
}
